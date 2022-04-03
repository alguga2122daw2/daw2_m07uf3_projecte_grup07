@extends('disseny')

@section('content')

<h1 class="d-flex justify-content-center">TouristRent</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div>
  <h2 class="d-flex justify-content-center" >M07 UF3: Desenvolupament Web en Entorn Servidor</h2>
  <h3 class="d-flex justify-content-center">Projecte nº2</h3>
  <h4 class="d-flex justify-content-center">Laravel, MySQL, PHP</h4>
</div>
@endsection