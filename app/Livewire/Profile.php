<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

class Profile extends Component
{

    public $name,$email,$password,$newPassword,$confirmPassword,$message;
    public function mount(){
        $this->name = Auth::user()->name;
        $this->email=Auth::user()->email;
    }

    #[Title('Profile')] 

    public function render()
    {

        return view('livewire.profile');
    }
    public function updateInformation(){
        $user = User::where('id',Auth::user()->id)->first();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();
        return redirect(route('profile'));
    }

    public function updatePassword(){
        $user = User::where('id',Auth::user()->id)->first();
        if(!Hash::check($this->password,$user->password)){
            $this->message = 'Check your password,Please!';
            return;
        }
        if($this->newPassword != $this->confirmPassword){
            $this->message = 'Your passwords are not equals';
            return;
        }
        $user->password=Hash::make($this->newPassword);
        $user->save();

        $this->password=$this->newPassword=$this->confirmPassword=$this->message='';
    }
}
