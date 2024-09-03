<?php

namespace App\Livewire;

use App\Models\AuthApiKey\ApiKey;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class ApiToken extends Component
{
    public $token;
    public function mount(){
        $this->token = ApiKey::where('user_id',Auth::user()->id)->value('key');
    }

    #[Title('ApiToken')] 
    public function render()
    {
        return view('livewire.api-token');
    }
    public function generateToken(){
        $user = User::where('id',Auth::user()->id)->first();
        $user->updateApiToken();
        
         $this->token = $user->token->key;
    }
}
