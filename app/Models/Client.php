<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function l2(){
        return $this->hasMany(L2::class,'client_id','id');
    }

    public function l3(){
        return $this->hasMany(L3::class,'client_id','id');
    }

}
