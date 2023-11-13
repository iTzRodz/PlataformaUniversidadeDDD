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
        Schema::create('pesquisador_projeto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesquisador_id')
                ->constrained('pesquisador', 'id', 'pesquisador_projeto_pesquisador_id');
            $table->foreignId('projeto_id')
                ->constrained('projeto', 'id', 'pesquisador_projeto_projeto_id');
            $table->foreignId('titulacao_id')
                ->constrained('titulacao', 'id', 'pesquisador_projeto_titulacao_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesquisador_projeto');
    }
};
