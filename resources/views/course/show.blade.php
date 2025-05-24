@extends('layouts.app')

@section('title', 'Cursos - ADMIN SENA')

@section('content')

    <div class="container my-5">
        <h4 class="mb-4">Detalles Del Curso #{{$course->id}}</h4>
        <table class="table table-bodered table-hover">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>Numero de Ficha</th>
                    <th>Jornada</th>
                    <th>Areas Asignadas</th>
                    <th>Centros de Formacion Asigandos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_number }}</td>
                    <td>{{ $course->day }}</td>
                    <td>
                        @if($course->areas)
                           {{$course->areas->pluck('name')->join(", ")}}
                        @else
                           No asignado
                        @endif
                    </td>
                    <td>
                        @if($course->trainingcenter)
                           {{$course->trainingcenter->pluck('name')->join(", ")}}
                        @else
                           No asignado
                        @endif
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
@endsection
