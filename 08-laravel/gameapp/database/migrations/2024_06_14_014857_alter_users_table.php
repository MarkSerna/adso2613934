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
        // Paso 1: Renombrar la columna 'name' a 'fullname'
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'fullname');
        });

        // Paso 2: Agregar las nuevas columnas 'gender' y 'role'
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->after('fullname'); // Asegúrate de usar 'fullname' aquí
            $table->string('role')->default('Customer')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Paso inverso para 'role' y 'gender'
            $table->dropColumn(['gender', 'role']);

            // Paso inverso para renombrar 'fullname' a 'name'
            $table->renameColumn('fullname', 'name');
        });
    }
};
