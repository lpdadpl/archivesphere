<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginProcessController extends Controller
{
    public function handleLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        Log::info('Intento de inicio de sesión con credenciales: ', $credentials);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Obtener el nombre del rol a través de la relación
            $roleName = $user->role->name;

            // Registrar el mensaje en los logs con el rol del usuario
            Log::info('Usuario autenticado con rol: ' . $roleName);

            // Redirigir al usuario según su rol
            if ($roleName === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('home');
        }

        // Si las credenciales no son válidas
        return redirect()->route('login')->withErrors(['error' => 'Credenciales incorrectas.']);
    }
}
