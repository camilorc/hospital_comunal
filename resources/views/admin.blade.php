@extends('layouts.app')

@section('content')
	
	<a class="btn btn-primary" href="/crearpaciente" role="button">Crear Paciente</a></br></br>
	<a class="btn btn-success" href="#" role="button">boton 2</a>

	@if(count($pacientes) == 0)
		<h1>No existen usurios creados</h1>
	@else
		@foreach($pacientes as $paciente)
			<h2>{{ $paciente->name }}</h2>
			<a class="btn btn-success" href="/editarpaciente/{{$paciente->id}}" role="button">Editar</a>
		@endforeach
	@endif
	
@endsection