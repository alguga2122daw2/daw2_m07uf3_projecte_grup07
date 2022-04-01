@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Visualització de dades
    </div>

    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="ref_catast">Referencia catastral</label>
                <input type="text" class="form-control" name="ref_catast" value="{{ $apartament->ref_catast }}" readonly />
            </div>
            <div class="form-group">
                <label for="ciutat">Ciutat</label>
                <input type="text" class="form-control" name="ciutat" value="{{ $apartament->ciutat }}" readonly />
            </div>
            <div class="form-group">
                <label for="barri">Barri</label>
                <input type="text" class="form-control" name="barri" value="{{ $apartament->barri }}" readonly />
            </div>
            <div class="form-group">
                <label for="carrer">Carrer</label>
                <input type="text" class="form-control" name="carrer" value="{{ $apartament->carrer }}" readonly />
            </div>
            <div class="form-group">
                <label for="porta">Porta</label>
                <input type="text" class="form-control" name="porta" value="{{ $apartament->porta }}" readonly />
            </div>
            <div class="form-group">
                <label for="pis">Pis</label>
                <input type="text" class="form-control" name="pis" value="{{ $apartament->pis }}" readonly />
            </div>
            <div class="form-group">
                <label for="num_llits">Numero de llits</label>
                <input type="text" class="form-control" name="num_llits" value="{{ $apartament->num_llits }}" readonly />
            </div>
            <div class="form-group">
                <label for="num_habitacions">Numero de habitacions</label>
                <input type="text" class="form-control" name="num_habitacions" value="{{ $apartament->num_habitacions }}" readonly />
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                <input type="hidden" name="ascensor" value="0" />
                <input type="checkbox" class="custom-control-input" id="ascensor" name="ascensor" value="1" disabled {{ $apartament->ascensor ? 'checked':'' }}>
                <label class="custom-control-label" for="ascensor">Ascensor</label>
                </div>
            </div>
            <div class="form-group">
				<label for="calefaccio">Calefacció</label>
				<select class="custom-select" name="calefaccio" disabled>
                    <!-- Elèctrica/Gas Natural/Butá -->
					<option value="Electrica" {{ $apartament->calefaccio == "Electrica" ? 'selected':'' }}>Elèctrica</option>
					<option value="GasNatural" {{ $apartament->calefaccio == "GasNatural" ? 'selected':'' }}>Gas Natural</option>
					<option value="Buta" {{ $apartament->calefaccio == "Buta" ? 'selected':'' }}>Butá</option>
				</select>
			</div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                <input type="hidden" name="aire_condicionat" value="0" />
                <input type="checkbox" class="custom-control-input" id="aire_condicionat" name="aire_condicionat" value="1" disabled {{ $apartament->aire_condicionat ? 'checked':'' }}>
                <label class="custom-control-label" for="aire_condicionat">Aire condicionat</label>
                </div>
            </div>
        </form>
    </div>
</div>
<br><a href="{{ url('apartaments') }}">Accés directe a la llista de apartaments</a>
@endsection