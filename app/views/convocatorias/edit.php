<!-- Contenido Principal -->
<div class="container mt-2">
  <div class="row">
    <div class="col-md-10 offset-md-2">
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white py-2">
          <h4 class="mb-0"> <i class="fas fa-edit me-2"></i>
            Editar Convocatoria
            <a href="/convocatoria/lista" class="btn btn-light btn-sm float-end">
              <i class="fas fa-arrow-left me-1"></i>Volver
            </a>
          </h4>
        </div>
        <div class="card-body">
          <?php if (isset($convocatoria) && !empty($convocatoria)): ?>
            <?php if (is_array($convocatoria)) { $convocatoria = (object)$convocatoria; } ?>
            <form action="/convocatoria/update/<?= $convocatoria->id ?>" method="post">
              <input type="hidden" name="id" value="<?= $convocatoria->id ?>">

              <!-- Nombre -->
              <div class="mb-3">
                <label class="form-label fw-semibold">Nombre</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="fas fa-file-signature"></i>
                  </span>
                  <input type="text" name="nombre" class="form-control" value="<?= htmlspecialchars($convocatoria->nombre) ?>" required>
                </div>
              </div>

              <!-- Descripción -->
              <div class="mb-3">
                <label class="form-label fw-semibold">Descripción</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="fas fa-align-left"></i>
                  </span>
                  <textarea name="descripcion" class="form-control" required><?= htmlspecialchars($convocatoria->descripcion) ?></textarea>
                </div>
              </div>

              <!-- Fechas -->
              <div class="row g-2">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Fecha de Revisión</label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="fas fa-calendar-check"></i>
                      </span>
                      <input type="date" name="fechaRevision" class="form-control" value="<?= $convocatoria->fechaRevision ?>" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Fecha de Cierre</label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <i class="fas fa-calendar-times"></i>
                      </span>
                      <input type="date" name="fechaCierre" class="form-control" value="<?= $convocatoria->fechaCierre ?>" required>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Objetivo -->
              <div class="mb-3">
                <label class="form-label fw-semibold">Objetivo</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="fas fa-bullseye"></i>
                  </span>
                  <textarea name="objetivo" class="form-control" required><?= htmlspecialchars($convocatoria->objetivo) ?></textarea>
                </div>
              </div>

              <!-- Observaciones -->
              <div class="mb-3">
                <label class="form-label fw-semibold">Observaciones</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="fas fa-eye"></i>
                  </span>
                  <textarea name="observaciones" class="form-control"><?= htmlspecialchars($convocatoria->observaciones) ?></textarea>
                </div>
              </div>

              <!-- Entidad -->
              <div class="mb-3">
                <label class="form-label fw-semibold">Entidad</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="fas fa-building"></i>
                  </span>
                  <select name="fkIdEntidad" class="form-select" required>
                    <?php foreach ($entidades as $entidad): ?>
                      <option value="<?= $entidad->id ?>" <?= $entidad->id == $convocatoria->fkIdEntidad ? 'selected' : '' ?>>
                        <?= htmlspecialchars($entidad->nombre) ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <!-- Investigador -->
              <div class="mb-3">
                <label class="form-label fw-semibold">Investigador</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="fas fa-user"></i>
                  </span>
                  <select name="fkIdInvestigador" class="form-select" required>
                    <?php foreach ($investigadores as $investigador): ?>
                      <option value="<?= $investigador->id ?>" <?= $investigador->id == $convocatoria->fkIdInvestigador ? 'selected' : '' ?>>
                        <?= htmlspecialchars($investigador->nombre) ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
                    
              <!-- Botón Guardar -->
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">
                  <i class="fas fa-save me-2"></i> Guardar Cambios
                </button>
              </div>
            </form>
          <?php else: ?>
            <div class="alert alert-danger">
              No se encontró la convocatoria solicitada.
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
