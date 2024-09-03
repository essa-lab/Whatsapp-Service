<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageGETRequest;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\SessionStatusRequest;
use App\Models\AuthApiKey\ApiKey;
use App\Services\Account\SessionService;
use App\Services\MessageService;
use App\Services\UserService;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    //

    public function __construct(private MessageService $messageService, private UserService $userService, private SessionService $sessionService){}

    public function sendMessage(MessageRequest $request){
        try {
            $validated = $request->validated();

            Log::info('----------- Validated Data --------------');
            Log::info($validated);

            $user = ApiKey::getUserByHeader($request);

            Log::info('----------- user --------------');
            Log::info($user);

            $session = $user->sessions->first(function ($session) use ($validated) {
                return $session->name == $validated['instance'];
            });
            if (!$session) 
                return $this->sendError('The Given Session don\'t belong to this user');
            

            $sessionStatus = $this->userService->checkUserSission($session);
            if (!$sessionStatus) 
                return $this->sendError('User Session is not connected');
            
            $requestLimit = $this->userService->isEligableToSendMessage($user->subscripe);
            if(!$requestLimit)
                return $this->sendError('User Has reached the maximum limit of requests.');

            $validated['sender']=$session->phone;
            $validated['user_id'] = $user['id'];
            $this->messageService->storeMessage($validated,'new');
            
            $this->userService->chargeUser($user->subscripe);

            return response()->json([
                'message'=>'Message has sent successfully!'
            ], 200);

        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), [], 500);
        }
    }

    public function sendMessageGET(MessageGETRequest $request){
        try {
            $validated = $request->validated();

            if (strpos($validated['receiver'],'+') !== 0) {
                $validated['receiver'] = '+'.$validated['receiver'];
            }
            Log::info('----------- Validated Data --------------');
            Log::info($validated);

            $user = ApiKey::getUserByHeader($request);

            Log::info('----------- user --------------');
            Log::info($user);

            $session = $user->sessions->first(function ($session) use ($validated) {
                return $session->name == $validated['instance'];
            });
            if (!$session) 
                return $this->sendError('The Given Session don\'t belong to this user');
            

            $sessionStatus = $this->userService->checkUserSission($session);
            if (!$sessionStatus) 
                return $this->sendError('User Session is not connected');
            
            $requestLimit = $this->userService->isEligableToSendMessage($user->subscripe);
            if(!$requestLimit)
                return $this->sendError('User Has reached the maximum limit of requests.');

            $validated['sender']=$session->phone;
            $validated['user_id'] = $user['id'];
            $this->messageService->storeMessage($validated,'new');
            
            $this->userService->chargeUser($user->subscripe);

            return response()->json([
                'message'=>'Message has sent successfully!'
            ], 200);

        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), [], 500);
        }
    }


    public function status(SessionStatusRequest $request){
        try{
        $validated = $request->validated();

            Log::info('----------- Validated Data --------------');
            Log::info($validated);

            $user = ApiKey::getUserByHeader($request);

            Log::info('----------- user --------------');
            Log::info($user);

            $session = $user->sessions->first(function ($session) use ($validated) {
                return $session->name == $validated['instance'];
            });
            if (!$session) 
                return $this->sendError('The Given Session don\'t belong to this user');
            

            $sessionStatus = $this->userService->checkUserSission($session);
            if (!$sessionStatus) 
                return $this->sendError('User Session is not connected');
            return $this->sendResponse([
                'instance'=>$session->name,
                'status' => 'Connected'
            ],'Success');

        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), [], 500);
        }
    }

    public function qr(SessionStatusRequest $request){
        try{
        $validated = $request->validated();

            Log::info('----------- Validated Data --------------');
            Log::info($validated);

            $user = ApiKey::getUserByHeader($request);

            Log::info('----------- user --------------');
            Log::info($user);

            $session = $user->sessions->first(function ($session) use ($validated) {
                return $session->name == $validated['instance'];
            });
            if (!$session) 
                return $this->sendError('The Given Session don\'t belong to this user');
            

            $sessionStatus = $this->userService->checkUserSission($session);
            if (!$sessionStatus){
                $qr = $this->sessionService->connect($session->name);
                return $this->sendResponse([
                    'qr'=>$qr
                ],'Success');
            }

            return $this->sendError('User Session is connected');
        } catch (Exception $e) {
            return $this->sendError($e->getMessage(), [], 500);
        }
    }

    public function disconnect(SessionStatusRequest $request){
        try{
            $validated = $request->validated();
    
                Log::info('----------- Validated Data --------------');
                Log::info($validated);
    
                $user = ApiKey::getUserByHeader($request);
    
                Log::info('----------- user --------------');
                Log::info($user);
    
                $session = $user->sessions->first(function ($session) use ($validated) {
                    return $session->name == $validated['instance'];
                });
                if (!$session) 
                    return $this->sendError('The Given Session don\'t belong to this user');
                
    
                $sessionStatus = $this->userService->checkUserSission($session);
                if (!$sessionStatus)
                    return $this->sendError('The Given Session don\'t belong to this user');

    
                $response = Http::post(env('WHATSAPP_HOST') . '/sessions/disconnect', [
                    'session' => $session->name,
                ]);

                return $this->sendResponse([
                    'instance'=>$session->name,
                    'Status'=>'Disconnected'

                ],'Success');
            } catch (Exception $e) {
                return $this->sendError($e->getMessage(), [], 500);
            }
    }

}
