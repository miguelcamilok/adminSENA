@extends('layouts.app')

@section('title', 'Show Computer - ADMIN SENA')

@section('content')
    <div class="container mb-3">
        <h4 class="mb-3 fw-bold text-primary-emphasis">
            Detalles del Computador <span class="text-dark">#{{ $computer->id }}</span>
        </h4>

        <div class="table-responsive rounded-4 shadow-sm border border-2 border-light-subtle">
            <table class="table table-hover align-middle text-center mb-0">
                <thead class="table-success">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Numero de computador</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Aprendiz Asigando</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="fw-semibold">{{ $computer['id'] }}</td>
                        <td class="fw-semibold">{{ $computer['number'] }}</td>
                        <td class="fw-semibold">{{ $computer['brand'] }}</td>
                        <td>
                            @if ($computer->apprentice)
                                <span
                                    class="badge bg-success-subtle text-success-emphasis border border-success-subtle rounded-pill px-3 py-2 fs-6">
                                    <i class="bi bi-people-fill me-1"></i> {{ $computer->apprentice->name }}
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
            <a href="{{ route('computer.index') }}" class="btn btn-outline-primary rounded-pill px-4 py-2 shadow-sm">
                <i class="bi bi-arrow-left-circle me-2"></i> Volver al listado
            </a>
        </div>
    </div>
@endsection
