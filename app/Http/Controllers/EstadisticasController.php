<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadisticasController extends Controller
{
    
	public function index(){

		//Cargamos especialidades
		$atenciones = $this->atenciones_detalles();
		$array = $this->pacientes_estadisticas();

		return view('estadisticas',compact(['atenciones','array']));
	}

	public function cargarEspecialidad(){

		
		$especialidades = DB::table('doctors')->select('especialidad')->get();
		return $especialidades;

	}

	//retornamos todos los datos de las atenciones
	public function atenciones_detalles(){
		$atenciones = DB::table('attentions')
            ->join('doctors', 'attentions.doctor_id', '=', 'doctors.id')
            ->select('attentions.*', 'doctors.*')
            ->get();
        return $atenciones;   

	}

	//estadisticas pacientes
	public function pacientes_estadisticas(){
		//pacientes mujeres
		$cantidad_mujeres = DB::table('patients')->where('sexo','=','F')->count();
		$cantidad_hombres = DB::table('patients')->where('sexo','=','M')->count();
		$total_atenciones = DB::table('attentions')->count();

		//creamos el array
		$array = ['mujeres' => $cantidad_mujeres, 'hombres' => $cantidad_hombres,'atenciones' => $total_atenciones ];
		return $array;


	}
	



}
