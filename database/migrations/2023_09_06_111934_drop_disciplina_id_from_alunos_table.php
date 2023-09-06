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
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropForeign('alunos_disciplina_id');
            $table->dropColumn('disciplina_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->foreignId('disciplina_id')
                ->constrained('disciplinas', 'id', 'alunos_disciplina_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }
};
