<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserNav extends Component
{
    public $subscripe,$sessionName;
    public function mount(){
        $this->subscripe=Auth::user()->subscripe;
        $this->sessionName = Auth::user()->sessions->first()->name;
    }
    public function render()
    {
        return view('livewire.user-nav');
        
    }

   
    

}
