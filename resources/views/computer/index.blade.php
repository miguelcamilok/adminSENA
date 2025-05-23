@extends('layouts.app')

@section('title', 'Computadores - ADMIN SENA')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">Listado de Computadores</h4>
    <a href="{{ route('computer.create') }}" class="btn btn-dark rounded-pill">+</a>
</div>

<div class="table-responsive rounded px-12">
    <table class="table align-middle text-center shadow-sm">
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
        <tbody>
            @foreach ($computers as $computer)
                <tr>
                    <td>{{ $computer->id }}</td>
                    <td>{{ $computer->brand }}</td>
                    <td>{{ $computer->number }}</td>
                    <td>
                        <a href="{{ route('computer.show', $computer->id) }}" class="btn btn-light btn-sm rounded-circle" title="Ver"><i class="bi bi-eye"></i></a>
                    </td>
                    <td>
                        <a href="{{ route('computer.edit', $computer->id) }}" class="btn btn-warning btn-sm rounded-circle" title="Editar"><i class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <form action="{{ route('computer.destroy', $computer->id) }}" method="POST" class="d-inline">
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
@endsection
