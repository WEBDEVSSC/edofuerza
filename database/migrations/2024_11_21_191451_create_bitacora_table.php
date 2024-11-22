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
        Schema::create('bitacora', function (Blueprint $table) {
            $table->id();

            $table->string('traumatologia')->nullable();
            $table->string('medicina_interna')->nullable();
            $table->string('ginecologia')->nullable();
            $table->string('cirugia')->nullable();
            $table->string('cardiologia')->nullable();
            $table->string('hemodinamia')->nullable();
            $table->string('pediatria')->nullable();
            $table->string('urologia')->nullable();
            $table->string('neurologia')->nullable();
            $table->string('neurocirugia')->nullable();
            $table->string('anestesiologia')->nullable();

            $table->string('ucin')->nullable();
            $table->string('ucia')->nullable();
            $table->string('uti')->nullable();
            $table->string('toco')->nullable();
            $table->string('quirofano')->nullable();
            $table->string('hospital')->nullable();

            $table->string('urgencias')->nullable();
            $table->string('urgencias_observaciones')->nullable();

            $table->string('cirugias_nombre_uno')->nullable();
            $table->date('cirugias_fecha_uno')->nullable();
            $table->string('cirugias_tipo_uno')->nullable();

            $table->string('cirugias_nombre_dos')->nullable();
            $table->date('cirugias_fecha_dos')->nullable();
            $table->string('cirugias_tipo_dos')->nullable();

            $table->string('cirugias_nombre_tres')->nullable();
            $table->date('cirugias_fecha_tres')->nullable();
            $table->string('cirugias_tipo_tres')->nullable();

            $table->string('cirugias_nombre_cuatro')->nullable();
            $table->date('cirugias_fecha_cuatro')->nullable();
            $table->string('cirugias_tipo_cuatro')->nullable();

            $table->string('cirugias_nombre_cinco')->nullable();
            $table->date('cirugias_fecha_cinco')->nullable();
            $table->string('cirugias_tipo_cinco')->nullable();

            $table->string('limpieza')->nullable();
            $table->string('limpieza_observaciones')->nullable();

            $table->string('seguridad')->nullable();
            $table->string('seguridad_observaciones')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacora');
    }
};
