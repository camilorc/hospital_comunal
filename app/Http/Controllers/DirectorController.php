<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Doctor;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    //listar
    public function directorIndex(){

    	$pacientes = (new Patient)->all();
        $doctores = (new Doctor)->all();
        

    	return view('director',compact(['pacientes','doctores']));

    }
}
