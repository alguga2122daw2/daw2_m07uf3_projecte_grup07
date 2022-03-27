@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou lloguer
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
    <form method="post" action="{{ route('lloguers.store') }}">
      <div class="form-group">
        @csrf
        <label for="dni_Client">DNI del client</label>
        <input type="text" class="form-control" name="dni_Client" />
      </div>
      <div class="form-group">
        <label for="id_Apartament">Referencia catastral</label>
        <input type="text" class="form-control" name="id_Apartament" />
      </div>
      <div class="form-group">
        <label for="data_Inici">Data d'inici</label>
        <input type="text" class="form-control" name="data_Inici" />
      </div>
      <div class="form-group">
        <label for="hora_Inici">Hora d'inici</label>
        <input type="text" class="form-control" name="hora_Inici" />
      </div>
      <div class="form-group">
        <label for="data_Final">Data de finalització</label>
        <input type="text" class="form-control" name="data_Final" />
      </div>
      <div class="form-group">
        <label for="hora_Final">Hora de finalització</label>
        <input type="text" class="form-control" name="hora_Final" />
      </div>
      <div class="form-group">
        <label for="lloc_Lliuament">Lloc de lliurament</label>
        <input type="text" class="form-control" name="lloc_Lliuament" />
      </div>
      <div class="form-group">
        <label for="preu_Dia">Preu diari</label>
        <input type="text" class="form-control" name="preu_Dia" />
      </div>
      <!-- Cambiar a CheckBox -->
      <div class="form-group">
        <label for="diposit">Diposit</label>
        <input type="text" class="form-control" name="diposit" />
      </div>
      <div class="form-group">
        <label for="cant_Diposit">Ascensor</label>
        <input type="text" class="form-control" name="cant_Diposit" />
      </div>
      <div class="form-group">
				<label for="tipusAsseg">Calefacció</label>
				<select class="custom-select" name="tipusAsseg">
          <!-- Elèctrica/Gas Natural/Butá -->
					<option value="1000" selected>Fins a 1000</option>
					<option value="500">Fins a 500</option>
					<option value="No">Sense franquícia</option>
				</select>
			</div>
      <div class="form-group">
        <label for="llocDev">Lloc de devolució</label>
        <input type="text" class="form-control" name="llocDev" />
      </div>

      <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>
  </div>
</div>
<br><a href="{{ url('lloguers') }}">Accés directe a la llista de lloguers</a>
@endsection

<!-- TODO: Cambiar los campos de este formulario para que sean correctos -->