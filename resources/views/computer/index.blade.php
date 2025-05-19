@extends('layouts.app')

@section('title', 'Computadores - ADMIN SENA')

@section('content')
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