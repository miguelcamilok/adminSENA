@extends('layouts.app')

@section('title', 'Show Teacher - ADMIN SENA')

@section('content')
    <div class="container mb-3">
        <h4 class="mb-3 fw-bold text-primary-emphasis">
            Detalles del Profesor <span class="text-dark">#{{ $teacher->id }}</span>
        </h4>

        <div class="table-responsive rounded-4 shadow-sm border border-2 border-light-subtle">
            <table class="table table-hover align-middle text-center mb-0">
                <thead class="table-primary text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Gmail</th>
                        <th scope="col">Área Asignada</th>
                        <th scope="col">Centro de Formación</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="fw-semibold">{{ $teacher->id }}</td>
                        <td class="fw-semibold">{{ $teacher->name }}</td>
                        <td class="fw-semibold">{{ $teacher->email }}</td>
                        <td>
                            @if ($teacher->area)
                                <span
                                    class="badge bg-success-subtle text-success-emphasis border border-success-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-grid-fill me-1"></i> {{ $teacher->area->name }}
                                </span>
                            @else
                                <span
                                    class="badge bg-danger-subtle text-danger-emphasis border border-danger-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-x-circle-fill me-1"></i> No asignado
                                </span>
                            @endif
                        </td>
                        <td>
                            @if ($teacher->trainingcenter)
                                <span
                                    class="badge bg-info-subtle text-info-emphasis border border-info-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-building me-1"></i> {{ $teacher->trainingcenter->name }}
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
            <a href="{{ route('teacher.index') }}" class="btn btn-outline-primary rounded-pill px-4 py-2 shadow-sm">
                <i class="bi bi-arrow-left-circle me-2"></i> Volver al listado
            </a>
        </div>
    </div>
@endsection
