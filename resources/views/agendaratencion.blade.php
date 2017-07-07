@extends('layouts.app')

@section('content')
	@if( count($errors) > 0)
		<h3>Existen errores en el formulario</h3>
		
	@endif


	@if($paciente == null)
		<h3>Paciente no encontrado</h3>
	@else



		
		<div id="form">
			{{Form::open(['url' => 'agendaratencion', 'method' => 'post', 'class' => 'form-horizontal'])}}
			{{Form::hidden('idPaciente',$paciente->id)}}
			<h3>Agendar hora para el Paciente: {{$paciente->name}}</h3>
			<div class="form-group">
				{{Form::label('fecha_hora_atencion', 'Fecha y hora de Atención', array('class' => 'col-sm-2 control-label'))}}
				{{Form::date('fecha_hora_atencion')}}
				<span class="error">{{ $errors->first('fecha_hora_atencion') }}</span>
			</div>
			
			
			<div class="form-group">
				{{Form::label('doctor_id', 'Doctor', array('class' => 'col-sm-2 control-label'))}}
	            <select class="form-control col-sm-4" id="doctor_id" name="doctor_id" required>
	            	@foreach($doctores as $doctor)
	            	<option value="{{$doctor->id}}">{{$doctor->name}}</option>
	                @endforeach         	            
	            </select>
	            <span class="error">{{ $errors->first('doctor_id') }}</span>
	        </div>
		
			<div class="form-group">
				{{Form::submit() }}
				{{Form::close() }}
			</div>
		</div>

	@endif
	
	
	

	
@endsection