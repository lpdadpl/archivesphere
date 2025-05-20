<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginProcessController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileController;

// Ruta para la página de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta para la página de login
Route::get('/login', function () {
    return view('layouts.login');
})->name('login');

// Ruta para manejar el proceso de login
Route::post('/login-process', [LoginProcessController::class, 'handleLogin'])->name('login.process');

// Ruta para verificar el estado de la sesión
Route::get('/check-session', [LoginProcessController::class, 'checkSession'])->name('check.session');

// Rutas protegidas por el middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::get('/documents', function () {
        return view('layouts/documents');
    })->name('documents');

    Route::get('/books', function () {
        return view('layouts/books');
    })->name('books');

    Route::get('/videos', function () {
        return view('layouts/videos');
    })->name('videos');

    Route::get('/library', function () {
        return view('layouts/library');
    })->name('library');

    // Ruta para el panel de usuario (protegida por middleware de auth)
    Route::get('/user/dashboard', function () {
        return view('layouts.UserDashboard');
    })->name('user.dashboard');
});

// Ruta para mostrar un archivo específico
Route::get('/file/{id}', [FileController::class, 'show'])->name('file.show');

// Ruta para la página de contacto
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');

// Ruta para manejar el envío del formulario de contacto
Route::post('/contact', function () {
    return redirect()->route('contact')->with('success', 'Mensaje enviado correctamente.');
})->name('contact.submit');

// Ruta para el panel de administración
Route::get('/admin/dashboard', function () {
    return view('layouts.AdminDashboard');
})->name('admin.dashboard');

// Rutas del footer
Route::get('/privacy-policy', function () {
    return view('layouts.PrivacyPolicy');
})->name('privacy.policy');

Route::get('/terminos-servicio', function () {
    return view('layouts.terms_of_service');
})->name('terms.service');

Route::get('/blog', function () {
    return view('layouts.blog');
})->name('blog');
