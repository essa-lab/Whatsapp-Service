<?php

namespace App\Livewire;

use App\Models\ContactUs;
use Livewire\Attributes\Title;
use Livewire\Component;

class Contact extends Component
{ 
    public $name,$email,$message,$phone;
    
    #[Title('Contact')] 
    public function render()
    {
        $this->name=$this->email=$this->message=$this->phone='';
        return view('livewire.contact');
    }
    public function sendMessage(){

        ContactUs::create(['name'=>$this->name,'email'=>$this->email,'message'=>$this->message,'phone'=>$this->phone]);
    }
}
