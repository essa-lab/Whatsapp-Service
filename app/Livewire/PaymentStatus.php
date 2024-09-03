<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class PaymentStatus extends Component
{
    public $status ;
    public function mount($status){
        $this->status = $status;
    }

    #[Title('Payment Status')] 
    public function render()
    {
        return view('livewire.payment-status');
    }
}
