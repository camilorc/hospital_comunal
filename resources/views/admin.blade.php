@extends('layouts.app')

@section('content')
	
	<div class="btn-group" role="group" aria-label="...">
	<a class="btn btn-primary" href="/crearpaciente" role="button">Crear Paciente</a>
	<a class="btn btn-primary" href="/creardoctor" role="button">Crear Médico</a>
	</div>

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
		  		<th>Editar</th> 
		  		<th>Eliminar</th>  
	  		</tr> 
	  		</thead>

			@foreach($pacientes as $paciente)
				<tr> 
			  		<th>{{ $paciente->id }}</th> 
			  		<th>{{ $paciente->rut }}</th> 
			  		<th>{{ $paciente->name }}</th> 
			  		<th>{{ $paciente->direccion }}</th>
			  		<th><a class="btn btn-success" href="/editarpaciente/{{$paciente->id}}" role="button">Editar</a></th> 
			  		<th><a class="btn btn-danger" href="/editarpaciente/{{$paciente->id}}" role="button">Eliminar</a></th>  
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
		  		<th>Editar</th>  
		  		<th>Eliminar</th>  
	  		</tr> 
	  		</thead>

			@foreach($doctores as $doctor)
				<tr> 
			  		<th>{{ $doctor->id }}</th> 
			  		<th>{{ $doctor->rut }}</th> 
			  		<th>{{ $doctor->name }}</th> 
			  		<th>{{ $doctor->especialidad }}</th>
			  		<th>{{ $doctor->valor_consulta }}</th> 
			  		<th><a class="btn btn-success" href="/editardoctor/{{$doctor->id}}" role="button">Editar</a></th>  
			  		<th><a class="btn btn-danger" href="/editarpaciente/{{$paciente->id}}" role="button">Eliminar</a></th> 
	  			</tr> 
			
			@endforeach
		</table>
	@endif

	@if(count($usuarios) == 0)
		<h1>No existen usuarios creados</h1>
	@else
		<h1>Usuarios</h1>
		<table class="table table-striped">
	  		<thead> 
	  		<tr> 
		  		<th>#</th> 
		  		<th>Nombre</th> 
		  		<th>Email</th> 
		  		<th>Tipo de usuario</th>
		  		<th>Eliminar</th>  
	  		</tr> 
	  		</thead>

			@foreach($usuarios as $user)
				<tr> 
			  		<th>{{ $user->id }}</th> 
			  		<th>{{ $user->name }}</th> 
			  		<th>{{ $user->email }}</th> 
			  		<th>{{ $user->tipoUser() }}</th> 
		  		
			  		<th><a class="btn btn-danger" href="/editardoctor/{{$user->id}}" role="button">Eliminar</a></th>  
			  		
	  			</tr> 
			
			@endforeach
		</table>
	@endif
		
@endsection