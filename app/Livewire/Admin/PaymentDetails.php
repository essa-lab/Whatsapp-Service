<?php

namespace App\Livewire\Admin;

use App\Models\Payments;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

class PaymentDetails extends Component
{
    use LivewireAlert;

    public $payment;

    public $name, $active ,$config;


    public function mount($id)
    {
        $this->payment = Payments::find($id);

        $this->name = $this->payment->payment_name;
        $this->active = $this->payment->is_active;
        $this->config = json_decode($this->payment->config,true);

    }


    #[Title('Payment Details')]
    public function render()
    {
        return view('livewire.admin.payment-details');
    }

    public function editPaymentInformation(){
        $this->payment->payment_name = $this->name;
        $this->payment->is_active=$this->active ;
        $this->payment->config=json_encode($this->config) ;

        $this->payment->save();

        $this->alert('success', 'Payment Updated Successfully', [
            
            'position' => 'center',

            
        ]);

    }
  
}
