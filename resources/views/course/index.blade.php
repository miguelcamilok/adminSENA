@extends('layouts.app')

@section('title', 'Cursos - ADMIN SENA')

@section('content')
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
@endsection