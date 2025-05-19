@extends('layouts.app')

@section('title', 'Teachers - ADMIN SENA')

@section('content')
    @foreach ($teachers as $teacher)
        <table>
            <tr>
                <th>ID: {{ $teacher['id'] }}</th>
            </tr>
            <tr>
                <th>Nombre: {{ $teacher['name'] }}</th>
            </tr>
            <tr>
                <th>Gmail: {{ $teacher['email'] }}</th>
            </tr>
            <br>
        </table>
    @endforeach
@endsection