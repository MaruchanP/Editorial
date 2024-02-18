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
        Schema::create('genero', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
            // Timestamps 
            // (created_at & updated_at columns)
            // are already included by default with 
            // Laravel's Eloquent ORM.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genero');
    }
};

