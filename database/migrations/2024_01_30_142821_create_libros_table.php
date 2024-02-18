<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('libros', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->string('autores');
        $table->string('editoriales');
        $table->year('anio_publicado');
        $table->integer('num_de_pag');
        $table->decimal('precio', 8, 2);
        $table->integer('disponibilidad');
        $table->string('generos');
        $table->timestamps();
        $table->softDeletes(); // Borrado lógico

        // Otras columnas y restricciones si es necesario

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};

