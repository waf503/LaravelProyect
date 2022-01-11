@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h2>Bienvenido a mi primer proyecto Laravel</h2>
    <p>Tu nombre es: {{$nombre}}</p>
@endsection
