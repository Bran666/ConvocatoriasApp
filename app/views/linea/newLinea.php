<div class="col-md-10 mx-auto">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white text-center py-3">
            <h4 class="mb-0">
                <i class="fas fa-bullhorn me-2"></i>Línea
                <a href="/linea/init" class="btn btn-light btn-sm float-end">
                    <i class="fas fa-arrow-left me-1"></i> Volver
                </a>
            </h4>
        </div>

        <!-- Cuerpo del formulario a lo ancho -->
        <div class="card-body px-4 py-3">
            <form action="/linea/create" method="post">
                <!-- Campo de Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <!-- Campo de Descripción -->
                <div class="mb-3">
                    <label for="descripcion" class="form-label fw-bold">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                </div>

                <!-- Botón de guardar -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-2"></i>Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
