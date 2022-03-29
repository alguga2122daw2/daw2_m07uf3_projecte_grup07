@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou empleat
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
      <form method="post" action="{{ route('treballadors.store') }}">
          <div class="form-group">
              @csrf
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="contrasenya">Contrasenya</label>
              <input type="password" class="form-control" name="contrasenya"/>
          </div>
          <div class="form-group">
              <label for="tipus">Tipus</label>
              <input type="text" class="form-control" name="tipus"/>
          </div>
          <div class="form-group">
              <label for="hora_entrada">Hora entrada</label>
              <input type="text" class="form-control" name="hora_entrada"/>
          </div>
          <div class="form-group">
              <label for="hora_sortida">Hora sortida</label>
              <input type="text" class="form-control" name="hora_sortida"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('treballadors') }}">Accés directe a la Llista d'empleats</a>
@endsection

<!-- TODO: Cambiar los campos de este formulario para que sean correctos -->