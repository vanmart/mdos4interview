<div class="col-md-4">
	<div class="institution-container">
		Nombre: <a href="patients/{{ $patient->id}}"> <?= $patient->name?></a>
		<br>
		Address: {{ $patient->address }}
		<br>
		Phone: {{ $patient->phone }}
		<br>
		<strong>Entidad:</strong> {{ $patient->institution->name }}

	</div>
</div>