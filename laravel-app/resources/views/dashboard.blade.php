@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h2>Bienvenido, {{ auth()->user()->name }}</h2>
<p>Has iniciado sesión correctamente.</p>
<a href="{{ route('logout') }}" class="btn btn-danger">Cerrar Sesión</a>
@endsection
