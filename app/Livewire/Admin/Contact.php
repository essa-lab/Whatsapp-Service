<?php

namespace App\Livewire\Admin;

use App\Models\ContactUs;
use Livewire\Attributes\Title;
use Livewire\Component;

class Contact extends Component
{


    public $contacts;



    public function mount(){
        $this->contacts = ContactUs::get();
    }
    
    #[Title('Contact')] 
    public function render()
    {
        return view('livewire.admin.contact');
    }

   
}
