@extends('layouts.app')

@section('title', 'Courses - ADMIN SENA')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0 fw-bold text-primary-emphasis text-dark">
            Listado de Cursos</h4>
        <a href="{{ route('course.create') }}" class="btn btn-dark">+</a>
    </div>

    @if ($courses->isEmpty())
        <div class="alert alert-info text-center">
            <i class="bi bi-info-circle"> No hay cursos registrados.</i>
        </div>
    @else
        <div class="table-responsive rounded-4 shadow-sm border border-2 border-light-subtle">
            <table class="table align-middle text-center mb-0">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Numero de Ficha</th>
                    <th>Jornada</th>
                    <th>Detalles</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody class="bg-white">
                    @foreach ($courses as $course)
                        <tr>
                            <td class="fw-semibold">{{ $course->id }}</td>
                            <td class="fw-semibold">{{ $course->course_number }}</td>
                            <td class="fw-semibold">{{ $course->day }}</td>
                            <td>
                                <a href="{{ route('course.show', $course->id) }}" class="btn btn-light btn-sm rounded-circle"
                                    title="Ver"><i class="bi bi-eye"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('course.edit', $course->id) }}"
                                    class="btn btn-warning btn-sm rounded-circle" title="Editar"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('course.destroy', $course->id) }}" method="POST" class="d-inlide">
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
    @endif
@endsection
