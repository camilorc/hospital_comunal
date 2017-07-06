<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function admin(){

    	$pacientes = (new Patient())->all();

    	return view('admin',compact('pacientes'));

    }

    public function formularioPaciente(){

    	return view('crearpaciente');
    }

    public function editarpaciente($id){
        



        
    }
}

