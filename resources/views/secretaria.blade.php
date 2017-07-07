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
			  		<th><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
					  Editar
					</button></th>
			  		  
	  			</tr> 
			
			@endforeach
		</table>


		<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Editar Estado</h4>
		      </div>
		      <div class="modal-body">

		        {{Form::open(['url' => 'editarEstado', 'method' => 'post', 'class' => 'form-horizontal'])}}

		        <div class="form-group">
					{{Form::label('estado', 'Estado', array('class' => 'col-sm-2 control-label'))}}
					{{Form::select('estado', ['confirmada' => 'Confirmada', 'anulada' => 'Anulada', 'perdida' => 'Perdida', 'realizada' => 'Realizada'])}}
					<span class="error">{{ $errors->first('estado') }}</span>
				</div>
	
				
				<div class="form-group">
					{{Form::submit() }}
					{{Form::close() }}
				</div>

		      </div>
		      
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->




	@endif




		
@endsection