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
        Schema::table('bitacoras', function (Blueprint $table) {
            $table->after('seguridad_observaciones', function (Blueprint $table) {
                $table->string('unidad')->nullable();
                $table->string('responsable')->nullable();
                $table->integer('id_responsable')->nullable();
                $table->string('turno')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bitacoras', function (Blueprint $table) {
            $table->dropColumn(['unidad', 'responsable', 'id_responsable', 'turno']);
        });
    }
};
