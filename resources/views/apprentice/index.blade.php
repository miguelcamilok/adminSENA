@extends('layouts.app')

@section('title', 'Aprendices - ADMIN SENA')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Listado de Aprendices</h4>
    <a href="{{ route('apprentice.create') }}" class="btn btn-dark">+</a>
</div>

<div class="table-responsive rounded px-12">
    <table class="table align-middle text center shodow-sm">
        <thead class="table-dark">
            <th>ID</th>
            <th>Nombre</th>
            <th>Gmail</th>
            <th>Numero de telefono</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            @foreach ($apprentices as $apprentice)
            <tr>
                <td>{{$apprentice->id}}</td>
                <td>{{$apprentice->name}}</td>
                <td>{{$apprentice->email}}</td>
                <td>{{$apprentice->cell_number}}</td>
                <td>
                    <a href="{{route('apprentice.show', $apprentice->id)}}" class="btn btn-light btn-sm rounded-circle" title="Ver"><i class="bi bi-eye"></i></a>
                </td>
                <td>
                    <a href="{{route('apprentice.edit', $apprentice->id)}}" class="btn btn-warning btn-sm rounded-circle" title="Editar"><i class="bi bi-pencil-square"></i></a>
                </td>
                <td>
                    <form action="{{route('apprentice.destroy', $apprentice->id)}}" class="d-inline" method="POST">
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
@endsection
