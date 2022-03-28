@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou apartament
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
    <form method="post" action="{{ route('apartaments.store') }}">
      <div class="form-group">
        @csrf
        <label for="id_apartament">ID</label>
        <input type="text" class="form-control" name="id_apartament" />
      </div>
      <div class="form-group">

        <label for="ref_catast">Referencia catastral</label>
        <input type="text" class="form-control" name="ref_catast" />
      </div>
      <div class="form-group">
        <label for="ciutat">Ciutat</label>
        <input type="text" class="form-control" name="ciutat" />
      </div>
      <div class="form-group">
        <label for="barri">Barri</label>
        <input type="text" class="form-control" name="barri" />
      </div>
      <div class="form-group">
        <label for="carrer">Carrer</label>
        <input type="text" class="form-control" name="carrer" />
      </div>
      <div class="form-group">
        <label for="porta">Porta</label>
        <input type="number" class="form-control" name="porta" />
      </div>
      <div class="form-group">
        <label for="pis">Pis</label>
        <input type="number" class="form-control" name="pis" />
      </div>
      <div class="form-group">
        <label for="num_llits">Numero de llits</label>
        <input type="number" class="form-control" name="num_llits" />
      </div>
      <div class="form-group">
        <label for="num_habitacions">Numero de habitacions</label>
        <input type="number" class="form-control" name="num_habitacions" />
      </div>
      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="hidden" name="ascensor" value="0" />
          <input type="checkbox" class="custom-control-input" id="ascensor" name="ascensor" value="1">
          <label class="custom-control-label" for="ascensor">Ascensor</label>
        </div>
      </div>
      <div class="form-group">
				<label for="calefaccio">Calefacció</label>
				<select class="custom-select" name="calefaccio">
          <!-- Elèctrica/Gas Natural/Butá -->
					<option value="Electrica" selected>Elèctrica</option>
					<option value="GasNatural">Gas Natural</option>
					<option value="Buta">Butá</option>
				</select>
			</div>
      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="hidden" name="aire_condicionat" value="0" />
          <input type="checkbox" class="custom-control-input" id="aire_condicionat" name="aire_condicionat" value="1">
          <label class="custom-control-label" for="aire_condicionat">Aire condicionat</label>
        </div>
      </div>
      <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>
  </div>
</div>
<br><a href="{{ url('apartaments') }}">Accés directe a la llista d'apartaments</a>
@endsection

<!-- TODO: Cambiar los campos de este formulario para que sean correctos -->