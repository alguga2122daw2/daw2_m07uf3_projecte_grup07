@extends('disseny')

@section('content')

<h1>Llista de lloguers</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>DNI del client</td>
          <td>ID del apartament</td>
          <td>Data d'inici</td>
          <td>Hora d'inici</td>
          <td>Data final</td>
          <td>Hora final</td>
          <td>Lloc de lliurament</td>
          <td>Lloc de devolució</td>
          <td>Preu per dia</td>
          <td>Diposit</td>
          <td>Quantitat del diposit</td>
          <td>Tipus de assegurança</td>
        </tr>
    </thead>
    <tbody>
        @foreach($lloguer as $llog)
        <tr>
            <td>{{$llog->dni_client}}</td>
            <td>{{$llog->id_apartament}}</td>
            <td>{{$llog->data_inici}}</td>
            <td>{{$llog->hora_inici}}</td>
            <td>{{$llog->data_final}}</td>
            <td>{{$llog->hora_final}}</td>
            <td>{{$llog->lloc_lliurament}}</td>
            <td>{{$llog->lloc_devolucio}}</td>
            <td>{{$llog->preu_per_dia}}</td>
            <td>{{$llog->diposit ? 'Si':'No'}}</td>
            <td>{{$llog->quantitat_diposit}}</td>
            <td>{{$llog->tipus_asseguranca}}</td>
            <td class="text-left">
                <a href="{{ route('lloguers.edit', array($llog->dni_client,$llog->id_apartament))}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('lloguers.destroy', $llog->id_apartament)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('lloguers/create') }}"><button type="button" class="btn btn-primary">Crear</button></a>
@endsection