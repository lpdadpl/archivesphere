<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class LoginProcessController extends Controller
{
    public function handleLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'redirect' => '/'
                ]);
            }
            return redirect('/');
        }

        if ($request->ajax()) {
            return response()->json([
                'success' => false,
                'message' => 'Credenciales incorrectas'
            ], 401);
        }

        return back();
    }

    public function checkSession()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return response()->json([
                'isLoggedIn' => true,
                'role' => $user->role ? $user->role->name : null
            ]);
        }
        return response()->json(['isLoggedIn' => false]);
    }
}
