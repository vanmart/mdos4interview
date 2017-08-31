@extends('layouts.master')

@section('content')
	<h1 class="text-center">Create an Patient</h1>
	<hr>
	<div class="container">
	  <form method="POST" action="{{ url('patients') }}">
	  	{{csrf_field()}}
	  	@include('partials.errors')
	    <div class="form-group row">
	      <label for="name" class="col-sm-2 col-form-label">Name</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="name" name="name" placeholder="Patient name" >
	      </div>
	    </div>
	    <div class="form-group row">
	      <label for="lastname" class="col-sm-2 col-form-label">lastname</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Patient lastname" >
	      </div>
	    </div>
	    <div class="form-group row">
	      <label for="phone" class="col-sm-2 col-form-label">Phone number</label>
	      <div class="col-sm-10">
	        <input type="number" class="form-control" id="phone" placeholder="Phone number" name="phone" >
	      </div>
	    </div>
	    <div class="form-group row">
	      <label for="address" class="col-sm-2 col-form-label">Address</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="address" placeholder="Address" name="address" > 
	      </div>
	    </div>
	    <div class="form-group row">
	      <label for="institution_id" class="col-sm-2 col-form-label">institution</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" id="institution" placeholder="Institution" name="institution_id" > 
	      </div>
	    </div>
	    
	    <div class="form-group row">
	      <div class="offset-sm-2 col-sm-10">
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
	    </div>
	  </form>
	</div>
@endsection