<?php

namespace App\Livewire;

use App\Models\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str;


class Instances extends Component
{
    public $instance;
    public $sessions;

    public function mount(){
        $this->sessions =  Auth::user()->sessions;
        $this->instance =  Auth::user()->subscripe;
    }

    #[Title('Instances')] 
    public function render()
    {
        return view('livewire.instances');
    }

    public function goToFreePlan(){
        return redirect(route('instance',['sessionName'=>$this->sessions[0]->name]));
    }
    public function goToChoosePlan(){
        return redirect(route('subscriptions'));
    }

    public function openSession($sessionName)
    {
        return redirect(route('instance',['sessionName'=>$sessionName]));
    }

    public function createInstance(){

        if($this->instance->instances_limit <= $this->instance->instances_used){
            return redirect(route('subscriptions'));
        }else{
            $session = new Session();
            $session->user_id = Auth::user()->id;
            $session->name =Str::random();
            $session->save();

            $this->instance->instances_used +=1;
            $this->instance->save();

            $this->sessions = User::where('id',Auth::user()->id)->first()->sessions;

        }

    }
}
