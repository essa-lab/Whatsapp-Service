<?php

namespace App\Livewire\Admin;

use App\Models\ServicePlan;
use Livewire\Attributes\Title;
use Livewire\Component;

class Plans extends Component
{


    public $plans;



    public function mount(){
        $this->plans = ServicePlan::get();
    }
    
    #[Title('Plans')] 
    public function render()
    {
        return view('livewire.admin.plans');
    }

    public function openPlan($id){

        return redirect(route('admin.planDetails',['id'=>$id]));
    }
}
