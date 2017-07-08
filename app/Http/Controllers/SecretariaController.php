<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Doctor;
use App\Attention;
use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    //
    public function secretariaIndex(){

    	$pacientes = (new Patient)->all();
        $doctores = (new Doctor)->all();
        $atenciones = (new Attention)->all();
        

    	return view('secretaria',compact(['pacientes','doctores','atenciones']));
    }

    public function formularioAgendar($id){
    	$paciente = (new Patient)->find($id);

    	$doctores = (new Doctor)->all();

    	return view('agendaratencion',compact(['paciente','doctores']));
    }

    public function agendar(Request $datos){
    	$atencion = new Attention();
    	$atencion->fecha_hora_atencion = $datos->input('fecha_hora_atencion');
    	$atencion->patient_id = $datos->input('idPaciente');
    	$atencion->doctor_id = $datos->input('doctor_id');
    	$atencion->estado = 'agendada';

    	if($atencion->save()){
    		return "Atención Agendada";
    	}


    }

    public function editarAtencion($id){
    	$atencion = (new Attention)->find($id);
    	return view('editaratencion',compact('atencion'));

    }

    public function cambiarEstado(Request $dato){
       $atencion = (new Attention)->find($dato->input('id'));
       $atencion->estado = $dato->input('estado');

       if($atencion->save()){
            return "Estado cambiado";
       }

       
    }
}
