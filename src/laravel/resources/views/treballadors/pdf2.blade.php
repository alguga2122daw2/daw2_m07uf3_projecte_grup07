@extends('disseny')

@section('content')


<div class="card mt-5"> 
    <table border=1 style="width: 550px;">
        <tr>
            <td>Nom</td>
            <td>Tipus</td>
            <td>Hora d'entrada</td>
            <td>Hora sortida</td>
        </tr>
        <tr>
            <td>{{ $treballador->nom }}</td>
            <td>{{ $treballador->tipus }}</td>
            <td>{{ $treballador->hora_entrada }}</td>
            <td>{{ $treballador->hora_sortida }}</td>
        </tr>
    </table>
</div>
<br>
@endsection