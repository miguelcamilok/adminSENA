@extends('layouts.app')

@section('title', 'Cursos - ADMIN SENA')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Listado de Cursos</h4>
        <a href="{{ route('course.create') }}" class="btn btn-dark">+</a>
    </div>

    <div class="table-responsive rounded px-12">
        <table class="table align-middle text center shadow-sm">
            <thead class="table-dark">
                <th>ID</th>
                <th>Numero de Ficha</th>
                <th>Jornada</th>
                <th>Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->course_number }}</td>
                        <td>{{ $course->day }}</td>
                        <td>
                            <a href="{{route('course.show', $course->id)}}" class="btn btn-light btn-sm rounded-circle" title="Ver"><i
                                    class="bi bi-eye"></i></a>
                        </td>
                        <td>
                            <a href="{{route('course.edit', $course->id)}}" class="btn btn-warning btn-sm rounded-circle" title="Editar"><i
                                    class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <form action="{{route('course.destroy', $course->id)}}" method="POST" class="d-inlide">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm rounded-circle">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
