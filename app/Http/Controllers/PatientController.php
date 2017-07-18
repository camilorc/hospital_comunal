<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests\PatientRequest;


class PatientController extends Controller
{
    //creamos un Patient
    public function crearPaciente(PatientRequest $datos){
    	$paciente = new Patient();
    	$paciente->rut = $datos->input('rut');
    	$paciente->name = $datos->input('name');
    	$paciente->fecha_nacimiento = $datos->input('fecha_nacimiento');
    	$paciente->sexo = $datos->input('sexo');
    	$paciente->direccion = $datos->input('direccion');
    	

    	if($paciente->save()){
    		return redirect('/admin');
    	}



    }

    public function editarPaciente($id){
        $paciente = (new Patient)->find($id);

        return view('editarpaciente',compact('paciente'));
    }

    public function updatePaciente(PatientRequest $datos){
        $paciente = (new Patient)->find($datos->input('id'));
        $paciente->rut = $datos->input('rut');
        $paciente->name = $datos->input('name');
        $paciente->fecha_nacimiento = $datos->input('fecha_nacimiento');
        $paciente->sexo = $datos->input('sexo');
        $paciente->direccion = $datos->input('direccion');
        

        if($paciente->save()){
            return redirect('/admin');
        }



    }

    public function eliminarPaciente(Request $datos){
            $paciente = (new Patient)->find($datos->input('idPaciente'));;
            if($paciente->delete()){
                return redirect('/admin');
            };
    }


    public function pacienteIndex(){
        return view('paciente');
    }

    

    
}
