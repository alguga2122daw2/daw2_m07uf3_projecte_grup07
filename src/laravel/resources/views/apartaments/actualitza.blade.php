@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualitzaci√≥ de dades
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
        <form method="post" action="{{ route('apartaments.update', $apartament->id_apartament) }}">
            <div class="form-group">
                @csrf
                @method('PUT')
                <label for="ref_catast">Referencia catastral</label>
                <input type="text" class="form-control" name="ref_catast" value="{{ $apartament->ref_catast }}" />
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
                <label for="porta">Porta</label>
                <input type="text" class="form-control" name="porta" value="{{ $apartament->porta }}" />
            </div>
            <div class="form-group">
                <label for="pis">Pis</label>
                <input type="text" class="form-control" name="pis" value="{{ $apartament->pis }}" />
            </div>
            <div class="form-group">
                <label for="num_llits">Numero de llits</label>
                <input type="text" class="form-control" name="num_llits" value="{{ $apartament->num_llits }}" />
            </div>
            <div class="form-group">
                <label for="num_habitacions">Numero de habitacions</label>
                <input type="text" class="form-control" name="num_habitacions" value="{{ $apartament->num_habitacions }}" />
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                <input type="hidden" name="ascensor" value="0" />
                <input type="checkbox" class="custom-control-input" id="ascensor" name="ascensor" value="1" {{ $apartament->ascensor ? 'checked':'' }}>
                <label class="custom-control-label" for="ascensor">Ascensor</label>
                </div>
            </div>
            <div class="form-group">
				<label for="calefaccio">Calefacci√≥</label>
				<select class="custom-select" name="calefaccio">
                    <!-- El√®ctrica/Gas Natural/But√° -->
					<option value="Electrica" {{ $apartament->calefaccio == "Electrica" ? 'selected':'' }}>El√®ctrica</option>
					<option value="GasNatural" {{ $apartament->calefaccio == "GasNatural" ? 'selected':'' }}>Gas Natural</option>
					<option value="Buta" {{ $apartament->calefaccio == "Buta" ? 'selected':'' }}>But√°</option>
				</select>
			</div>
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                <input type="hidden" name="aire_condicionat" value="0" />
                <input type="checkbox" class="custom-control-input" id="aire_condicionat" name="aire_condicionat" value="1" {{ $apartament->aire_condicionat ? 'checked':'' }}>
                <label class="custom-control-label" for="aire_condicionat">Aire condicionat</label>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('apartaments') }}">Acc√©s directe a la llista de apartaments</a>
@endsection