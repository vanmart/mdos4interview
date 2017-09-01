<div class="col-md-12">
	<div class="institution-container">
		Nombre: <a href="{{ url('patients', [$patient->id]) }}"> <?= $patient->name?> <?= $patient->lastname?> </a>
		<br>
		Address: {{ $patient->address }}
		<br>
		Phone: {{ $patient->phone }}
		<br>
		<strong>Entidad:</strong> {{ $patient->institution->name }}
		<hr>
		<div class="text-center">
			<a  class="btn btn-outline-primary" href="{{ url('patients/edit', [$patient->id]) }}" >Modificar</a>
			<a  class="btn btn-outline-danger" href="{{ url('patients/destroy', [$patient->id]) }}">Eliminar</a>
		</div>


	</div>
</div>