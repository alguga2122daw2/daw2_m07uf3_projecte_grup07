@extends('disseny')

@section('content')

<div class="card mt-5">
	<div class="card-header">
		Afegeix un nou client
	</div>

	<div class="card-body">
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="post" action="{{ route('clients.store') }}">
			<div class="form-group">
				@csrf
				<label for="dni_client">Dni client</label>
				<input type="text" class="form-control" name="dni_client" />
			</div>
			<div class="form-group">
				<label for="nom_cognoms">Nom i Cognoms</label>
				<input type="text" class="form-control" name="nom_cognoms" />
			</div>
			<div class="form-group">
				<label for="edat">Edat</label>
				<input type="number" class="form-control" name="edat" min="1" max="100" />
			</div>
			<div class="form-group">
				<label for="telefon">Telèfon</label>
				<input type="tel" class="form-control" name="telefon" />
			</div>
			<div class="form-group">
				<label for="adreca">Adreça</label>
				<input type="text" class="form-control" name="adreca" />
			</div>
			<div class="form-group">
				<label for="ciutat">Ciutat</label>
				<input type="text" class="form-control" name="ciutat" />
			</div>
			<div class="form-group">
				<label for="pais">Pais</label>
				<input type="text" class="form-control" name="pais" />
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" />
			</div>
			<div class="form-group">
				<label for="tipus_targeta">Tipus targeta</label>
				<select class="custom-select" name="tipus_targeta">
					<option value="Debit" selected>Dèbit</option>
					<option value="Credit">Crèdit</option>
				</select>
			</div>
			<div class="form-group">
				<label for="numTargeta">Numero targeta</label>
				<input type="text" class="form-control" name="numTargeta" />
			</div>
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
		</form>
	</div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la llista de clients</a>
@endsection