<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class HomeController extends Controller
{
    public function index()
    {
        // Consultar todos los archivos de la base de datos
        $files = File::all();

        // Pasar los datos a la vista
        return view('layouts.Home', compact('files'));
    }
}
