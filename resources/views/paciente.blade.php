@extends('layouts.app')

@section('content')



	{{Form::open(['url' => 'buscarAtenciones', 'method' => 'get', 'class' => 'navbar-form navbar-left', 'role' => 'search'])}}
	
	  <div class="form-group">
	  {{Form::text('rut',null,['class' => 'form-control', 'placeholder' => 'Buscar'])}}
	    
	  </div>
	  <button type="submit" class="btn btn-default">Buscar Atenciones</button>
	  <span class="error">{{ $errors->first('rut') }}</span>
	</form>
	{{Form::close() }}


	
@endsection