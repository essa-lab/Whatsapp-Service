<?php

namespace App\Livewire\Admin;

use App\Models\ServicePlan;
use Livewire\Attributes\Title;
use Livewire\Component;


class PlanDetails extends Component
{


    public $plan;

    public $name, $description, $requestLimit , $instanceLimit, $price, $isActive, $month;


    public function mount($id){
        $this->plan = ServicePlan::find($id);
        $this->name = $this->plan->plan_name;
        $this->description = $this->plan->description;
        $this->requestLimit = $this->plan->requests_limit;
        $this->instanceLimit = $this->plan->instances_limit;
        $this->price = $this->plan->price;
        $this->month = $this->plan->duration_months;
        $this->isActive = $this->plan->is_active;
    }
    
    #[Title('Plans')] 
    public function render()
    {
        return view('livewire.admin.planDetails');
    }

    public function editPlan(){
        $this->plan->plan_name = $this->name;
        $this->plan->description = $this->description;
        $this->plan->requests_limit = $this->requestLimit;
        $this->plan->instances_limit=$this->instanceLimit;
        $this->plan->price=$this->price;
        $this->plan->duration_months=$this->month ;
        $this->plan->is_active=$this->isActive ;

        $this->plan->save();
    }

}
