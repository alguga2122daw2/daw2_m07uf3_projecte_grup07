@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Dades del apartament
    </div>

    <div class="card-body">
        <form>
            <div class="form-group">
            <label for="ref_catast">Referencia catastral: </label>
                <label for="ref_catast">{{ $apartament->ref_catast }}</label>
            </div>
            <div class="form-group">
            <label for="ciutat">Ciutat: </label>
                <label for="ciutat">{{ $apartament->ciutat }}</label>
            </div>
            <div class="form-group">
                <label for="barri">Barri: </label>
                <label for="hora_entrada">{{ $apartament->barri }}</label>
            </div>
            <div class="form-group">
                <label for="carrer">Carrer: </label>
                <label for="carrer">{{ $apartament->carrer }}</label>
            </div>
            <div class="form-group">
                <label for="porta">Porta: </label>
                <label for="porta">{{ $apartament->porta }}</label>
            </div>
            <div class="form-group">
                <label for="pis">Pis: </label>
                <label for="pis">{{ $apartament->pis }}</label>
            </div>
            <div class="form-group">
                <label for="num_llits">Numero de llits: </label>
                <label for="num_llits">{{ $apartament->num_llits }}</label>
            </div>
            <div class="form-group">
                <label for="num_habitacions">Numero de habitacions: </label>
                <label for="num_habitacions">{{ $apartament->num_habitacions }}</label>
            </div>
            <div class="form-group">
                <label for="ascensor">Ascensor: </label>
                <label for="ascensor">{{ $apartament->ascensor }}</label>
            </div>
            <div class="form-group">
                <label for="calefaccio">Calefacció: </label>
                <label for="calefaccio">{{ $apartament->calefaccio }}</label>
            </div>
            <div class="form-group">
                <label for="aire_condicionat">Aire condicionat: </label>
                <label for="aire_condicionat">{{ $apartament->aire_condicionat }}</label>
            </div>
        </form>
    </div>
</div>
<br>
@endsection