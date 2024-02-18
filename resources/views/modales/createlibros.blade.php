<div class="modal fade" id="crearLibroModal" tabindex="-1" aria-labelledby="crearLibroModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearLibroModalLabel">Agregar Nuevo Libro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de creación del libro -->
                <form action="{{ route('libros.store') }}" method="POST">
                    @csrf


                    <!-- Campo: Título -->
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>

                    <!-- Campo: Autores -->
                    <div class="mb-3">
                        <label for="autores" class="form-label">Autores</label>
                        <input type="text" class="form-control" id="autores" name="autores" required>
                    </div>

                     <!-- Campo: Editoriales -->
                     <div class="mb-3">
                        <label for="editoriales" class="form-label">Editorial</label>
                        <input type="text" class="form-control" id="editoriales" name="editoriales" required>
                    </div>

                    <!-- Campo: Año Publicado -->
                    <div class="mb-3">
                        <label for="anio_publicado" class="form-label">Año Publicado</label>
                        <input type="text" class="form-control" id="anio_publicado" name="anio_publicado" required>
                    </div>

                    <!-- Campo: Número de Páginas -->
                    <div class="mb-3">
                        <label for="num_de_pag" class="form-label">Numero de Páginas</label>
                        <input type="text" class="form-control" id="num_de_pag" name="num_de_pag" required>
                    </div>

                    <!-- Campo: Precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="precio" name="precio" required>
                    </div>

                    <!-- Campo: Disponibilidad -->
                    <div class="mb-3">
                        <label for="disponibilidad" class="form-label">Disponibilidad</label>
                        <input type="number" class="form-control" id="disponibilidad" name="disponibilidad" required>
                    </div>

                    <!-- Campo: Géneros -->
                    <div class="mb-3">
                        <label for="generos" class="form-label">Géneros</label>
                        <input type="text" class="form-control" id="generos" name="generos" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
