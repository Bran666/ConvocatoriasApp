<!-- Contenido Principal -->
<div class="col-md-10 mx-auto">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h5 class="mb-0 d-flex justify-content-between align-items-center">
                <i class="fas fa-edit me-2"></i> Editar Rol
                <a href="/rol/index" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left me-2"></i>Volver
                </a>
            </h5>
        </div>

        <!-- Cuerpo del formulario -->
        <div class="card-body p-3">
            <form action="/rol/update" method="post">
                <!-- Campo ID -->
                <div class="mb-3">
                    <label for="txtId" class="form-label fw-bold">ID</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-id-badge"></i>
                        </span>
                        <input type="text" class="form-control" value="<?php echo $infoReal->id; ?>" 
                               name="txtId" id="txtId" readonly>
                    </div>
                </div>

                <!-- Campo Nombre del Rol -->
                <div class="mb-3">
                    <label for="txtNombre" class="form-label fw-bold">Nombre del Rol</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-user-tag"></i>
                        </span>
                        <input type="text" class="form-control" value="<?php echo $infoReal->nombre; ?>" 
                               name="txtNombre" id="txtNombre" required>
                    </div>
                </div>

                <!-- Botón Guardar Cambios -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-2"></i>Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
