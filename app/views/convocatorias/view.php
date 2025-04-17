<div class="container mt-2">
  <div class="row">
    <div class="col-md-10 offset-md-2"> <!-- Alineado a la derecha -->
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white py-2">
          <h4 class="mb-0">
            Detalles de la Convocatoria
            <a href="/convocatoria/lista" class="btn btn-light btn-sm float-end">
              <i class="fas fa-arrow-left me-1"></i>Volver
            </a>
          </h4>
        </div>
        <div class="card-body">
          <h5 class="fw-bold mb-3"><?= htmlspecialchars($convocatoria->nombre) ?></h5>

          <div class="row g-3">
            <div class="col-md-6">
              <div>
                <label class="form-label fw-semibold">Entidad</label>
                <div class="form-control-plaintext"><?= htmlspecialchars($entidad->nombre ?? 'No especificado') ?></div>
              </div>
            </div>
            <div class="col-md-6">
              <div>
                <label class="form-label fw-semibold">Investigador</label>
                <div class="form-control-plaintext"><?= htmlspecialchars($investigador->nombre ?? 'No especificado') ?></div>
              </div>
            </div>
            <div class="col-md-6">
              <div>
                <label class="form-label fw-semibold">Fecha de Revisión</label>
                <div class="form-control-plaintext"><?= htmlspecialchars($convocatoria->fechaRevision) ?></div>
              </div>
            </div>
            <div class="col-md-6">
              <div>
                <label class="form-label fw-semibold">Fecha de Cierre</label>
                <div class="form-control-plaintext"><?= htmlspecialchars($convocatoria->fechaCierre) ?></div>
              </div>
            </div>
          </div>

          <div class="mt-3">
            <label class="form-label fw-semibold">Descripción</label>
            <div class="form-control-plaintext"><?= nl2br(htmlspecialchars($convocatoria->descripcion)) ?></div>
          </div>

          <div class="mt-3">
            <label class="form-label fw-semibold">Objetivo</label>
            <div class="form-control-plaintext"><?= nl2br(htmlspecialchars($convocatoria->objetivo)) ?></div>
          </div>

          <?php if (!empty($convocatoria->observaciones)): ?>
          <div class="mt-3">
            <label class="form-label fw-semibold">Observaciones</label>
            <div class="form-control-plaintext"><?= nl2br(htmlspecialchars($convocatoria->observaciones)) ?></div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
