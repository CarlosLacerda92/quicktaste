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
            $table->id('usuario');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('nome');
            $table->integer('situacao')->default(1);
            $table->timestamp('data_cadastro')->useCurrent();
            $table->timestamp('data_atualizacao')->useCurrent();
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