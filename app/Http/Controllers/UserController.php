<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function eliminarUsuario(Request $datos){
            $user = (new User)->find($datos->input('idUsuario'));;
            if($user->delete()){
                return 'Usuario eliminado';
            };
    }
}
