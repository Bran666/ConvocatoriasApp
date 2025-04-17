<!-- Contenido Principal -->
<div class="col-md-10 mx-auto">
  <div class="card shadow-sm border border-light">
    <!-- Encabezado verde -->
    <div class="card-header bg-success text-white py-2">
      <div class="d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Líneas</h5>
        <a href="/linea/new" class="btn btn-light btn-sm">
          <i class="fas fa-plus me-2"></i>Nuevo
        </a>
      </div>
    </div>

    <!-- Cuerpo de la tarjeta -->
    <div class="card-body">
      <?php if (isset($lineas) && is_array($lineas)): ?>
        <div class="row g-3">
          <?php foreach ($lineas as $key => $value): ?>
            <div class="col-12">
              <div class="card border-light bg-white shadow-sm">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h6 class="card-title mb-1 fw-bold"><?= $value->id ?> - <?= $value->nombre ?></h6>
                      <p class="card-text mb-0 text-muted"><?= $value->descripcion ?></p>
                    </div>
                    <div class="btn-group">
                      <a href="/linea/view/<?= $value->id ?>" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-eye me-1"></i> Ver
                      </a>
                      <a href="/linea/edit/<?= $value->id ?>" class="btn btn-outline-success btn-sm">
                        <i class="fas fa-edit me-1"></i> Editar
                      </a>
                      <a href="/linea/delete/<?= $value->id ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta línea?');">
                        <i class="fas fa-trash me-1"></i> Eliminar
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
