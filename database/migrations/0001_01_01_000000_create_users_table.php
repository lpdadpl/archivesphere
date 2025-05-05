<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('IdUsuario'); // Llave primaria personalizada
            $table->string('CodigoUsuario', 50)->unique(); // Código único del usuario
            $table->string('Email', 150)->unique(); // Email único
            $table->date('FechaAlta'); // Fecha de alta del usuario
            $table->unsignedBigInteger('IdRol'); // Llave foránea para la tabla roles
            $table->boolean('Estado')->default(true); // Estado del usuario (activo/inactivo)

            // Relación con la tabla roles
            $table->foreign('IdRol')->references('IdRol')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('usuarios');
    }
};
