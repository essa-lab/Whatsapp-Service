<?php
namespace App\Services;

use App\Models\Session;
use App\Models\SubscripedUser;
use Illuminate\Support\Facades\Log;

class UserService {

    private $CONNECTED = 'connected';

    public function checkUserSission(Session $session):bool{
        if($session->status == $this->CONNECTED ){
            return true;
        }
        Log::info('Session is '.$session->status);
        return false;
    }

    public function isEligableToSendMessage(SubscripedUser $user):bool{
        return $user->requests_limit > $user->requests_used;
    }

    public function chargeUser(SubscripedUser $user):void{
        $user->requests_used++;
        $user->save();
    }


   
}