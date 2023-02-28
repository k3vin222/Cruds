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
        Schema::create('ambientes', function (Blueprint $table) {
            $table->string('nro_ambiente',10)->primarykey();
            $table->string('nombre_ambiente',50);
            $table->string('aforo',50);
            $table->string('especialidad',50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ambientes');
    }
};
