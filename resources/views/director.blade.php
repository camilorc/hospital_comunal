@extends('layouts.app')

@section('content')
	
	<a class="btn btn-primary" href="/estadisticas" role="button">Estadísticas</a>

	@if(count($pacientes) == 0)
		<h1>No existen Pacientes creados</h1>
	@else
		<h1>Pacientes</h1>
		<table class="table table-striped">
	  		<thead> 
	  		<tr> 
		  		<th>#</th> 
		  		<th>Rut</th> 
		  		<th>Nombre</th> 
		  		<th>Dirección</th>
		  		 
	  		</tr> 
	  		</thead>

			@foreach($pacientes as $paciente)
				<tr> 
			  		<th>{{ $paciente->id }}</th> 
			  		<th>{{ $paciente->rut }}</th> 
			  		<th>{{ $paciente->name }}</th> 
			  		<th>{{ $paciente->direccion }}</th>
			  		  
	  			</tr> 
			
			@endforeach
		</table>
	@endif
	



	@if(count($doctores) == 0)
		<h1>No existen Doctores creados</h1>
	@else
		<h1>Doctores</h1>
		<table class="table table-striped">
	  		<thead> 
	  		<tr> 
		  		<th>#</th> 
		  		<th>Rut</th> 
		  		<th>Nombre</th> 
		  		<th>Especialidad</th>
		  		<th>Valor Consulta</th> 
		  		
	  		</tr> 
	  		</thead>

			@foreach($doctores as $doctor)
				<tr> 
			  		<th>{{ $doctor->id }}</th> 
			  		<th>{{ $doctor->rut }}</th> 
			  		<th>{{ $doctor->name }}</th> 
			  		<th>{{ $doctor->especialidad }}</th>
			  		<th>{{ $doctor->valor_consulta }}</th> 
			  		
	  			</tr> 
			
			@endforeach
		</table>
	@endif

	
		
@endsection