<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model
{
    use SoftDeletes;

    protected $fillable = ['titulo', 'autores', 'editoriales', 'anio_publicado', 'num_de_pag', 'precio', 'disponibilidad', 'generos'];


    protected $dates = ['deleted_at'];
}
