@extends('layouts.app')

@section('title', 'Show Course - ADMIN SENA')

@section('content')

    <div class="container mb-3">
        <h4 class="mb-3 fw-bold text-primary-emphasis">
            Detalles del Curso <span class="text-dark">#{{ $course->id }}</span>
        </h4>

        <div class="table-responsive rounded-4 shadow-sm border border-2 border-light-subtle">
            <table class="table table-hover align-middle text-center mb-0">
                <thead class="table-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Numero de Ficha</th>
                        <th>Jornada</th>
                        <th>Areas Asignadas</th>
                        <th>Centros de Formacion Asignados</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="fw-semibold">{{ $course->id }}</td>
                        <td class="fw-semibold">{{ $course->course_number }}</td>
                        <td class="fw-semibold">{{ $course->day }}</td>
                        <td>
                            @if ($course->area)
                                <span
                                    class="badge bg-success-subtle text-success-emphasis border border-success-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-grid-fill me-1"></i> {{ $course->area->name }}
                                </span>
                            @else
                                <span
                                    class="badge bg-danger-subtle text-danger-emphasis border border-danger-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-x-circle-fill me-1"></i> No asignado
                                </span>
                            @endif
                        </td>
                        <td>
                            @if ($course->trainingcenter)
                                <span
                                    class="badge bg-info-subtle text-info-emphasis border border-info-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-building me-1"></i> {{ $course->trainingcenter->name }}
                                </span>
                            @else
                                <span
                                    class="badge bg-danger-subtle text-danger-emphasis border border-danger-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-x-circle-fill me-1"></i> No asignado
                                </span>
                            @endif
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-4 text-end">
            <a href="{{ route('course.index') }}" class="btn btn-outline-primary rounded-pill px-4 py-2 shadow-sm">
                <i class="bi bi-arrow-left-circle me-2"></i> Volver al listado
            </a>
        </div>
    </div>
@endsection
