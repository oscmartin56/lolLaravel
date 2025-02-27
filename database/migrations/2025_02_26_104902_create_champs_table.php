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
        Schema::dropIfExists('champs');  //Al hacer el fresh se asegura de dropear la tabla y crearla
        Schema::create('champs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('region');
            $table->string('Rol');
            $table->string('difficulty');
            $table->integer('RPCost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champs');
    }
};
