<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            // ID único autoincremental
            $table->id();

            // Campos básicos
            $table->string('name', 100); // Nombre del usuario, máximo 100 caracteres
            $table->string('email')->unique(); // Correo único
            $table->string('password', 255); // Contraseña en formato hash (máximo 255 caracteres)

            // Rol del usuario: 'atleta' o 'entrenador'
            $table->enum('role', ['atleta', 'entrenador'])->default('atleta');

            // Deporte asociado (campo opcional)
            $table->string('deporte', 100)->nullable();

            // Relación con otro usuario (entrenador)
            $table->foreignId('entrenador_id')
                ->nullable()
                ->constrained('usuarios') // Relación con la misma tabla
                ->onDelete('set null'); // Si el entrenador se elimina, el campo se establece en null

            // Timestamps para created_at y updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
