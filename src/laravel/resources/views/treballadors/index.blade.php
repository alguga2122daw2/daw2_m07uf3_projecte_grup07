@extends('disseny')

@section('content')

<h1>Llista de treballadors</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>Nom</td>
          <td>Email</td>
          <td>Contrasenya</td>
          <td>Tipus</td>
          <td>Hora entrada</td>
          <td>Hora sortida</td>
        </tr>
    </thead>
    <tbody>
        @foreach($treballador as $tre)
        <tr>
            <td>{{$tre->nom}}</td>
            <td>{{$tre->email}}</td>
            <td>{{$tre->contrasenya}}</td>
            <td>{{$tre->tipus}}</td>
            <td>{{$tre->hora_entrada}}</td>
            <td>{{$tre->hora_sortida}}</td>
            <td class="text-left">
                <a href="{{ route('treballadors.edit', $tre->email)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('treballadors.destroy', $tre->email)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('treballadors/create') }}"><button type="button" class="btn btn-primary">Crear</button></a>
@endsection