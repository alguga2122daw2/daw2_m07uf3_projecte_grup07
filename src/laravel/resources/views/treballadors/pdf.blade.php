@extends('disseny2')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Dades del usuari {{ $treballador->nom }}
    </div>

    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="nom">Nom: </label>
                <label for="nom">{{ $treballador->nom }}</label>
            </div>
            <div class="form-group">
                <label for="tipus">Tipus: </label>
                <label for="tipus">{{ $treballador->tipus }}</label>
            </div>
            <div class="form-group">
                <label for="hora_entrada">Hora entrada: </label>
                <label for="hora_entrada">{{ $treballador->hora_entrada }}</label>
            </div>
            <div class="form-group">
                <label for="hora_sortida">Hora sortida: </label>
                <label for="hora_sortida">{{ $treballador->hora_sortida }}</label>
            </div>
        </form>
    </div>
</div>
<br>
@endsection