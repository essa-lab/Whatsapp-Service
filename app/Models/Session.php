<?php

namespace App\Models;

use Abdrzakoxa\EloquentFilter\Traits\Filterable;
use App\EloquentFilters\SessionFilter\SearchFilter;
use App\EloquentFilters\SessionFilter\StatusFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Session extends Model
{
    use HasFactory;



    public function user(){
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();
        // auto-sets values on creation
        self::creating(function ($query) {
            $query->name = $query->name ?? Str::random();
        });
    }


}