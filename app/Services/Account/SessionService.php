<?php
namespace App\Services\Account;

use App\Models\Session;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SessionService {

   public function connect(string $session){
        try{
            $response = Http::post(env('WHATSAPP_HOST').'/sessions/create',[
                'session'=>$session
            ]);
            if(!$response->ok()){
                throw $response->object();
            }
            return $response->object()->data->qr;

        }catch(Exception $e){
            throw $e->getMessage();
        }
   }
}