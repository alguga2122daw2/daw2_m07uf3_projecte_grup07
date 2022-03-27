@extends('disseny')

@section('content')

<h1>TouristRent</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
<div>
<br><a href="{{ url('treballadors') }}">Treballadors</a>
<br><a href="{{ url('apartaments') }}">Apartaments</a>
<br><a href="{{ url('lloguers') }}">Lloguers</a>
<br><a href="{{ url('clients') }}">Clients</a>
@endsection