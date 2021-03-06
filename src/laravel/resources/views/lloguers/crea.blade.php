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
        <label for="dni_client">DNI del Client</label>
        <select class="custom-select" name="dni_client">
          @foreach($clients as $cli)
            @if( $lloguers->doesntContain('dni_client', $cli->dni_client) )
              <option value="{{$cli->dni_client}}">{{$cli->nom_cognoms}} (DNI: {{$cli->dni_client}})</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="id_apartament">ID Apartament</label>
        <select class="custom-select" name="id_apartament">
          @foreach($apartaments as $apart)
            @if( $lloguers->doesntContain('id_apartament', $apart->id_apartament) )
              <option value="{{$apart->id_apartament}}">{{$apart->id_apartament}}</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="data_inici">Data d'inici</label>
        <input type="date" class="form-control" name="data_inici" />
      </div>
      <div class="form-group">
        <label for="hora_inici">Hora d'inici</label>
        <input type="text" class="form-control" name="hora_inici" />
      </div>
      <div class="form-group">
        <label for="data_final">Data de finalitzaci√≥</label>
        <input type="date" class="form-control" name="data_final" />
      </div>
      <div class="form-group">
        <label for="hora_final">Hora de finalitzaci√≥</label>
        <input type="text" class="form-control" name="hora_final" />
      </div>
      <div class="form-group">
        <label for="lloc_lliurament">Lloc de lliurament</label>
        <input type="text" class="form-control" name="lloc_lliurament" />
      </div>
      <div class="form-group">
        <label for="lloc_devolucio">Lloc de devoluci√≥</label>
        <input type="text" class="form-control" name="lloc_devolucio" />
      </div>
      <div class="form-group">
        <label for="preu_per_dia">Preu per dia</label>
        <input type="number" class="form-control" name="preu_per_dia" />
      </div>
      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="hidden" name="diposit" value="0" />
          <input type="checkbox" class="custom-control-input" id="diposit" name="diposit" value="1">
          <label class="custom-control-label" for="diposit">Diposit</label>
        </div>
      </div>
      <div class="form-group">
        <label for="quantitat_diposit">Quantitat del diposit</label>
        <input type="number" class="form-control" name="quantitat_diposit" value="0" />
      </div>
      <div class="form-group">
				<label for="tipus_asseguranca">Tipus d'asseguran√ßa</label>
				<select class="custom-select" name="tipus_asseguranca">
          <!-- El√®ctrica/Gas Natural/But√° -->
					<option value="1000" selected>Fins a 1000</option>
					<option value="500">Fins a 500</option>
					<option value="No">Sense franqu√≠cia</option>
				</select>
			</div>
      <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>
  </div>
</div>
<br><a href="{{ url('lloguers') }}">Acc√©s directe a la llista de lloguers</a>
@endsection