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
        Schema::create('aluno_disciplina', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id')
                ->constrained('alunos','id', 'aluno_disciplina_aluno_id');
            $table->foreignId('disciplina_id')
                ->constrained('disciplinas', 'id', 'aluno_disciplina_disciplina_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno_disciplina');
    }
};
