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
        <form method="post" action="{{ route('apartaments.update', $apartament->id_Apartament) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="id_Apartament">Id</label>
                <input type="text" class="form-control" name="id_Apartament" value="{{ $apartament->id_Apartament }}" />
            </div>
            <div class="form-group">
                <label for="refCatast">Referencia catastral</label>
                <input type="text" class="form-control" name="refCatast" value="{{ $apartament->refCatast }}" />
            </div>
            <div class="form-group">
                <label for="ciutat">Ciutat</label>
                <input type="text" class="form-control" name="ciutat" value="{{ $apartament->ciutat }}" />
            </div>
            <div class="form-group">
                <label for="barri">Barri</label>
                <input type="text" class="form-control" name="barri" value="{{ $apartament->barri }}" />
            </div>
            <div class="form-group">
                <label for="carrer">Carrer</label>
                <input type="text" class="form-control" name="carrer" value="{{ $apartament->carrer }}" />
            </div>
            <div class="form-group">
                <label for="pis">Pis</label>
                <input type="text" class="form-control" name="pis" value="{{ $apartament->pis }}" />
            </div>
            <div class="form-group">
                <label for="porta">Porta</label>
                <input type="text" class="form-control" name="porta" value="{{ $apartament->porta }}" />
            </div>
            <div class="form-group">
                <label for="numLlits">Numero de llits</label>
                <input type="text" class="form-control" name="numLlits" value="{{ $apartament->numLlits }}" />
            </div>
            <div class="form-group">
                <label for="numHab">Numero de habitacions</label>
                <input type="text" class="form-control" name="numHab" value="{{ $apartament->numHab }}" />
            </div>
            <div class="form-group">
                <label for="ascen">Ascensor</label>
                <input type="text" class="form-control" name="ascen" value="{{ $apartament->ascen }}" />
            </div>
            <div class="form-group">
                <label for="ac">Aire acondicionat</label>
                <input type="text" class="form-control" name="ac" value="{{ $apartament->ac }}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('apartaments') }}">Accés directe a la llista de apartaments</a>
@endsection