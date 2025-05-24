@extends('layouts.app')

@section('title', 'Profesores - ADMIN SENA')

@section('content')
    <div class="container my-5">
        <h4>Detalles del Profesor #{{ $teacher->id }}</h4>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-success">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Gmail</th>
                        <th scope="col">Areas Asignadas</th>
                        <th scope="col">Centros de Formacion Asignados</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>
                            @if ($teacher->area)
                                {{ $teacher->area->pluck('name')->join(', ') }}
                            @else
                                No asignado
                            @endif
                        </td>
                        <td>
                            @if ($teacher->trainingcenter)
                                {{ $teacher->trainingcenter->pluck('name')->join(', ') }}
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
