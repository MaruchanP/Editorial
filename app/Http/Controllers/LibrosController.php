<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::all();
        return view('libreria.libros', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required|string',
        'autores' => 'required|string',
        'editoriales' => 'required|string',
        'anio_publicado' => 'required|integer',
        'num_de_pag' => 'required|integer',
        'precio' => 'required|numeric',
        'disponibilidad' => 'required|string',
        'generos' => 'required|string',
    ]);

    // Crea un nuevo registro en la base de datos utilizando el modelo Libro
    Libro::create($request->all());

    return redirect()->route('libros.index')->with('success', 'Libro creado exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    // Obtener el libro por el id
    $libro = Libro::find($id);

    // Verificar si el libro existe
    if (!$libro) {
        return redirect()->route('libros.index')->with('error', 'Libro no encontrado.');
    }

    // Pasar el libro a la vista
    return view('libros.show', ['libro' => $libro]);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // Encuentra el libro por su ID
    $libro = Libro::find($id);

    // Verifica si el libro existe
    if (!$libro) {
        return redirect()->route('libros.index')->with('error', 'Libro no encontrado');
    }

    // Pasa el libro a la vista
    return view('modales.editlibro', compact('libro'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
{
    $request->validate([
        // Validaciones aquí
    ]);


    // Actualizar el libro con los datos del formulario
    $libro->update($request->all());

    return redirect()->route('libros.index')->with('success', 'Libro actualizado exitosamente.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Obtener el libro
        $libro = Libro::find($id);

        //Eliminar el libro de la base de datos
        $libro->delete();

        return redirect()->route('libros.index')->with('sucess', 'Libro eliminado exitosamente.');
    }
}
