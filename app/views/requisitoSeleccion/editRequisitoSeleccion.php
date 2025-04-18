<!-- Contenido Principal -->
<div class="col-md-10 mx-auto">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h5 class="mb-0 d-flex justify-content-between align-items-center">
                <i class="fas fa-edit me-2"></i> Editar Requisito de Selección
                <a href="/requisitoSeleccion/init" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left me-1"></i> Volver
                </a>
            </h5>
        </div>

        <!-- Cuerpo del formulario -->
        <div class="card-body p-3">
            <form action="/requisitoSeleccion/update/<?php echo $infoReal->id; ?>" method="post">
                <!-- Campo ID -->
                <div class="mb-3">
                    <label for="id" class="form-label fw-bold">ID</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-id-badge"></i>
                        </span>
                        <input type="text" class="form-control" value="<?php echo $infoReal->id; ?>" name="id" id="id" readonly>
                    </div>
                </div>

                <!-- Campo Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" class="form-control" value="<?php echo $infoReal->nombre; ?>" name="nombre" id="nombre" required>
                    </div>
                </div>

                <!-- Campo Tipo -->
                <div class="mb-3">
                    <label for="tipo" class="form-label fw-bold">Tipo</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-list-alt"></i>
                        </span>
                        <select class="form-select" name="tipo" id="tipo" required>
                            <?php foreach($tipos as $tipo): ?>
                                <option value="<?php echo $tipo->id; ?>" <?php echo ($tipo->id == $infoReal->idTipo) ? 'selected' : ''; ?>>
                                    <?php echo $tipo->nombre; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- Botón Guardar Cambios -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-2"></i> Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
