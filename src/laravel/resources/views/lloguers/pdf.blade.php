@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Visualització de dades
    </div>

    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="data_inici">Data d'inici</label>
                <input type="date" class="form-control" name="data_inici" value="{{ $lloguer->data_inici }}" readonly />
            </div>
            <div class="form-group">
                <label for="hora_inici">Hora d'inici</label>
                <input type="text" class="form-control" name="hora_inici" value="{{ $lloguer->hora_inici }}" readonly />
            </div>
            <div class="form-group">
                <label for="data_final">Data de finalització</label>
                <input type="date" class="form-control" name="data_final" value="{{ $lloguer->data_final }}" readonly />
            </div>
            <div class="form-group">
                <label for="hora_final">Hora de finalització</label>
                <input type="text" class="form-control" name="hora_final" value="{{ $lloguer->hora_final }}" readonly />
            </div>
            <div class="form-group">
                <label for="lloc_lliurament">Lloc de lliurament</label>
                <input type="text" class="form-control" name="lloc_lliurament" value="{{ $lloguer->lloc_lliurament }}" readonly />
            </div>
            <div class="form-group">
                <label for="lloc_devolucio">Lloc de devolució</label>
                <input type="text" class="form-control" name="lloc_devolucio" value="{{ $lloguer->lloc_devolucio }}" readonly />
            </div>
            <div class="form-group">
                <label for="preu_per_dia">Preu per dia</label>
                <input type="number" class="form-control" name="preu_per_dia" value="{{ $lloguer->preu_per_dia }}" readonly />
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="hidden" name="diposit" value="0" />
                    <input type="checkbox" class="custom-control-input" id="diposit" name="diposit" disabled value="1" {{ $lloguer->diposit ? 'checked':'' }}>
                    <label class="custom-control-label" for="diposit">Diposit</label>
                </div>
            </div>
            <div class="form-group">
                <label for="quantitat_diposit">Quantitat del diposit</label>
                <input type="number" class="form-control" name="quantitat_diposit" value="{{ $lloguer->quantitat_diposit }}" readonly />
            </div>
            <div class="form-group">
                <label for="tipus_asseguranca">Tipus d'assegurança</label>
                <select class="custom-select" name="tipus_asseguranca" disabled>
                    <!-- Elèctrica/Gas Natural/Butá -->
                    <option value="1000" {{ $lloguer->tipus_asseguranca ? 'selected':'' }}>Fins a 1000</option>
                    <option value="500" {{ $lloguer->tipus_asseguranca ? 'selected':'' }}>Fins a 500</option>
                    <option value="No" {{ $lloguer->tipus_asseguranca ? 'selected':'' }}>Sense franquícia</option>
                </select>
            </div>
        </form>
    </div>
</div>
<br><a href="{{ url('lloguers') }}">Accés directe a la llista de lloguers</a>
@endsection