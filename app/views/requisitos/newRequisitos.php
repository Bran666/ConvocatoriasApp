<div class="w-100 px-3">
  <div class="row">
  <div class="col-12">

      <div class="card shadow-sm">
        <!-- Cabecera -->
        <div class="card-header bg-success text-white py-2">
          <h4 class="mb-0">
            <i class="fas fa-file-alt me-2"></i>Agregar Requisito
            <a href="/requisitosCrud/init" class="btn btn-light btn-sm float-end">
              <i class="fas fa-arrow-left me-1"></i>Volver
            </a>
          </h4>
        </div>

        <!-- Cuerpo del formulario -->
        <div class="card-body">
          <form action="/requisitos/create" method="POST">

            <!-- Nombre -->
            <div class="mb-3">
              <label for="nombre" class="form-label fw-semibold">Nombre</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-tag"></i></span>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese el nombre del requisito" required>
              </div>
            </div>

            <!-- Observaciones -->
            <div class="mb-3">
              <label for="observaciones" class="form-label fw-semibold">Observaciones</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-comment-dots"></i></span>
                <textarea name="observaciones" class="form-control" id="observaciones" rows="3" placeholder="Ingrese observaciones si las hay..."></textarea>
              </div>
            </div>

            <!-- Entidad -->
            <div class="mb-3">
              <label for="idEntidad" class="form-label fw-semibold">Entidad</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-building"></i></span>
                <select name="idEntidad" class="form-control" required>
                  <option value="">Seleccione una entidad</option>
                  <?php if(isset($entidades) && !empty($entidades)): ?>
                    <?php foreach($entidades as $entidad): ?>
                      <option value="<?= $entidad->id ?>"><?= htmlspecialchars($entidad->nombre) ?></option>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </select>
              </div>
            </div>

            <!-- Requisito Selección -->
            <div class="mb-3">
              <label for="idRequisitoSeleccion" class="form-label fw-semibold">Requisito Selección</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-check-square"></i></span>
                <select name="idRequisitoSeleccion" class="form-control" required>
                  <option value="">Seleccione un requisito</option>
                  <?php if(isset($requisitosSeleccion) && !empty($requisitosSeleccion)): ?>
                    <?php foreach($requisitosSeleccion as $requisito): ?>
                      <option value="<?= $requisito->id ?>"><?= htmlspecialchars($requisito->nombre) ?></option>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </select>
              </div>
            </div>

            <!-- Botón Guardar -->
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-success">
                <i class="fas fa-save me-2"></i>Guardar
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
