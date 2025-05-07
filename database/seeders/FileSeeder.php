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
        ]);
    }
}
