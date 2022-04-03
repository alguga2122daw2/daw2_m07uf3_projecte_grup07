@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>

    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $treballador->nom }}" readonly />
            </div>
            <div class="form-group">
                <label for="tipus">Tipus</label>
                <input type="text" class="form-control" name="tipus" value="{{ $treballador->tipus }}" readonly />
            </div>
            <div class="form-group">
                <label for="hora_entrada">Hora entrada</label>
                <input type="text" class="form-control" name="hora_entrada" value="{{ $treballador->hora_entrada }}" readonly />
            </div>
            <div class="form-group">
                <label for="hora_sortida">Hora sortida</label>
                <input type="text" class="form-control" name="hora_sortida" value="{{ $treballador->hora_sortida }}" readonly />
            </div>
        </form>
    </div>
</div>
<br>
@endsection