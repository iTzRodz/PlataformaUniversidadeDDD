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
        Schema::table('aluno_disciplina', function (Blueprint $table) {
            $table->foreignId('periodo_id')
                ->after('disciplina_id')
                ->nullable()
                ->constrained('periodos', 'id', 'aluno_disciplina_periodo_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aluno_disciplina', function (Blueprint $table) {
            $table->dropForeign(['periodo_id']);
        });
    }
};
