<?php

namespace App\Livewire;

use App\Models\ServicePlan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;


class Subscription extends Component
{
    public $servicePlans;
    public $user;
    #[Title('subscription')]
    public function mount()
    {
        $this->servicePlans = ServicePlan::where('is_active', 1)->get();
        $this->user =Auth::user();
    }
    public function render()
    {
        return view('livewire.subscription');
    }

    public function purchase($planID)
    {
        return redirect(route('payment',['payment'=>$planID]));
    }

}
