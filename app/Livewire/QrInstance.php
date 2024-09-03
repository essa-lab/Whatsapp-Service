<?php

namespace App\Livewire;

use App\Services\Account\SessionService;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class QrInstance extends Component
{
    private $sessionService;
    public $qr,$sessionName;
    public $seconds=0;
    
    public function boot(){
        $this->sessionService = new SessionService();

    }
    public function render()
    {
        $this->seconds++;
        return view('livewire.qr-instance');
    }

    public function initQr(){
        Log::info("Session Name : ".$this->sessionName);
        $this->qr = $this->sessionService->connect($this->sessionName);
    }

    public function refreshQr(){
        $this->seconds = 0;
        $this->qr=null;

        $this->initQr();
    }

    
}
