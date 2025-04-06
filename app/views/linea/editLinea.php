<!-- Contenido Principal -->
<div class="col-md-10">
  <div class="row justify-content-center">
    <div class="col-md-8"> <!-- Contenedor más pequeño y centrado -->
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white py-2">
          <h4 class="mb-0">Editar Línea
          <a href="/linea/init" class="btn btn-light btn-sm float-end">
                            <i class="fas fa-arrow-left me-1"></i>Volver
                        </a>
          </h4>
        </div>
        <div class="card-body">
          <form action="/linea/update/<?php echo $infoReal->id; ?>" method="post">
            <!-- Campo ID -->
            <div class="mb-3">
              <label for="id" class="form-label fw-semibold">ID</label>
              <input type="text" class="form-control" value="<?php echo $infoReal->id; ?>" name="id" id="id" readonly>
            </div>
            <!-- Campo Nombre -->
            <div class="mb-3">
              <label for="nombre" class="form-label fw-semibold">Nombre</label>
              <input type="text" class="form-control" value="<?php echo $infoReal->nombre; ?>" name="nombre" id="nombre" required>
            </div>
            <!-- Campo Descripción -->
            <div class="mb-3">
              <label for="descripcion" class="form-label fw-semibold">Descripción</label>
              <input type="text" class="form-control" value="<?php echo $infoReal->descripcion; ?>" name="descripcion" id="descripcion" required>
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
