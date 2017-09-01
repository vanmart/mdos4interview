@extends('layouts.master')

@section('content')
	<h1>Patients</h1>

    <a class="btn btn-outline-success" href="{{url('patients/create')}}">Create</a>
	
	<hr>
 	<div class="row">
		@foreach ($patients as $patient)
			@include('partials.patient') 					
		@endforeach
	</div>
@endsection