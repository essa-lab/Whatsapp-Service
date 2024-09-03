<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SubscripedUser extends Model
{
    use HasFactory;
    protected $table = "subscribed_users";
    protected $primaryKey = "id";

    public function user():HasOne{
        return $this->hasOne(User::class,'id','user_id');
    }
    public function servicePlan():HasOne{
        return $this->hasOne(ServicePlan::class,'service_plan_id','service_plan_id');
    }
}
