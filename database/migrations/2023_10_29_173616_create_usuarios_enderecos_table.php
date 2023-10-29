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
        Schema::create('usuarios_enderecos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained(
                table: 'usuarios'
            );
            $table->integer('cep');
            $table->string('logradouro');
            $table->string('bairro');
            $table->integer('numero');
            $table->string('cidade');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_enderecos');
    }
};
