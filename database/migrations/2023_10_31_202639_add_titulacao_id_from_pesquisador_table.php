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
        Schema::table('pesquisador', function (Blueprint $table) {
            $table->foreignId('titulacao_id')
                ->constrained('titulacao', 'id', 'pesquisador_titulacao_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pesquisador', function (Blueprint $table) {
            $table->dropColumn('titulacao_id');
        });
    }
};
