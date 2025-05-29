@extends('layouts.authForms.register')

@section('title', 'Registro - DevSync')

@section('content')
    <div class="register-container">
        <div class="register-form-section">
            <div class="devsync-logo">
                <span class="icon">&#9650;</span> DevSync
            </div>
            <h2 class="mb-4">Registrarse</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf


                <div class="mb-3">
                    <input type="text" class="form-control" id="nombreCompleto" placeholder="Nombre Completo">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="Correo" placeholder="Correo Electrónico">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="usuario" placeholder="Nombre de Usuario">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Contraseña">
                    <small class="form-text text-muted mt-2">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </small>
                </div>
                <div class="mb-3">
                    <small class="form-text text-muted">
                        ¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia Sesion aqui</a> 
                    </small>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
        </div>
        <div class="register-image-section">
            <div class="register-image-placeholder">
                <i class="bi bi-image"></i>
            </div>
            <h3>¡Únete a DevSync!</h3>
            <p class="text-muted">Crea tu cuenta gratis y empieza a organizar tus ideas, colaborar en equipo y llevar tus proyectos al éxito.</p>
        </div>
    </div>
@endsection