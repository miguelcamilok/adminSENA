@extends('layouts.app')

@section('title', 'Centros de Formacion - ADMIN SENA')

@section('content')
<div class="container my-5">
    <h4 class="mb-4">Detalles Del Centro de Formacion #{{ $trainingcenter->id }}</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ubicacion</th>
                    <th scope="col">Profesor Asigando</th>
                    <th scope="col">Curso Asigando</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $trainingcenter['id'] }}</td>
                    <td>{{ $trainingcenter['name'] }}</td>
                    <td>{{ $trainingcenter['location'] }}</td>
                    <td>
                        @if($trainingcenter->teachers->isNotEmpty())
                          {{ $trainingcenter->teachers->pluck('name')->join(', ') }}
                        @else
                           No asignado   
                        @endif
                    </td>
                    <td>
                        @if($trainingcenter->courses->isNotEmpty())
                          {{ $trainingcenter->courses->pluck('course_number')->join(', ') }}
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