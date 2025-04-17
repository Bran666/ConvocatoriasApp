<div class="container mt-2">
  <div class="row">
    <div class="col-md-10 offset-md-2"> <!-- Alineado a la derecha -->
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white py-2">
          <h4 class="mb-0">
            Agregar Requisito
            <a href="/requisitosCrud/init" class="btn btn-light btn-sm float-end">
              <i class="fas fa-arrow-left me-1"></i>Volver
            </a>
          </h4>
        </div>
        <div class="card-body">
          <form action="/requisitos/create" method="POST">
            <div class="mb-3">
              <label for="nombre" class="form-label fw-semibold">Nombre</label>
              <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="observaciones" class="form-label fw-semibold">Observaciones</label>
              <textarea name="observaciones" class="form-control"></textarea>
            </div>
            <div class="mb-3">
              <label for="idEntidad" class="form-label fw-semibold">Entidad</label>
              <select name="idEntidad" class="form-control" required>
                <option value="">Seleccione una entidad</option>
                <?php if(isset($entidades) && !empty($entidades)): ?>
                  <?php foreach($entidades as $entidad): ?>
                    <option value="<?= $entidad->id ?>"><?= htmlspecialchars($entidad->nombre) ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="idRequisitoSeleccion" class="form-label fw-semibold">Requisito Selección</label>
              <select name="idRequisitoSeleccion" class="form-control" required>
                <option value="">Seleccione un requisito</option>
                <?php if(isset($requisitosSeleccion) && !empty($requisitosSeleccion)): ?>
                  <?php foreach($requisitosSeleccion as $requisito): ?>
                    <option value="<?= $requisito->id ?>"><?= htmlspecialchars($requisito->nombre) ?></option>
                  <?php endforeach; ?>
                <?php endif; ?>
              </select>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-success">
                <i class="fas fa-save me-2"></i> Guardar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
