<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('file_types')->insert([
            ['name' => 'png'],
            ['name' => 'jpg'],
            ['name' => 'gif'],
            ['name' => 'docx'],
            ['name' => 'txt'],
            ['name' => 'zip'],
            ['name' => 'rar'],
            ['name' => 'mp3'],
            ['name' => 'wav'],
            ['name' => 'mkv'],
            ['name' => 'avi'],
            ['name' => 'mov'],
            ['name' => 'wmv'],
            ['name' => 'flv'],
            ['name' => 'html'],
            ['name' => 'css'],
            ['name' => 'js'],
            ['name' => 'json'],
            ['name' => 'xml'],
            ['name' => 'csv'],
            ['name' => 'xls'],
            ['name' => 'xlsx'],
            ['name' => 'ppt'],
            ['name' => 'pptx'],
            ['name' => 'doc'],
            ['name' => 'pdf'],
            ['name' => 'markdown'],
            ['name' => 'yaml'],
            ['name' => 'svg'],
            ['name' => 'webp'],
            ['name' => 'bmp'],
            ['name' => 'tiff'],
            ['name' => 'ico'],
            ['name' => 'epub'],
            ['name' => 'mp4'],
            ['name' => 'spreadsheet']
        ]);
    }
}
