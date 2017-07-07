<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;
use App\Doctor;
use App\User;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    //
    public function admin(){

    	$pacientes = (new Patient)->all();
        $doctores = (new Doctor)->all();
        $usuarios = (new User)->all();

    	return view('admin',compact(['pacientes','doctores','usuarios']));

    }

    public function formularioPaciente(){

    	return view('crearpaciente');
    }

    public function editarpaciente($id){
        



        
    }
}

