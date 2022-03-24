@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
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
        <form method="post" action="{{ route('treballadors.update', $treballador->email) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $treballador->nom }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $treballador->email }}" />
            </div>
            <div class="form-group">
                <label for="contrasenya">Contrasenya</label>
                <input type="text" class="form-control" name="contrasenya" value="{{ $treballador->contrasenya }}" />
            </div>
            <div class="form-group">
                <label for="tipus">Tipus</label>
                <input type="text" class="form-control" name="tipus" value="{{ $treballador->tipus }}" />
            </div>
            <div class="form-group">
                <label for="hora_entrada">Hora entrada</label>
                <input type="text" class="form-control" name="hora_entrada" value="{{ $treballador->hora_entrada }}" />
            </div>
            <div class="form-group">
                <label for="hora_sortida">Hora sortida</label>
                <input type="text" class="form-control" name="hora_sortida" value="{{ $treballador->hora_sortida }}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('treballadors') }}">Accés directe a la Llista de treballadors</a
@endsection