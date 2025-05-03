<div class="container mt-2">
  <div class="row">
    <div class="col-md-10 offset-md-2">
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white py-2">
          <div class="d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Crear Convocatoria</h4>
            <a href="/convocatoria/lista" class="btn btn-light btn-sm">
              <i class="fas fa-arrow-left me-1"></i>Volver
            </a>
          </div>
        </div>
        <div class="card-body">
          <form action="/convocatoria/init" method="post" enctype="multipart/form-data" class="row g-3">

            <!-- Campo Nombre -->
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
              <div class="form-floating flex-grow-1">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de la Convocatoria" required>
                <label for="nombre">Nombre de la Convocatoria</label>
              </div>
            </div>

            <!-- Campo Descripción -->
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fas fa-align-left"></i></span>
              <div class="form-floating flex-grow-1">
                <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripción" style="height: 100px;" required></textarea>
                <label for="descripcion">Descripción</label>
              </div>
            </div>

            <!-- Fechas -->
            <div class="col-md-6">
              <label class="form-label fw-semibold">Fecha de Revisión</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-calendar-check"></i></span>
                <input type="date" name="fechaRevision" class="form-control" required>
              </div>
            </div>

            <div class="col-md-6">
              <label class="form-label fw-semibold">Fecha de Cierre</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-calendar-times"></i></span>
                <input type="date" name="fechaCierre" class="form-control" required>
              </div>
            </div>

            <!-- Campo Objetivo -->
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fas fa-bullseye"></i></span>
              <div class="form-floating flex-grow-1">
                <textarea name="objetivo" id="objetivo" class="form-control" placeholder="Objetivo" style="height: 100px;" required></textarea>
                <label for="objetivo">Objetivo</label>
              </div>
            </div>

            <!-- Campo Observaciones -->
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="fas fa-eye"></i></span>
              <div class="form-floating flex-grow-1">
                <textarea name="observaciones" id="observaciones" class="form-control" placeholder="Observaciones" style="height: 100px;"></textarea>
                <label for="observaciones">Observaciones</label>
              </div>
            </div>
<!-- Campo Entidad -->
<div class="input-group mb-3">
  <span class="input-group-text"><i class="fas fa-building"></i></span>
  <div class="form-floating flex-grow-1">
    <select class="form-select" id="fkIdEntidad" name="fkIdEntidad" required>
      <option value="" disabled selected>Seleccione una Entidad</option>
      <?php foreach ($entidades as $entidad): ?>
        <option value="<?= $entidad->id ?>"><?= htmlspecialchars($entidad->nombre) ?></option>
      <?php endforeach; ?>
    </select>
    <label for="fkIdEntidad">Entidad</label>
  </div>
</div>

<!-- Campo Investigador -->
<div class="input-group mb-3">
  <span class="input-group-text"><i class="fas fa-user"></i></span>
  <div class="form-floating flex-grow-1">
    <select class="form-select" id="fkIdInvestigador" name="fkIdInvestigador" >
      <option value="" disabled selected>Seleccione un Investigador</option>
      <?php foreach ($investigadores as $investigador): ?>
        <option value="<?= $investigador->id ?>"><?= htmlspecialchars($investigador->nombre) ?></option>
      <?php endforeach; ?>
    </select>
    <label for="fkIdInvestigador">Investigador</label>
  </div>
</div>
      

            <!-- Botón de Guardar -->
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-success shadow-sm">
                <i class="fas fa-save me-2"></i>Guardar Convocatoria
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
