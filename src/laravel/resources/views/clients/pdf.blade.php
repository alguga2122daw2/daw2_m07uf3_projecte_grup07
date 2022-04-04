@extends('disseny2')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Dades del client {{ $client->nom_cognoms }}
    </div>

    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="nom_cognoms">Nom i Cognoms: </label>
                <label for="nom_cognoms">{{ $client->nom_cognoms }}</label>
            </div>
            <div class="form-group">
                <label for="edat">Edat: </label>
                <label for="edat">{{ $client->edat }}</label>
            </div>
            <div class="form-group">
                <label for="telefon">Telèfon: </label>
                <label for="telefon">{{ $client->telefon }}</label>
            </div>
            <div class="form-group">
                <label for="adreca">Adreça: </label>
                <label for="adreca">{{ $client->adreca }}</label>
            </div>
            <div class="form-group">
                <label for="ciutat">Ciutat: </label>
                <label for="ciutat">{{ $client->ciutat }}</label>
            </div>
            <div class="form-group">
                <label for="pais">Pais: </label>
                <label for="pais">{{ $client->pais }}</label>
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <label for="email">{{ $client->email }}</label>
            </div>
            <div class="form-group">
                <label for="tipus_targeta">Tipus targeta: </label>
                <label for="tipus_targeta">{{ $client->tipus_targeta }}</label>
            </div>
            <div class="form-group">
                <label for="num_targeta">Numero targeta: </label>
                <label for="num_targeta">{{ $client->num_targeta }}</label>
            </div>
        </form>
    </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la llista de clients</a>
@endsection