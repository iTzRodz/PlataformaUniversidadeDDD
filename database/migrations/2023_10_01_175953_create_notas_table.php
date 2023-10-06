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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->float('p1')->nullable();
            $table->float('p2')->nullable();
            $table->float('sub')->nullable();
            $table->float('exame')->nullable();
            $table->foreignId('aluno_disciplina_id')
                ->constrained('aluno_disciplina', 'id', 'notas_aluno_disciplina_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
