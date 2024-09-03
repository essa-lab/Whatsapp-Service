<?php

namespace App\Livewire;

use App\Models\Payments;
use App\Models\ServicePlan;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Title;
use Livewire\Component;

class Payment extends Component
{
    public $servicePlan,$payments;
    public function mount($payment){
        $this->servicePlan = ServicePlan::find($payment);
        $this->payments = Payments::get();
        Cache::put('plan_price',$this->servicePlan->price);
        Cache::put('plan_id',$this->servicePlan->service_plan_id);

    }

    #[Title('Payment')] 
    public function render()
    {
        return view('livewire.payment');
    }
}
