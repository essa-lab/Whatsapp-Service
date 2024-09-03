<?php
namespace App\Services;

use App\Models\Message;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Http;

class MessageService {

   public function send(array $data){
    try{
        $response = Http::post(env('WHATSAPP_HOST').'/message/send',[
            'session'=>$data['session'],
            'message'=>$data['message'],
            'phone'=>$data['receiver']
        ]);
        session()->put('msg',$response);
        if(!$response->ok()){
            return false;        
        }
        if(isset(json_decode($response->body())->status)){
            return false;        
        }
        session()->put('msg',json_encode(json_decode($response->body())->message->_data->id));

        return true;
    }catch(Exception $e){
        throw $e;
    }

   }

   public function storeMessage(array $data,string $status){

        Message::create([
            'message'=>$data['message'],
            'to'=>$data['receiver'],
            'from'=>$data['sender'],
            'status'=>$status,
            'user_id'=>$data['user_id']
        ]);
   }

   public function changeMessageStatus(int $messageId,string $status,$response=null){
    $message = Message::find($messageId);
    if (!$message) {
        throw new ModelNotFoundException("Message with ID {$messageId} not found.");
    }

    $message->status = $status;
    if($response){
        $message->response = $response;
    }
    $message->save();
    
    }

 

//    public function validatePhoneNumber(string $phone){

//     $number = preg_replace('/[^0-9]/', '', $phone);
//     if (strpos($number, '00') === 0)
//         $number = substr($number, 2);
//     if (strpos($number, '+') !== 0)
//         $number = '+964' . substr($number, strlen($number) - 10);
//     return $number;
//    }
}