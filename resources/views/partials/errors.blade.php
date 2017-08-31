@if(count($errors))
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>

		Validation from laravel controller, is better than 'required' of html5, is not compatible on all web browsers.
		
	</div>
@endif