<?php

namespace App\Livewire\Admin;

use App\Models\Message;
use App\Models\Session;
use App\Models\SubscripedUser;
use App\Models\User;
use App\Services\MessageService;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

class Dashboard extends Component
{
    use LivewireAlert;

    public $users, $subscribedUser, $connectedSessions, $sessions, $servicePlans, $monthlyConsumptionRequest,$selectSessions;

    public $sessionName, $phoneNumber, $message;

    #[Url()]
    public $year;

    public function mount()
    {
        $this->selectSessions = Session::where('status','connected')->get();
        $monthlyCounts = Message::whereYear('created_at', $this->year??2024)
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->pluck('count', 'month')
            ->toArray();

        $this->monthlyConsumptionRequest = array_fill(0, 12, 0); 

        foreach ($monthlyCounts as $month => $count) {
            $this->monthlyConsumptionRequest[$month - 1] = $count;
        }


        $this->servicePlans = SubscripedUser::select(['service_plan_id', DB::raw('COUNT(*) as count')])
            ->groupBy('service_plan_id')
            ->orderBy('service_plan_id')
            ->get();

        $this->users = User::count();
        $this->subscribedUser = SubscripedUser::where('is_active', 1)->whereNot('service_plan_id', 1)->count();
        $this->sessions = Session::count();
        $this->connectedSessions = Session::where('status', 'connected')->count();
    }

    #[Title('Dashboard')]
    public function render()
    {
        return view('livewire.admin.dashboard');
    }

    public function sendMessage()
    {
        try {
            Log::info($this->sessionName);
            $hasSent = (new MessageService())->send(
                [
                    'session' => $this->sessionName,
                    'message' => $this->message,
                    'reciver' => $this->phoneNumber
                ]
            );
            if ($hasSent)
                $this->alert('success', 'Message Has Sent Successfully', ['position' => 'center',]);
            else {
                $this->alert('warning', 'Error. Please Check the LOGS');
            }
        } catch (Exception $e) {
            Log::info($e->getMessage());
            $this->alert('warning', 'Error. Please Check the LOGS');
        }
    }

    public function yearChange()
    {
        $monthlyCounts = Message::whereYear('created_at', $this->year)
        ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->pluck('count', 'month')
        ->toArray();

    $this->monthlyConsumptionRequest = array_fill(0, 12, 0);

    foreach ($monthlyCounts as $month => $count) {
        $this->monthlyConsumptionRequest[$month - 1] = $count;
    }
    }
}
