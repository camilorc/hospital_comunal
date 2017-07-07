<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Attention extends Model
{
    //Obtener nombre del Paciente
    public function obtenerPaciente(){
    	$paciente = (new Patient)->find($this->patient_id);
    	return $paciente->name;

    }


    //Obtener nombre del Doctor
    public function obtenerDoctor(){
    	$doctor = (new Doctor)->find($this->doctor_id);
    	return $doctor->name;

    }

    //cambiar estado
    public function cambiarEstado($estado){
    	$atencion = (new Attention)->find($this->id);
    	$atencion->estado = $estado;
    	if($atencion->save()){
    		return view('secretaria');
    	}



    }
}
