<!-- filepath: /resources/views/login.blade.php -->
@extends('layouts.app')

@section('content')
    @include('components.navbar')

    <div class="login-content">
        <div class="login-container">
            <h1>Iniciar Sesión</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    @include('components.footer')
@endsection
