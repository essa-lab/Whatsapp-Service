<?php

namespace App\Livewire\Admin;

use App\Models\ServicePlan;
use App\Models\SubscripedUser;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

class UserDetails extends Component
{
    use LivewireAlert;

    
    public $user,$servicePlans,$subscriptions;

    public $name, $email, $phone , $token;

    public $servicePlan, $expireDate, $requestsLimit, $requestsUsed, $instanceLimit, $instanceUsed, $isActive;

    public function mount($id)
    {
        $this->subscriptions = SubscripedUser::where('user_id',$id)->orderBy('is_active')->get();
        Log::info($this->subscriptions);
        $this->servicePlans = ServicePlan::get();
        $this->user = User::with('subscripe')->find($id);

        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
        $this->isActive = $this->user->is_active;
        $this->token = $this->user->token?$this->user->token->key:'';

        if ($this->user->subscripe) {

            $this->servicePlan = $this->user->subscripe->service_plan_id;
            $this->expireDate = $this->user->subscripe->subscription_end_date;
            $this->requestsLimit = $this->user->subscripe->requests_limit;
            $this->requestsUsed = $this->user->subscripe->requests_used;
            $this->instanceLimit = $this->user->subscripe->instances_limit;
            $this->instanceUsed = $this->user->subscripe->instances_used;
            $this->isActive = $this->user->subscripe->is_active;
       
        }

        Log::info($this->user);
    }


    #[Title('User Details')]
    public function render()
    {
        return view('livewire.admin.user-details');
    }

    public function editPersonalInformation(){
        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->phone = $this->phone;
        $this->user->save();
        $this->alert('success', 'Personal Information Updated Successfully', [
            
            'position' => 'center',

            
        ]);
    }
    public function editSubscriptionInformation(){
        $this->user->subscripe->service_plan_id = $this->servicePlan;
        $this->user->subscripe->subscription_end_date = $this->expireDate;
        $this->user->subscripe->requests_limit = $this->requestsLimit;
        $this->user->subscripe->requests_used = $this->requestsUsed;
        $this->user->subscripe->instances_limit = $this->instanceLimit;
        $this->user->subscripe->instances_used = $this->instanceUsed;
        $this->user->subscripe->is_active = $this->isActive;

        $this->user->subscripe->save();
        
        $this->alert('success', 'Subscription Information Updated Successfully', [
            
            'position' => 'center',

            
        ]);
    }
}
