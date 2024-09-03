<?php

namespace App\Livewire\Admin;

use App\Models\Payments;
use Livewire\Attributes\Title;
use Livewire\Component;

class Payment extends Component
{


    public $payments;



    public function mount(){
        $this->payments = Payments::get();
    }
    
    #[Title('Payment')] 
    public function render()
    {
        return view('livewire.admin.payment');
    }

    public function openPayment($id){
        return redirect(route('admin.payment.details',['id'=>$id]));
    }

   
}
