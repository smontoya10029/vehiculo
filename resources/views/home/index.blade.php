@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>VEHICULOS</h1>
        <p class="lead">Sólo los usuarios autenticados pueden acceder a esta sección.</p>
        <a class="btn btn-lg btn-primary" href="{{ route('vehiculo.show') }}" role="button">Vehiculos &raquo;</a>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection