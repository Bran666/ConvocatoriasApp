<div class="w-100 px-3">
  <div class="card shadow">
    <!-- Cabecera verde con ícono -->
    <div class="card-header bg-success text-white text-center py-3">
      <h4 class="mb-0 d-flex justify-content-between align-items-center">
        <span><i class="fas fa-tasks me-2"></i> Requisito de Selección</span>
        <a href="/requisitoSeleccion/init" class="btn btn-light btn-sm">
          <i class="fas fa-arrow-left me-1"></i> Volver
        </a>
      </h4>
    </div>

    <!-- Cuerpo del formulario -->
    <div class="card-body px-4 py-3">
      <form action="/requisitoSeleccion/create" method="post">
        <!-- Campo Nombre con ícono -->
        <div class="mb-3">
          <label for="nombre" class="form-label fw-bold">Nombre</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-pen"></i></span>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Prueba escrita" required>
          </div>
        </div>

        <!-- Campo Tipo con ícono -->
        <div class="mb-3">
          <label for="tipo" class="form-label fw-bold">Tipo</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
            <select class="form-select" name="tipo" id="tipo" required>
              <?php foreach($tipos as $tipo): ?>
                <option value="<?php echo $tipo->id; ?>">
                  <?php echo $tipo->nombre; ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <!-- Botón Guardar -->
        <div class="d-grid">
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save me-2"></i>Guardar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
