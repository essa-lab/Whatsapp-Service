<?php
namespace App\Services;

use App\Mail\ConfirmRegisterationMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthService {

    public function register(array $userData):null|User{
        $user = User::create($userData);

        if($user){
            $user->token=bin2hex(random_bytes(20));
            $user->save();
            $user->sessions()->create();
            $user->createApiToken();
            $user->subscripeUser();

            Mail::to($user->email)->queue(new ConfirmRegisterationMail([
                'name'=>$user->name,
                'token'=>$user->token
            ]));
            session()->put('email',$user->email);
            return $user;
        }
        return null;
    }

    public function login(array $userData){
        return Auth::attempt($userData);
    }
}