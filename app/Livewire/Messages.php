<?php

namespace App\Livewire;

use App\Models\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Messages extends Component
{
    use LivewireAlert;

    public $phoneNumber;
    public $name;
    public $profileImage;
    public $sessionName;
    protected $listeners = [
        'confirmed'
    ];

    #[Validate('required')]
    public $reciverPhoneNumber = '';

    public function mount()
    {
        $values = Session::select('phone', 'push_name', 'pic_url')->where('name', $this->sessionName)->first();
        Log::info($values);
        $this->phoneNumber = $values['phone'];
        $this->name = $values['push_name'];
        $this->profileImage = $values['pic_url'];
    }

    public function render()
    {
        return view('livewire.messages');
    }

    public function send()
    {

        $this->validate();
        Log::info($this->reciverPhoneNumber);
        $response = Http::post(env('WHATSAPP_HOST') . '/message/send_list', [
            'session' => $this->sessionName,
            'phones' => [$this->reciverPhoneNumber],
            'message' => 'This Message has sent from  Whatsapp Service for test purpose.'
        ]);

        Log::info($response->body());

        // return $this->redirect('/posts');
    }
    public function deleteInstance()
    {

        $this->alert('question', 'Are you sure?', [
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'position' => 'center',

            'confirmButtonText' => 'Delete',
            'onConfirmed' => 'confirmed',
            'timer' => null
        ]);
    }
    public function confirmed()
    {
        $response = Http::post(env('WHATSAPP_HOST') . '/sessions/disconnect', [
            'session' => $this->sessionName,
        ]);

        Log::info($response->body());
    }
}
