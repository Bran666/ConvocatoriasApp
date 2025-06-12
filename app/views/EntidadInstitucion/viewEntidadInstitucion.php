<!-- Contenido Principal -->
<div class="w-100 px-3">
  <div class="card shadow">
    <!-- Cabecera verde -->
    <div class="card-header bg-success text-white">
      <h4 class="mb-0 d-flex justify-content-between align-items-center">
        <span>
          <i class="fas fa-university me-2"></i> Entidades Institución
        </span>
        <a href="/entidadInstitucion/new" class="btn btn-light btn-sm">
          <i class="fas fa-plus me-2"></i> Agregar Nuevo
        </a>
      </h4>
    </div>

    <div class="card-body">
      <?php if (isset($entidadInstituciones) && is_array($entidadInstituciones)): ?>
        <div class="row">
          <?php foreach ($entidadInstituciones as $key => $value): ?>
            <div class="col-12 ">
              <div class="card shadow-sm border border-light">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <div>
                    <i class="fas fa-building me-2 text-secondary"></i>
                   <?= htmlspecialchars($value->nombre) ?>
                  </div>
                  <div class="btn-group">
                    <a href="/entidadInstitucion/view/<?= $value->id ?>" class="btn btn-outline-primary btn-sm">
                      <i class="fas fa-eye me-1"></i> Ver
                    </a>
                    <a href="/entidadInstitucion/edit/<?= $value->id ?>" class="btn btn-outline-success btn-sm">
                      <i class="fas fa-edit me-1"></i> Editar
                    </a>
                    <a href="/entidadInstitucion/delete/<?= $value->id ?>" class="btn btn-outline-danger btn-sm eliminar">
                      <i class="fas fa-trash me-1"></i> Eliminar
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <div class="alert alert-info text-center">
          <i class="fas fa-info-circle me-2"></i>No hay registros disponibles.
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/js/alerta.js"></script>