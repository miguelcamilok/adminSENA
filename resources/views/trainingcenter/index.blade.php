@extends('layouts.app')

@section('title', 'Training Centers - ADMIN SENA')

@section('content')
    @foreach ($trainingcenters as $trainingcenter)
        <table>
            <tr>
                <th>ID: {{ $trainingcenter['id'] }}</th>
            </tr>
            <tr>
                <th>Nombre: {{ $trainingcenter['name'] }}</th>
            </tr>
            <tr>
                <th>Ubicacion: {{ $trainingcenter['location'] }}</th>
            </tr>
            <br>
        </table>
    @endforeach
@endsection