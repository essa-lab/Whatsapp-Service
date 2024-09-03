<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\AuthApiKey\ApiKey;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $with=[
        'sessions',
        'subscripe'
    ];
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function token()
    {
        return $this->hasOne(ApiKey::class);
    }
    public function subscripe(){
        return $this->hasOne(SubscripedUser::class,'user_id','id')->where('is_active', 1);;
    }

    public function message(){
        return $this->hasMany(Message::class,'user_id','id');
    }

    public function createApiToken(){

        $apiKey = new ApiKey;
        $apiKey->name = $this->name;
        $apiKey->user_id = $this->id;
        $apiKey->key = ApiKey::generate();
        $apiKey->save();
    }

    public function subscripeUser(){
        $subscripeUser = new SubscripedUser();
        $subscripeUser->user_id = $this->id;
        $subscripeUser->service_plan_id = 1;
        $subscripeUser->subscription_start_date = Carbon::now();
        $subscripeUser->subscription_end_date = Carbon::now()->addMonth(1);
        $subscripeUser->requests_limit = 100;
        $subscripeUser->instances_limit = 1;
        $subscripeUser->instances_used = 1;

        $subscripeUser->price= 0;
        $subscripeUser->save();

    }

    public function updateApiToken(){
        $this->token->key = ApiKey::generate();
        $this->token->active = 1;

        $this->token->save();
    }

    public function isAdmin(){

        return $this->is_admin;
    }

}
