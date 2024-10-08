<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';
    protected $primaryKey = 'id';

    protected $fillable=[
       'message',
       'user_id',
       'from',
       'to',
       'status' 
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class,'user_id','id');
    }


}
