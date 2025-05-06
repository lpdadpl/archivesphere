<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página de inicio
Route::get('/', function () {
    return view('layouts/home');
})->name('home');

// Ruta para la página de login
Route::get('/layouts/login', function () {
    return view('login');
})->name('login');

// Ruta para la biblioteca
Route::get('/library', function () {
    $groupedFiles = [
        'Documentos' => [
            [
                'id' => 1,
                'title' => 'Documento 1',
                'description' => 'Descripción del documento 1',
                'image' => 'ruta_a_imagen_1.jpg',
            ],
            [
                'id' => 2,
                'title' => 'Documento 2',
                'description' => 'Descripción del documento 2',
                'image' => 'ruta_a_imagen_2.jpg',
            ],
        ],
        'Libros' => [
            [
                'id' => 3,
                'title' => 'Libro 1',
                'description' => 'Descripción del libro 1',
                'image' => 'ruta_a_imagen_3.jpg',
            ],
        ],
    ];
    return view('library', compact('groupedFiles'));
})->name('library');

// Ruta para mostrar un archivo específico
Route::get('/file/{id}', function ($id) {
    $file = [
        'id' => $id,
        'title' => 'Archivo ' . $id,
        'description' => 'Descripción del archivo ' . $id,
        'uploader' => 'Usuario ' . $id,
        'likes' => rand(0, 100),
        'downloads' => rand(0, 1000),
    ];
    return view('file', compact('file'));
})->name('file.show');

// Ruta para la página de contacto
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');

// Ruta para manejar el envío del formulario de contacto
Route::post('/contact', function () {
    // Aquí puedes manejar el envío del formulario, como enviar un correo o guardar en la base de datos.
    return redirect()->route('contact')->with('success', 'Mensaje enviado correctamente.');
})->name('contact.submit');
