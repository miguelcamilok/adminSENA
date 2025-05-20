@extends('layouts.app')

@section('title', 'Areas - ADMIN SENA')

@section('content')
<h4 class="md-2">Listado de Areas</h4>
<div class="row">
    @foreach ($areas as $area)
    <section class="col-md-4 mb-4">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th colspan="2">Area #{{ $area->id}}</th>
                </tr>
            </thead>
            <tbody>
                <tr><th>Nombre</th><td>{{ $area->name}}</td></tr>
                <tr>
                    <th>Profesores Asignados</th>
                    <td>
                       @if($area->teachers->isNotEmpty())
                       {{ $area->teachers->pluck('name')->join(', ') }}
                       @else
                            No hay profesores asignados
                       @endif
                    </td>
                </tr>

                <tr>
                    <th>Cursos Asignados</th>
                    <td>
                        @if($area->courses->isNotEmpty())
                        {{ $area->courses->pluck('course_number')->join(', ') }}
                        @else
                            No hay cursos asiganados
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

    </section>
    @endforeach
    @endsection