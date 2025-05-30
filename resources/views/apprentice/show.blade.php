@extends('layouts.app')

@section('title', 'Show Apprentice - ADMIN SENA')

@section('content')

    <div class="container mb-3">
        <h4 class="mb-3 fw-bold text-primary-emphasis">
            Detalles del Aprendiz <span class="text-dark">#{{ $apprentice->id }}</span>
        </h4>

        <div class="table-responsive rounded-4 shadow-sm border border-2 border-light-subtle">
            <table class="table table-hover align-middle text-center mb-0">
                <thead class="table-success">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Gmail</th>
                        <th>Numero de Telefono</th>
                        <th>Curso Asignado</th>
                        <th>Computador Asignado</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="fw-semibold">{{ $apprentice->id }}</td>
                        <td class="fw-semibold">{{ $apprentice->name }}</td>
                        <td class="fw-semibold">{{ $apprentice->email }}</td>
                        <td class="fw-semibold">{{ $apprentice->cell_number }}</td>
                        <td>
                            @if ($apprentice->course)
                                <span
                                    class="badge bg-success-subtle text-success-emphasis border border-success-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-journal-code me-1"></i> {{ $apprentice->course->course_number }}
                                </span>
                            @else
                                <span
                                    class="badge bg-danger-subtle text-danger-emphasis border border-danger-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-x-circle-fill me-1"></i> No asignado
                                </span>
                            @endif
                        <td>
                            @if ($apprentice->computer)
                                <span
                                    class="badge bg-success-subtle text-success-emphasis border border-success-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-pc-display-horizontal me-1"></i> {{ $apprentice->computer->number }}
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
        <a href="{{ route('apprentice.index') }}" class="btn btn-outline-primary rounded-pill px-4 py-2 shadow-sm">
            <i class="bi bi-arrow-left-circle me-2"></i> Volver al listado
        </a>
    </div>
    </div>
@endsection
