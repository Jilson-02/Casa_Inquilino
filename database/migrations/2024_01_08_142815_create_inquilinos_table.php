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
        Schema::create('inquilinos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreIn');
            $table->string('apellidoIn');
            $table->date('fechaNacimiento')->nullable();
            $table->boolean('estado')->default(true);
            $table->foreignId('casa_id')->constrained('casas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquilinos');
    }
};
