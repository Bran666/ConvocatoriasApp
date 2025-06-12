<div class="w-100 px-3">
  <div class="card shadow-sm border border-light">
    <!-- Encabezado verde -->
    <div class="card-header bg-success text-white py-2">
      <div class="row align-items-center">
        <!-- Título -->
        <div class="col">
          <h5 class="mb-0">
            <i class="fas fa-stream me-2"></i> Líneas
          </h5>
        </div>
        <!-- Botón a la derecha -->
        <div class="col-auto">
          <a href="/linea/new" class="btn btn-light btn-sm">
            <i class="fas fa-plus me-1"></i>Nuevo
          </a>
        </div>
      </div>
    </div>
    <!-- Cuerpo de la tarjeta -->
    <div class="card-body">
      <?php if (isset($lineas) && is_array($lineas) && count($lineas) > 0): ?>
        <div class="row ">
          <?php foreach ($lineas as $key => $value): ?>
            <div class="col-12">
             <div class="card border-dark bg-white shadow-sm">

                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h6 class="card-title mb-1">
                        <i class="fas fa-tag me-2 text-secondary"></i><?= $value->nombre ?>
                      </h6>
                      <p class="card-text mb-0 text-muted">
                        <i class="fas fa-align-left me-1 text-muted"></i> <?= $value->descripcion ?>
                      </p>
                    </div>
                    <div class="btn-group">
                      <a href="/linea/view/<?= $value->id ?>" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-eye me-1"></i> Ver
                      </a>
                      <a href="/linea/edit/<?= $value->id ?>" class="btn btn-outline-success btn-sm">
                        <i class="fas fa-edit me-1"></i> Editar
                      </a>
                      <a href="/linea/delete/<?= $value->id ?>" class="btn btn-outline-danger btn-sm eliminar">
                        <i class="fas fa-trash me-1"></i> Eliminar
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <div class="alert alert-info text-center">
          <i class="fas fa-info-circle me-2"></i>No hay líneas registradas por el momento.
        </div>
      <?php endif; ?>
    </div> <!-- CIERRE DE card-body -->
  </div> <!-- CIERRE DE card -->
</div> <!-- CIERRE DE w-100 -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/js/alerta.js"></script>
