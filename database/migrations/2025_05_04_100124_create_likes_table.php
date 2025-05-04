<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id(); // id del like
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('file_id');
            $table->timestamps();

            // Clave foránea
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');

            // Para evitar likes duplicados por usuario
            $table->unique(['user_id', 'file_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
