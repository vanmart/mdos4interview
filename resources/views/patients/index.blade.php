@extends('layouts.master')

@section('content')

 	<div class="row">
		@foreach ($patients as $patient)
			@include('partials.patient') 					
		@endforeach
	</div>
@endsection