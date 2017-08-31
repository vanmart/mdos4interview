@extends('layouts.master')

@section('content')
		<h1>Institutions</h1>	
		<hr>
		<div class="row">
		@foreach ($institutions as $institution)
			@include('partials.institution')
		@endforeach
		</div>
	
@endsection

@section('3columnas')
		<div class="col-lg-4">
          <h2>Otro Mas para el parcial</h2>
          <p>Agregado desde la vista principal a una seccion del parcial.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
@endsection