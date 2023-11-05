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
        Schema::create('restaurantes_cardapios', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_restaurante')->references('id')->on('restaurantes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome');
            $table->string('descricao');
            $table->foreign('categoria')->references('id')->on('cardapios_categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->double('preco', 4, 2);
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantes_cardapios');
    }
};
