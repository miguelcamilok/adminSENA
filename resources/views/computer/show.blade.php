@extends('layouts.app')

@section('title', 'Computadores - ADMIN SENA')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Detalles Del Computador #{{ $computer->id }}</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Numero de computador</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Aprendiz Asigando</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $computer['id'] }}</td>
                    <td>{{ $computer['number'] }}</td>
                    <td>{{ $computer['brand'] }}</td>
                    <td>
                        @if($computer->apprentice)
                          {{ $computer->apprentice->name }}
                        @else
                           No asignado   
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection