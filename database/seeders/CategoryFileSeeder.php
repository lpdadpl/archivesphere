<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryFile;

class CategoryFileSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'PDF', 'description' => 'Documentos en formato PDF'],
            ['name' => 'Book', 'description' => 'Libros digitales o escaneados'],
            ['name' => 'Video', 'description' => 'Videos en distintos formatos'],
            ['name' => 'Film', 'description' => 'Películas o cortometrajes'],
            ['name' => 'Music', 'description' => 'Archivos de audio o música'],
            ['name' => 'Image', 'description' => 'Fotos e imágenes en general'],
            ['name' => 'Presentation', 'description' => 'Presentaciones tipo PowerPoint o similares'],
            ['name' => 'Spreadsheet', 'description' => 'Hojas de cálculo Excel, CSV, etc.'],
            ['name' => 'Code', 'description' => 'Fragmentos o archivos de código fuente'],
            ['name' => 'Archive', 'description' => 'Archivos comprimidos como ZIP, RAR, etc.'],
            ['name' => 'Other', 'description' => 'Otros tipos de archivos no categorizados'],
        ];

        foreach ($categories as $category) {
            CategoryFile::create($category);
        }
    }
}
