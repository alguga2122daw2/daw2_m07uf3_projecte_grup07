@extends('disseny')

@section('content')

<h1>Llista d'apartaments</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>ID</td>
          <td>Referencia Catastral</td>
          <td>Ciutat</td>
          <td>Barri</td>
          <td>Carrer</td>
          <td>Pis</td>
          <td>Porta</td>
          <td>Numero llits</td>
          <td>Numero habitacions</td>
          <td>Ascensor</td>
          <td>Aire acondicionat</td>
        </tr>
    </thead>
    <tbody>
        @foreach($apartament as $apart)
        <tr>
            <td>{{$apart->id_apartament}}</td>
            <td>{{$apart->ref_catast}}</td>
            <td>{{$apart->ciutat}}</td>
            <td>{{$apart->barri}}</td>
            <td>{{$apart->carrer}}</td>
            <td>{{$apart->pis}}</td>
            <td>{{$apart->porta}}</td>
            <td>{{$apart->numLlits}}</td>
            <td>{{$apart->numHab}}</td>
            <td>{{$apart->ascen}}</td>
            <td>{{$apart->ac}}</td>
            <td class="text-left">
                <a href="{{ route('apartaments.edit', $apart->id_apartament)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('apartaments.destroy', $apart->id_apartament)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('apartaments/create') }}">Accés directe a la vista de creació d'apartaments</a>
@endsection