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
          <td>Porta</td>
          <td>Pis</td>
          <td>Numero llits</td>
          <td>Numero habitacions</td>
          <td>Ascensor</td>
          <td>Calefacció</td>
          <td>Aire condicionat</td>
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
            <td>{{$apart->porta}}</td>
            <td>{{$apart->pis}}</td>
            <td>{{$apart->num_llits}}</td>
            <td>{{$apart->num_habitacions}}</td>
            <td>{{$apart->ascensor ? 'Si':'No'}}</td>
            <td>{{$apart->calefaccio}}</td>
            <td>{{$apart->aire_condicionat ? 'Si':'No'}}</td>
            <td class="text-left">
                <a href="{{ route('apartaments.edit', $apart->id_apartament)}}" class="btn btn-success btn-sm">Edita</a>
                <a href="{{ route('apartaments.show', $apart->id_apartament)}}" class="btn btn-secondary btn-sm">PDF</a>
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
<br><a href="{{ url('apartaments/create') }}"><button type="button" class="btn btn-primary">Crear</button></a>
@endsection