@extends('layouts.app')

@section('content')
	@if($atencion == null)
		<h1>Atención no encontrada</h1>

	@else
		<ul>
			<li>Paciente: {{$atencion->obtenerPaciente()}}</li>
			<li>Doctor: {{$atencion->obtenerDoctor()}}</li>
			<li>Fecha y Hora: {{$atencion->fecha_hora_atencion}}</li>
		</ul>
		</br>
		{{Form::open(['url' => 'editarEstado', 'method' => 'post', 'class' => 'form-horizontal'])}}
		{{Form::hidden('id',$atencion->id)}}
		<div class="form-group">
			{{Form::label('estado', 'Estado', array('class' => 'col-sm-2 control-label'))}}

			{{Form::select('estado', ['confirmada' => 'Confirmada', 'anulada' => 'Anulada', 'perdida' => 'Perdida', 'realizada' => 'Realizada'])}}

			<span class="error">{{ $errors->first('estado') }}</span>
		</div>
	
				
		<div class="form-group">
		{{Form::submit('Cambiar') }}
		{{Form::close() }}
		</div>


	@endif

	
	

@endsection				





				