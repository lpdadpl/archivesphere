<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cookie;

class LoginProcessController extends Controller
{
    public function handleLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        Log::info('Intento de inicio de sesión con credenciales: ', $credentials);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $roleName = $user->role->name;
            Log::info('Usuario autenticado con rol: ' . $roleName);

            // Crear cookie de sesión que expira en 1 hora
            $cookie = Cookie::make('user_session', $user->id, 60);

            // Si es una petición AJAX, devolver JSON
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'redirect' => $roleName === 'admin' ? route('admin.dashboard') : route('user.dashboard')
                ])->withCookie($cookie);
            }

            // Si no es AJAX, redirigir normalmente
            $redirect = $roleName === 'admin' ? route('admin.dashboard') : route('user.dashboard');
            return redirect($redirect)->withCookie($cookie);
        }

        // Si las credenciales no son válidas
        if ($request->ajax()) {
            return response()->json([
                'success' => false,
                'message' => 'Credenciales incorrectas.'
            ], 401);
        }

        return redirect()->route('login')->withErrors(['error' => 'Credenciales incorrectas.']);
    }

    public function checkSession()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return response()->json([
                'isLoggedIn' => true,
                'role' => $user->role->name
            ]);
        }
        return response()->json(['isLoggedIn' => false]);
    }
}
