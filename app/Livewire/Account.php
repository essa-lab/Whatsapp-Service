<?php

namespace App\Livewire;

use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Account extends Component
{

    public $user,$previousStatus,$phoneNumber,$sessionName;

    public function mount($sessionName){
        $this->sessionName = $sessionName;
        $this->user = Auth::user();
        $this->previousStatus = Session::where('name',$sessionName)->first()->status; 

    }
   
    #[Title('Account')] 
    public function render()
    {
        return view('livewire.account',
        ['expires_in'=>Carbon::parse($this->user->subscripe->subscription_end_date)
                        ->diffInHours($this->user->subscripe->subscription_start_date),
        ]);
    }

    public function checkStatusChange()
    {
        $currentStatus = Session::where('name', $this->sessionName)->value('status');

        if ($currentStatus !== $this->previousStatus) {
            $this->previousStatus = $currentStatus; 
        }


    }




}
