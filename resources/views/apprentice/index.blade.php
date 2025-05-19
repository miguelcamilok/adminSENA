@extends('layouts.app')

@section('title', 'Aprendices - ADMIN SENA')

@section('content')
    <h4>Listado Aprendices</h4>
    @foreach ($apprentices as $apprentice)
        <table>
            <tr>
                <th>ID: {{ $apprentice['id'] }}</th>
            </tr>
            <tr>
                <th>Nombre: {{ $apprentice['name'] }}</th>
            </tr>
            <tr>
                <th>Gmail: {{ $apprentice['email'] }}</th>
            </tr>
            <tr>
                <th>Numero de Telefono: {{ $apprentice['cell_number'] }}</th>
            </tr>
            <br>
        </table>
    @endforeach

    <br><br>
    <h4>Listado Cursos</h4>
    @foreach ($courses as $course)
        <table>
            <tr>
                <th>ID: {{ $course['id'] }}</th>
            </tr>
            <tr>
                <th>Numero de Curso: {{ $course['course_number'] }}</th>
            </tr>
            <tr>
                <th>Horario: {{ $course['day'] }}</th>
            </tr>
            <br>
        </table>
    @endforeach

    <br><br>
    <h4>Listado Computadores</h4>
    @foreach ($computers as $computer)
        <table>
            <tr>
                <th>ID: {{ $computer['id'] }}</th>
            </tr>
            <tr>
                <th>Numero: {{ $computer['number'] }}</th>
            </tr>
            <tr>
                <th>Marca: {{ $computer['brand'] }}</th>
            </tr>
            <br>
        </table>
    @endforeach
@endsection
