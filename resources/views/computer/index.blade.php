@extends('layouts.app')

@section('title', 'Computadores - ADMIN SENA')

@section('content')
<h4 class="md-2">Listado de Computadores</h4>
<div class="row">
    @foreach ($computers as $computer)
    <section class="col-md-4 mb-4">
        <table class="table table-bordered">
            <thead class="table-light">
                <th colspan="2">Computador #{{$computer->number}}</th>
            </thead>
            <tbody>
                <tr><th>Numero</th><td>{{$computer->number}}</td></tr>
                <tr><th>Marca</th><td>{{$computer->brand}}</td></tr>
                <tr>
                    <th>Aprendiz Asignado</th>
                    <td>
                        @if($computer->apprentice)
                          {{$computer->apprentice->name}}
                        @else
                           No asignado
                        @endif
                    </td>
                </tr>
            </tbody>

        </table>
    </section>
    @endforeach
@endsection