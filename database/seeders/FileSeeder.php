<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('files')->insert([
            [
                'name' => '1984',
                'type' => 'book',
                'user_id' => 1, // ID del usuario que subió el archivo
                'description' => 'Una novela distópica escrita por George Orwell.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/0451524934',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'To Kill a Mockingbird',
                'type' => 'book',
                'user_id' => 1,
                'description' => 'Una obra clásica de Harper Lee sobre la justicia y la moralidad.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/0061120081',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Great Gatsby',
                'type' => 'book',
                'user_id' => 1,
                'description' => 'Una novela de F. Scott Fitzgerald sobre el sueño americano.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/0743273567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pride and Prejudice',
                'type' => 'book',
                'user_id' => 1,
                'description' => 'Una novela romántica de Jane Austen.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/1503290565',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Moby Dick',
                'type' => 'book',
                'user_id' => 1,
                'description' => 'La épica historia de Herman Melville sobre la caza de una ballena blanca.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/1503280780',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Don Quijote de la Mancha',
                'type' => 'book',
                'user_id' => 1,
                'description' => 'La obra maestra de Miguel de Cervantes sobre las aventuras del ingenioso hidalgo.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/8420412147',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cien años de soledad',
                'type' => 'book',
                'user_id' => 1,
                'description' => 'La obra maestra de Gabriel García Márquez sobre la familia Buendía y Macondo.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/0307474720',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'El Señor de los Anillos',
                'type' => 'book',
                'user_id' => 1,
                'description' => 'La épica trilogía de J.R.R. Tolkien sobre la Tierra Media y el Anillo Único.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/0544003411',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Crónica de una muerte anunciada',
                'type' => 'book',
                'user_id' => 1,
                'description' => 'Una novela de Gabriel García Márquez sobre un crimen y sus consecuencias.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/0307474720',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'El Principito',
                'type' => 'book',
                'user_id' => 1,
                'description' => 'La conmovedora historia de Antoine de Saint-Exupéry sobre un pequeño príncipe y sus viajes.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/0156013984',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rayuela',
                'type' => 'book',
                'user_id' => 1,
                'description' => 'La obra maestra de Julio Cortázar que revolucionó la narrativa latinoamericana.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/843760172X',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pedro Páramo',
                'type' => 'book',
                'user_id' => 1,
                'description' => 'La obra maestra de Juan Rulfo que mezcla realismo mágico y narrativa experimental.',
                'img_url' => 'https://cdn.sanity.io/images/599r6htc/regionalized/772835d4e3642ea16a575ed8e02d470b71b132d6-720x405.png',
                'file_url' => 'https://www.amazon.com/dp/8497592284',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
