@extends('layouts.app')

@section('title', 'Areas- ADMIN SENA')

@section('content')
<div class="container my-5">
    <h4 class="mb-4">Detalles Del Area #{{ $area->id }}</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Profesor Asigando</th>
                    <th scope="col">Curso Asigando</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $area['id'] }}</td>
                    <td>{{ $area['name'] }}</td>
                    <td>
                        @if($area->teachers->isNotEmpty())
                          {{ $area->teachers->name }}
                        @else
                           No asignado   
                        @endif
                    </td>
                    <td>
                        @if($area->courses->isNotEmpty())
                          {{ $area->courses->name }}
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