@extends('disseny2')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Visualització de dades del lloguer 
    </div>

    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="nom">DNI del client: </label>
                <label for="nom">{{ $lloguer->dni_client }}</label>
            </div>
            <div class="form-group">
                <label for="id_apartament">ID del apartament: </label>
                <label for="id_apartament">{{$lloguer->id_apartament }}</label>
            </div>
            <div class="form-group">
                <label for="data_inici">Data d'inici: </label>
                <label for="data_inici">{{ $lloguer->data_inici }}</label>
            </div>
            <div class="form-group">
                <label for="hora_inici">Hora d'inici: </label>
                <label for="hora_inici">{{ $lloguer->hora_inici }}</label>
            </div>
            <div class="form-group">
                <label for="data_final">Data de finalització: </label>
                <label for="data_final">{{ $lloguer->data_final }}</label>
            </div>
            <div class="form-group">
                <label for="hora_final">Hora de finalització: </label>
                <label for="hora_final">{{ $lloguer->hora_final }}</label>
            </div>
            <div class="form-group">
                <label for="lloc_lliurament">Lloc de lliurament: </label>
                <label for="lloc_lliurament">{{ $lloguer->lloc_lliurament }}</label>
            </div>
            <div class="form-group">
                <label for="lloc_devolucio">Lloc de devolució: </label>
                <label for="lloc_devolucio">{{ $lloguer->lloc_devolucio }}</label>
            </div>
            <div class="form-group">
                <label for="preu_per_dia">Preu per dia: </label>
                <label for="preu_per_dia">{{ $lloguer->preu_per_dia }}</label>
            </div>
            <div class="form-group">
                <label class="custom-control-label" for="diposit">Diposit: </label>
                <label for="preu_per_dia">{{ $lloguer->diposit ? 'Si':'No' }}</label>
            </div>
            <div class="form-group">
                <label for="quantitat_diposit">Quantitat del diposit: </label>
                <label for="quantitat_diposit">{{ $lloguer->quantitat_diposit }}</label>
            </div>
            <div class="form-group">
                <label for="tipus_asseguranca">Tipus d'assegurança: </label>
                <label for="tipus_asseguranca">{{ $lloguer->tipus_asseguranca }}</label>
            </div>
        </form>
    </div>
</div>
@endsection