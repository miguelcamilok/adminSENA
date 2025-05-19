@extends('layouts.app')

@section('title', 'Areas - ADMIN SENA')

@section('content')
    @foreach ($areas as $area)
        <table>
            <tr>
                <th>ID: {{ $area['id'] }}</th>
            </tr>
            <tr>
                <th>Nombre: {{ $area['name'] }}</th>
            </tr>
            <br>
        </table>
    @endforeach
@endsection