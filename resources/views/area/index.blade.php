@extends('layouts.app')

@section('title', 'Areas - ADMIN SENA')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Listado de Áreas</h4>
    <a href="{{ route('area.create') }}" class="btn btn-dark">+</a>
</div>

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
                            No hay cursos asignados
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    @endforeach
</div>
@endsection
