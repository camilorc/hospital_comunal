<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attention;
use App\Patient;
use Illuminate\Support\Facades\Input;

class AttentionController extends Controller
{
    ////listar todas mis consultas
    public function listarAtenciones(){

    	$rut = Input::get('rut');
        

        $paciente = (new Patient)->where('rut','=',$rut)->first();
        //$atenciones = Attention::atenciones($paciente->patient_id);
        

        if($paciente == null){
            return 'Paciente no existe';
        }else{
            $atenciones = (new Attention)->where('patient_id','=',$paciente->id)->get();
            
            return view('buscarAtenciones',compact('atenciones'));
        }
        
    }
}
