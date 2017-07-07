<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','profile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //retornamos el tipo de usuario
    public function tipoUser(){
        switch ($this->profile) {
            case '1':
                return "Administrador";
                break;
            case '2':
                return "Director";
                break;
            case '3':
                return "Secretaria";
                break;
            
            default:
                return "Anonimo";
                break;
        }
    }

    
}
