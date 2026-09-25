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
        Schema::create('manuals', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();          // endereço do manual, ex.: /manuais/roteador
            $table->string('title_pt');
            $table->string('title_en');
            $table->text('description_pt');
            $table->text('description_en');
            $table->string('cover')->nullable();       // caminho da imagem da capa em public/
            $table->boolean('available')->default(false); // false = aparece como "Em breve"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manuals');
    }
};
