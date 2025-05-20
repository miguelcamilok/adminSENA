@extends('layouts.app')

@section('title', 'Training Centers - ADMIN SENA')

@section('content')

<h4 class="md-2">Listado de Centros de Formacion</h4>
<div class="row">
    @foreach ($trainingcenters as $trainingcenter)
    <section class="col-md-4 mb-4">
        <table class="table table-bordered">
            <thead class="table-light">
                <th colspan="2">Centro de Formacion #{{$trainingcenter->id}}</th>
            </thead>
            <tbody>
                <tr><th>Nombre</th><td>{{$trainingcenter->name}}</td></tr>
                <tr><th>Ubicacion</th><td>{{$trainingcenter->location}}</td></tr>
                <tr>
                    <th>Profesores Asignado</th>
                    <td>
                        @if($trainingcenter->teachers->isNotEmpty())
                        {{$trainingcenter->teachers->pluck('name')->join(", ")}}
                        @else
                          No hay profesores asignados
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Cursos Asignados</th>
                    <td>
                        @if($trainingcenter->courses->isNotEmpty())
                          {{$trainingcenter->courses->pluck('course_number')->join(", ")}}
                        @else
                          No hay Cursos asignados
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    @endforeach
@endsection