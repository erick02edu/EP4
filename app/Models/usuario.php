<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class usuario extends Model implements AuthenticatableContract
{

    use Authenticatable;

    use HasFactory,HasApiTokens;
    
    protected $connection='mongodb';
    protected $collection='usuarios_collection';


    public function setPasswordAttribute($password){
        $this->attributes['password']=bcrypt($password);
    }
}
