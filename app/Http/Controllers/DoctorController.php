<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    //creamos un Patient
    public function crearDoctor(Request $datos){
    	$doctor = new Doctor();
    	$doctor->rut = $datos->input('rut');
    	$doctor->name = $datos->input('name');
    	$doctor->fecha_contratacion = $datos->input('fecha_contratacion');
    	$doctor->especialidad = $datos->input('especialidad');
    	$doctor->valor_consulta = $datos->input('valor_consulta');
    	

    	if($doctor->save()){
    		return "Exito";
    	}

    }

    public function formularioDoctor(){
    	return view('creardoctor');
    }

    //Editar
    public function editarDoctor($id){
    	$doctor = (new Doctor)->find($id);
    	return view('editardoctor',compact('doctor'));
    }

    public function updateDoctor(Request $datos){
    	$doctor = (new Doctor)->find($datos->input('id'));
    	$doctor->rut = $datos->input('rut');
    	$doctor->name = $datos->input('name');
    	$doctor->fecha_contratacion = $datos->input('fecha_contratacion');
    	$doctor->especialidad = $datos->input('especialidad');
    	$doctor->valor_consulta = $datos->input('valor_consulta');

    	if($doctor->save()){
    		return "Exito Editado";
    	}

    }
}
