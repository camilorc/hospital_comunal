@extends('layouts.app')

@section('content')
	
	@if(count($atenciones) == 0)
		<h1>No existen Atenciones agendadas</h1>
	@else
		<h1>Atenciones</h1>
		<table class="table table-striped">
	  		<thead> 
	  		<tr> 
		  		<th>#</th> 
		  		<th>Fecha y Hora</th> 
		  		<th>Nombre Paciente</th> 
		  		<th>Nombre Doctor</th>
		  		<th>Estado</th>
		  		 
	  		</tr> 
	  		</thead>

			@foreach($atenciones as $atencion)
				<tr> 
			  		<th>{{ $atencion->id }}</th> 
			  		<th>{{ $atencion->fecha_hora_atencion }}</th> 
			  		<th>{{ $atencion->obtenerPaciente() }}</th> 
			  		<th>{{ $atencion->obtenerDoctor() }}</th>
			  		<th>{{ $atencion->estado }}</th>
			  		
			  		  
	  			</tr> 
			
			@endforeach
		</table>
	@endif
	
@endsection