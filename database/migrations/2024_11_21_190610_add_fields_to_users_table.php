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
        Schema::table('users', function (Blueprint $table) {
            $table->string('unidad')->nullable()->after('remember_token'); // Campo unidad
            $table->string('responsable')->nullable()->after('unidad'); // Campo responsable
            $table->string('turno')->nullable()->after('responsable'); // Campo turno
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['unidad', 'responsable', 'turno']);
        });
    }
};
