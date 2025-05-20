@extends('layouts.app')

@section('title', 'Aprendices - ADMIN SENA')

@section('content')
    <h4 class="mb-2">Listado de Aprendices</h4>
    <div class="row">
        @foreach ($apprentices as $apprentice)
            <section class="col-md-4 mb-4">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr><th colspan="2">Aprendiz #{{ $apprentice->id }}</th></tr>
                    </thead>
                    <tbody>
                        <tr><th>Nombre</th><td>{{ $apprentice->name }}</td></tr>
                        <tr><th>Email</th><td>{{ $apprentice->email }}</td></tr>
                        <tr><th>Teléfono</th><td>{{ $apprentice->cell_number }}</td></tr>
                        <tr>
                            <th>Curso</th>
                            <td>{{ $apprentice->course->course_number}}</td>
                        </tr>
                        <tr>
                            <th>Computador</th>
                            <td>
                                @if ($apprentice->computer->isNotEmpty)
                                    #{{ $apprentice->computer->number }} - {{ $apprentice->computer->brand }}
                                @else
                                    Sin computador asignado
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        @endforeach
@endsection
