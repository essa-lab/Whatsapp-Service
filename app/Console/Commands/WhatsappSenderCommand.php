<?php

namespace App\Console\Commands;

use App\Models\Message;
use App\Services\MessageService;
use App\Services\UserService;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class WhatsappSenderCommand extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'whatsapp:sender';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Whatsapp messages';

    private $lockFile = '/tmp/whatsapp_service.lock';

    protected $userService, $messageService;

    public function __construct(UserService $userService, MessageService $messageService)
    {
        parent::__construct();
        $this->userService = $userService;
        $this->messageService = $messageService;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {

        if ($this->isLockProcess()) {
            return 0;
        }

        $this->lockProcess();
        $messages = Message::where('status', 'new')->with('user')->get();
        foreach ($messages as $key => $message) {
            try {
            $this->info($key . '- Send Message from ' . $message['from'] . ' To ' . $message['to']);
            $session = $message->user->sessions->first(function ($session) use ($message) {
                return $session->phone == $message['from'];
            });
            $sessionStatus = $this->userService->checkUserSission($session);
            if (!$sessionStatus) {
                $this->error('Message ID ('.$message['id'].') Session is not connected : ' . $session['name']);
                continue;
            }

            $this->info('Session is connected : ' . $session['name']);

            
                $this->messageService->changeMessageStatus($message['id'], 'pending');
                $this->info('Message Status Changed to Pending');

                $hasSent = $this->messageService->send([
                    'session' => $session['name'],
                    'message' => $message['message'],
                    'receiver' => $message['to']
                ]);

                if (!$hasSent) {
                    $this->messageService->changeMessageStatus($message['id'], 'error', session()->get('msg'));
                    $this->error('Message Status Changed to error');
                    continue;
                } 
                $this->messageService->changeMessageStatus($message['id'], 'send', session()->get('msg'));
                $this->info('Message Status Changed to Send');
              
            } catch (Exception $e) {
                $this->messageService->changeMessageStatus($message['id'], 'error', $e->getMessage());
                $this->info($e->getMessage());
            }

            $this->info('-----------------------------------------------------------------------------------');

            sleep(env('SLEEP_BETWEEN_MESSAGES', 15));
        }
        $this->unlockProcess();
    }

    private function isLockProcess()
    {
        if (file_exists($this->lockFile)) {
            $this->info('Whatsapp Service: The process was exist !');

            return true;
        }

        return false;
    }

    private function lockProcess()
    {
        exec('touch ' . $this->lockFile);
        $date = Carbon::now()->toDateTimeString();
        $this->info("Whatsapp Service: create new process on: {$date}");
    }

    private function unlockProcess()
    {
        if (file_exists($this->lockFile)) {
            $date = Carbon::now()->toDateTimeString();
            $this->info('path file : ' . $this->lockFile);
            exec('rm ' . $this->lockFile);
            $this->info("Whatsapp Service: Remove local process {$date}");
        }
    }
}
