@extends('layouts.authForms.login')

@section('title', 'Inicio de Sesión - DevSync')

@section('content')
    <div class="login-container">
        <div class="login-form-section">
            <div class="devsync-logo">
                <span class="icon">&#9650;</span> DevSync
            </div>
            <h2 class="mb-4">Inicio de Sesión</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <input type="text" class="form-control" id="usuarioCorreo" placeholder="Usuario o Correo Electrónico">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="contrasena" placeholder="Contraseña">
                    <small class="form-text text-muted mt-2">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </small>
                </div>
                <div class="mb-3">
                    <small class="form-text text-muted">
                        ¿Eres nuevo? <a href="{{ route('register') }}">Regístrate aquí</a> 
                    </small>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
        </div>
        <div class="login-image-section">
            <div class="login-image-placeholder">
                <i class="bi bi-image"></i> </div>
            <h3>Bienvenido</h3>
            <p class="text-muted">DevSync te ayudará a gestionar tus proyectos</p>
        </div>
    </div>
@endsection