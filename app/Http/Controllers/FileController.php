<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function show($id)
    {
        // Buscar el archivo por ID
        $file = File::findOrFail($id);

        // Pasar el archivo a la vista
        return view('layouts.file', compact('file'));
    }
}
