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
        <form method="post" action="{{ route('clients.update', $client->dni_client) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="dni_client">Dni client</label>
                <input type="text" class="form-control" name="dni_client" value="{{ $client->dni_client }}" />
            </div>
            <div class="form-group">
                <label for="nom_cognoms">Nom i Cognoms</label>
                <input type="text" class="form-control" name="nom_cognoms" value="{{ $client->nom_cognoms }}" />
            </div>
            <div class="form-group">
                <label for="edat">Edat</label>
                <input type="number" class="form-control" name="edat" min="1" max="100" value="{{ $client->edat }}" />
            </div>
            <div class="form-group">
                <label for="telefon">Telèfon</label>
                <input type="tel" class="form-control" name="telefon" value="{{ $client->telefon }}" />
            </div>
            <div class="form-group">
                <label for="adreca">Adreça</label>
                <input type="text" class="form-control" name="adreca" value="{{ $client->adreca }}" />
            </div>
            <div class="form-group">
                <label for="ciutat">Ciutat</label>
                <input type="text" class="form-control" name="ciutat" value="{{ $client->ciutat }}" />
            </div>
            <div class="form-group">
                <label for="pais">Pais</label>
                <input type="text" class="form-control" name="pais" value="{{ $client->pais }}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $client->email }}" />
            </div>
            <div class="form-group">
                <label for="tipus_targeta">Tipus targeta</label>
                <select class="custom-select" name="tipus_targeta">
                    <option value="Debit" {{ $client->tipus_targeta == "Debit" ? 'selected' : '' }} >Dèbit</option>
                    <option value="Credit" {{ $client->tipus_targeta == "Credit" ? 'selected' : '' }} >Crèdit</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numTargeta">Numero targeta</label>
                <input type="text" class="form-control" name="numTargeta" value="{{ $client->numTargeta }}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la llista de clients</a>
@endsection