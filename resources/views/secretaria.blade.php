@extends('layouts.app')

@section('content')


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
		  		<th>Agendar</th>
		  		 
	  		</tr> 
	  		</thead>

			@foreach($pacientes as $paciente)
				<tr> 
			  		<th>{{ $paciente->id }}</th> 
			  		<th>{{ $paciente->rut }}</th> 
			  		<th>{{ $paciente->name }}</th> 
			  		<th>{{ $paciente->direccion }}</th>
			  		<th><a class="btn btn-primary" href="agendaratencion/{{$paciente->id}}" role="button">Agendar Atenciones</a></th>
			  		  
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
			  		<th><a class="btn btn-primary" href="editaratencion/{{$atencion->id}}" role="button">
					  Editar
					</button></th>
			  		  
	  			</tr> 
			
			@endforeach
		</table>




	@endif




		
@endsection