<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class administrador extends Model {
    use HasFactory;
    use Authenticatable;

    protected $connection='mongodb';
    protected $collection='administradores_collection';

    public function setPasswordAttribute($password){
        $this->attributes['password']=bcrypt($password);
    }

}
