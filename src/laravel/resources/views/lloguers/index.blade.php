@extends('disseny')

@section('content')

<h1>Llista d'lloguers</h1>
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
          <td>Preu per dia</td>
          <td>Diposit</td>
          <td>Cantitat del diposit</td>
          <td>Tipus de assegurança</td>
          <td>Lloc de devolució</td>
        </tr>
    </thead>
    <tbody>
        @foreach($lloguer as $llog)
        <tr>
            <td>{{$llog->$dni_Client}}</td>
            <td>{{$llog->id_Apartament}}</td>
            <td>{{$llog->data_Inici}}</td>
            <td>{{$llog->hora_Inici}}</td>
            <td>{{$llog->data_Final}}</td>
            <td>{{$llog->hora_Final}}</td>
            <td>{{$llog->lloc_Lliuament}}</td>
            <td>{{$llog->preu_Dia}}</td>
            <td>{{$llog->diposit}}</td>
            <td>{{$llog->cant_Diposit}}</td>
            <td>{{$llog->tipusAsseg}}</td>
            <td>{{$llog->llocDev}}</td>
            <td class="text-left">
                <a href="{{ route('lloguers.edit', $llog->id_apartament)}}" class="btn btn-success btn-sm">Edita</a>
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
<br><a href="{{ url('lloguers/create') }}">Accés directe a la vista de creació d'lloguers</a>
@endsection