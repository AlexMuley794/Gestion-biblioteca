@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Bienvenidos a la gestión de tu biblioteca</h1>
    <p>Por favor, inicia sesión o regístrate para acceder a tu cuenta.</p>
    <div>
        @if (Route::has('login'))
            <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
        @endif

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-secondary">Registrarse</a>
        @endif
    </div>
</div>
@endsection
