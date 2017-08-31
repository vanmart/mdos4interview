@extends('layouts.master')

@section('content')
	
	patient: <h1>{{ $patient->name }} {{ $patient->lastname }}</h1>
	<hr>
	<div>
		Addres:<br>
		<strong>{{ $patient->address }}</strong>
	</div>
	<br>
	<div>
		Phone:<br>
	 	<strong>{{ $patient->phone }}</strong> 
	 </div>
	<br>
		Institution:<br>
	 	<strong>{{ $patient->institution->name }}</strong>
	

@endsection