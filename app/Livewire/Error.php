<?php

namespace App\Livewire;


use Livewire\Attributes\Title;
use Livewire\Component;

class Error extends Component
{

    #[Title('Error')] 
    public function render()
    {
        return view('livewire.404');
        
    }

   
    

}
