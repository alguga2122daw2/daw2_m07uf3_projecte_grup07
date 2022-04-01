@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>

    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="nom_cognoms">Nom i Cognoms</label>
                <input type="text" class="form-control" name="nom_cognoms" value="{{ $client->nom_cognoms }}" readonly />
            </div>
            <div class="form-group">
                <label for="edat">Edat</label>
                <input type="number" class="form-control" name="edat" min="1" max="100" value="{{ $client->edat }}" readonly />
            </div>
            <div class="form-group">
                <label for="telefon">Telèfon</label>
                <input type="tel" class="form-control" name="telefon" value="{{ $client->telefon }}" readonly />
            </div>
            <div class="form-group">
                <label for="adreca">Adreça</label>
                <input type="text" class="form-control" name="adreca" value="{{ $client->adreca }}" readonly />
            </div>
            <div class="form-group">
                <label for="ciutat">Ciutat</label>
                <input type="text" class="form-control" name="ciutat" value="{{ $client->ciutat }}" readonly />
            </div>
            <div class="form-group">
                <label for="pais">Pais</label>
                <input type="text" class="form-control" name="pais" value="{{ $client->pais }}" readonly />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $client->email }}" readonly />
            </div>
            <div class="form-group">
                <label for="tipus_targeta">Tipus targeta</label>
                <select class="custom-select" name="tipus_targeta" disabled>
                    <option value="Debit" {{ $client->tipus_targeta == "Debit" ? 'selected' : '' }} >Dèbit</option>
                    <option value="Credit" {{ $client->tipus_targeta == "Credit" ? 'selected' : '' }} >Crèdit</option>
                </select>
            </div>
            <div class="form-group">
                <label for="num_targeta">Numero targeta</label>
                <input type="text" class="form-control" name="num_targeta" value="{{ $client->num_targeta }}" readonly />
            </div>
        </form>
    </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la llista de clients</a>
@endsection