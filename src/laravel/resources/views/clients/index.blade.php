@extends('disseny')

@section('content')

<h1>Llista de clients</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>Nom i Cognoms</td>
          <td>Dni</td>
          <td>Edat</td>
          <td>Telefon</td>
          <td>Adreça</td>
          <td>Ciutat</td>
          <td>Pais</td>
          <td>Email</td>
          <td>Tipus de targeta</td>
          <td>Numero de la targeta</td>
        </tr>
    </thead>
    <tbody>
        @foreach($client as $cli)
        <tr>
            <td>{{$cli->nom_cognoms}}</td>
            <td>{{$cli->dni_client}}</td>
            <td>{{$cli->edat}}</td>
            <td>{{$cli->telefon}}</td>
            <td>{{$cli->adreca}}</td>
            <td>{{$cli->ciutat}}</td>
            <td>{{$cli->pais}}</td>
            <td>{{$cli->email}}</td>
            <td>{{$cli->tipus_targeta}}</td>
            <td>{{$cli->num_targeta}}</td>
            <td class="text-left">
                <a href="{{ route('clients.edit', $cli->dni_client)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('clients.destroy', $cli->dni_client)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('clients/create') }}">Accés directe a la vista de creació de clients</a>
@endsection