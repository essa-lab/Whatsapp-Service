<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    #[Url(as:'query',history:true)]
    public $query;
    
    #[Title('Users')] 
    public function render()
    {
        return view('livewire.admin.user',['users'=> User::where('name','like','%'.$this->query.'%')->orWhere('email','like','%'.$this->query.'%')->with('subscripe.servicePlan')->paginate(10)]);
    }

    public function openUser($id){

        return redirect(route('admin.userDeatils',['id'=>$id]));
    }
}
