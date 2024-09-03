<?php

namespace App\Livewire;

use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesList extends Component
{
    use WithPagination;

    #[Url(as:'query',history:true)]
    public $query;
    
    #[Title('Messages')] 
    public function render()
    {
        return view('livewire.messages-list',['messages'=> Message::where('user_id',Auth::user()->id)
                                                                        ->where('to','like','%'.$this->query.'%')
                                                                        ->orWhere('from','like','%'.$this->query.'%')->paginate(10)]);
    }

}
