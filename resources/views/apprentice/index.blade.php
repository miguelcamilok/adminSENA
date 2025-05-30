@extends('layouts.app')

@section('title', 'Apprentices - ADMIN SENA')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0 fw-bold text-primary-emphasis text-dark">
            Listado de Aprendices</h4>
        <a href="{{ route('apprentice.create') }}" class="btn btn-dark">+</a>
    </div>
    @if ($apprentices->isEmpty())
        <div class="alert alert-info text-center">
            <i class="bi bi-info-circle"> No hay aprendices registrados.</i>
        </div>
    @else
        <div class="table-responsive rounded-4 shadow-sm border border-2 border-light-subtle">
            <table class="table align-middle text-center mb-0">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Gmail</th>
                    <th>Numero de telefono</th>
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody class="bg-white">
                    @foreach ($apprentices as $apprentice)
                        <tr>
                            <td class="fw-semibold">{{ $apprentice->id }}</td>
                            <td class="fw-semibold">{{ $apprentice->name }}</td>
                            <td class="fw-semibold">{{ $apprentice->email }}</td>
                            <td class="fw-semibold">{{ $apprentice->cell_number }}</td>
                            <td>
                                <a href="{{ route('apprentice.show', $apprentice->id) }}"
                                    class="btn btn-light btn-sm rounded-circle" title="Ver"><i class="bi bi-eye"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('apprentice.edit', $apprentice->id) }}"
                                    class="btn btn-warning btn-sm rounded-circle" title="Editar"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('apprentice.destroy', $apprentice->id) }}" class="d-inline"
                                    method="POST">
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
