@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px; border-radius: 12px;">
        <h3 class="mb-4 text-center fw-bold text-primary">Iniciar Sesión</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Correo electrónico</label>
                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="tucorreo@ejemplo.com" required autofocus>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label fw-semibold">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="********" required>
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill shadow-sm">
                Entrar
            </button>
        </form>

        <div class="mt-3 text-center">
            <small class="text-muted">¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a></small>
        </div>
    </div>
</div>
@endsection
