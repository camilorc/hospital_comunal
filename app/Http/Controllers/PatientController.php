<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    //creamos un Patient
    public function crearPaciente(Request $datos){
    	$paciente = new Patient();
    	$paciente->rut = $datos->input('rut');
    	$paciente->name = $datos->input('name');
    	$paciente->fecha_nacimiento = $datos->input('fecha_nacimiento');
    	$paciente->sexo = $datos->input('sexo');
    	$paciente->direccion = $datos->input('direccion');
    	

    	if($paciente->save()){
    		return "Exito";
    	}



    }

    public function editarPaciente($id){
        $paciente = (new Patient)->find($id);

        return view('editarpaciente',compact('paciente'));
    }

    public function updatePaciente(Request $datos){
        $paciente = (new Patient)->find($datos->input('id'));
        $paciente->rut = $datos->input('rut');
        $paciente->name = $datos->input('name');
        $paciente->fecha_nacimiento = $datos->input('fecha_nacimiento');
        $paciente->sexo = $datos->input('sexo');
        $paciente->direccion = $datos->input('direccion');
        

        if($paciente->save()){
            return "Exito";
        }



    }

    
}
