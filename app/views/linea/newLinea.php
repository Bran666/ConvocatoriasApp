<div class="w-100 px-3">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white  py-3">
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
                <!-- Campo de Nombre con ícono -->
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-user-tag"></i>
                        </span>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de la línea" required>
                    </div>
                </div>

                <!-- Campo de Descripción con ícono -->
                <div class="mb-3">
                    <label for="descripcion" class="form-label fw-bold">Descripción</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-align-left"></i>
                        </span>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Escriba una descripción breve" required></textarea>
                    </div>
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
