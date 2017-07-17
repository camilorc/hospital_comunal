@extends('layouts.app')

@section('content')

Estadisticas
	@if(count($atenciones) == 0)
		<h1>No existen Atenciones</h1>
	@else
		<h1>Atenciones</h1>
		<table class="table table-striped">
	  		<thead> 
	  		<tr> 
		  		<th>#</th> 
		  		<th>Fecha y hora atención</th> 
		  		<th>Especialidad</th>
		  		<th>Nombre Doctor</th>
		  		<th>Estado consulta</th>
		  		<th>Valor consulta</th>

		  		
		  		 
	  		</tr> 
	  		</thead>

			@foreach($atenciones as $atencion)
				<tr> 
			  		<th>{{ $atencion->id }}</th> 
			  		<th>{{ $atencion->fecha_hora_atencion }}</th> 
			  		<th>{{ $atencion->especialidad }}</th> 
			  		<th>{{ $atencion->name }}</th> 
			  		<th>{{ $atencion->estado }}</th> 
			  		<th>{{ $atencion->valor_consulta }}</th> 
			  		
			  		
			  		  
	  			</tr> 
			
			@endforeach
		</table>
	@endif
	
	
		<h3>Pacientes mujeres: {{$array['mujeres']}}</h3>
		<h3>Pacientes hombres: {{$array['hombres']}}</h3>
		<h3>Total de atenciones: {{$array['atenciones']}}</h3>
	
		
	
		
	
		
@endsection