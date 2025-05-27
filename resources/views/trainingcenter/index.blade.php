@extends('layouts.app')

@section('title', 'Centros de Formacion - ADMIN SENA')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Listado de Centros de Formacion</h4>
        <a href="{{ route('trainingcenter.create') }}" class="btn btn-dark">+</a>
    </div>

    @if ($trainingcenters->isEmpty())
        <div class="alert alert-info text-center">
            <i class="bi bi-info-circle"> No hay centros de formación registrados.</i>
        </div>
    @else
        <div class="table-responsive rounded px-12">
            <table class="table align-middle text-center shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Ubicacion</th>
                        <th>Detalles</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trainingcenters as $trainingcenter)
                        <tr>
                            <td>{{ $trainingcenter->id }}</td>
                            <td>{{ $trainingcenter->name }}</td>
                            <td>{{ $trainingcenter->location }}</td>
                            <td>
                                <a href="{{ route('trainingcenter.show', $trainingcenter->id) }}"
                                    class="btn btn-light btn-sm rounded-circle" title="Ver"><i class="bi bi-eye"></i></a>
                            </td>
                            <td>
                                <a href="{{ route('trainingcenter.edit', $trainingcenter->id) }}"
                                    class="btn btn-warning btn-sm rounded-circle" title="Editar"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('trainingcenter.destroy', $trainingcenter->id) }}" method="POST"
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
