<?php

use App\Http\Controllers\MessageController;
use App\Models\AuthApiKey\ApiKey;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::middleware(['auth.apikey'])->prefix('v1')->group(function (){
    Route::post('/message',[MessageController::class,'sendMessage']);
    Route::get('/send-message',[MessageController::class,'sendMessageGET']);

    Route::get('/qr',[MessageController::class,'qr']);
    Route::get('/status',[MessageController::class,'status']);
    Route::get('/disconnect',[MessageController::class,'disconnect']);


});


//      $apiKey = ApiKey::getApiKeyForHeader($request);
        // $user = ApiKey::getUserByHeader($request);
    
    
        // return response()->json([
        //     'status' => 200,
        //     'message' => 'authorize ...',
        //     'ApiKey' => $apiKey,
        //     'user' => $user->sessions->map(function($session){
        //         return $session->name;
        //     }),
        // ]);