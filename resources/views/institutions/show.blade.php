@extends('layouts.master')

@section('content')
	
	Institution: <h1>{{ $institution->name }}</h1>
	<hr>
	Addres: {{ $institution->address }}
	<br>
	Phone: {{ $institution->phone }}
	<hr>
	<h2>Patients</h2>
	<div class="patients">
		@foreach($institution->patients as $patient)
			@include('partials.patient')
			<hr>
		@endforeach
	</div>

@endsection

