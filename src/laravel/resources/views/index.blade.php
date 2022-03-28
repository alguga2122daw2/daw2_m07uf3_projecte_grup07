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
<h!>Projecte nº2</h1>
@endsection