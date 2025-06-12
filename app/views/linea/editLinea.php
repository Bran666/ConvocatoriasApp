<!-- Contenido Principal -->
<div class="w-100 px-3">
  <div class="row">
  <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white py-2">
          <h4 class="mb-0"> <i class="fas fa-edit me-2"></i>
            Editar Línea
            <a href="/linea/init" class="btn btn-light btn-sm float-end">
              <i class="fas fa-arrow-left me-1"></i>Volver
            </a>
          </h4>
        </div>
        <div class="card-body">
          <form action="/linea/update/<?php echo $infoReal->id; ?>" method="post">
            <!-- Campo ID -->
            <div class="mb-3">
              <label for="id" class="form-label fw-semibold"> ID</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                <input type="text" class="form-control" value="<?php echo $infoReal->id; ?>" name="id" id="id" readonly>
              </div>
            </div>
            <!-- Campo Nombre -->
            <div class="mb-3">
              <label for="nombre" class="form-label fw-semibold">Nombre</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control" value="<?php echo $infoReal->nombre; ?>" name="nombre" id="nombre" required>
              </div>
            </div>
            <!-- Campo Descripción -->
            <div class="mb-3">
              <label for="descripcion" class="form-label fw-semibold">Descripción</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                <textarea class="form-control" name="descripcion" id="descripcion" required><?php echo $infoReal->descripcion; ?></textarea>
              </div>
            </div>

            <!-- Botón Guardar Cambios -->
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-success">
                <i class="fas fa-save me-2"></i> Guardar Cambios
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
