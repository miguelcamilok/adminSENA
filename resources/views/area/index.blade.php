@extends('layouts.app')

@section('title', 'Areas - ADMIN SENA')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Listado de Areas</h4>
        <a href="{{ route('area.create') }}" class="btn btn-dark">+</a>
    </div>

    @if ($areas->isEmpty())
        <div class="alert alert-info text-center">
            <i class="bi bi-info-circle"> No hay areas registradas.</i>
        </div>
    @else
        <div class="table-responsive rounded px-12">
            <table class="table align-middle text-center shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Detalles</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($areas as $area)
                        <tr>
                            <td>{{ $area->id }}</td>
                            <td>{{ $area->name }}</td>
                            <td>
                                <a href="{{ route('area.show', $area->id) }}" class="btn btn-light btn-sm rounded-circle"
                                    title="Ver"><i class="bi bi-eye"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('area.edit', $area->id) }}" class="btn btn-warning btn-sm rounded-circle"
                                    title="Editar"><i class="bi bi-pencil-square"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('area.destroy', $area->id) }}" method="POST" class="d-inline">
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
