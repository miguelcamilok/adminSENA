@extends('layouts.app')

@section('title', 'Computers - ADMIN SENA')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0 fw-bold text-primary-emphasis text-dark">
            Listado de Computadores</h4>
        <a href="{{ route('computer.create') }}" class="btn btn-dark">+</a>
    </div>

    @if ($computers->isEmpty())
        <div class="alert alert-info text-center">
            <i class="bi bi-info-circle"> No hay computadores registrados.</i>
        </div>
    @else
        <div class="table-responsive rounded-4 shadow-sm border border-2 border-light-subtle">
            <table class="table align-middle text-center mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Número</th>
                        <th>Detalles</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($computers as $computer)
                        <tr>
                            <td class="fw-semibold">{{ $computer->id }}</td>
                            <td class="fw-semibold">{{ $computer->brand }}</td>
                            <td class="fw-semibold">{{ $computer->number }}</td>
                            <td>
                                <a href="{{ route('computer.show', $computer->id) }}"
                                    class="btn btn-light btn-sm rounded-circle" title="Ver"><i class="bi bi-eye"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('computer.edit', $computer->id) }}"
                                    class="btn btn-warning btn-sm rounded-circle" title="Editar"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('computer.destroy', $computer->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm rounded-circle" title="Eliminar">
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
