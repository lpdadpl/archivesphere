<!-- filepath: /resources/views/login.blade.php -->
@extends('app')

@section('content')
    @include('components.Header')

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }

        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f3f4f6;
        }

        .login-box {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 2rem;
            width: 100%;
            max-width: 400px;
        }

        .login-title {
            font-size: 1.8rem;
            font-weight: bold;
            text-align: center;
            color: #333333;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
            width: 100%;
        }

        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: bold;
            color: #555555;
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #cccccc;
            border-radius: 6px;
            font-size: 1rem;
            color: #333333;
        }

        .form-input:focus {
            outline: none;
            border-color: #0056b3;
            box-shadow: 0 0 4px rgba(0, 86, 179, 0.5);
        }

        .login-button {
            width: 100%;
            padding: 0.8rem;
            background-color: #0056b3;
            color: #ffffff;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: rgb(0, 66, 136);
        }

        .login-button:disabled {
            background-color: #cccccc;
            cursor: not-allowed;
        }

        .register-link {
            display: block;
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #0056b3;
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }
    </style>

    <div class="login-container">
        <div class="login-box">
            <h1 class="login-title">Iniciar Sesión</h1>
            <form method="POST" action="{{ route('login.process') }}" id="loginForm">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-input" required>
                </div>
                <button type="submit" class="login-button" id="loginButton">Iniciar Sesión</button>
            </form>
            <a href="/register" class="register-link">¿No tienes una cuenta? Regístrate aquí</a>
        </div>
    </div>

    @toastifyJs
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const loginButton = document.getElementById('loginButton');
            loginButton.disabled = true;
            loginButton.textContent = 'Iniciando sesión...';

            fetch(this.action, {
                method: 'POST',
                body: new FormData(this),
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    toastify().error(data.message);
                    loginButton.disabled = false;
                    loginButton.textContent = 'Iniciar Sesión';
                }
            })
            .catch(() => {
                toastify().error('Error al iniciar sesión');
                loginButton.disabled = false;
                loginButton.textContent = 'Iniciar Sesión';
            });
        });
    </script>
@include('components.Footer')
@endsection