<div class="w-100 px-3">
  <div class="card shadow">
    <!-- Cabecera verde con ícono -->
    <div class="card-header bg-success text-white">
      <h5 class="mb-0 d-flex justify-content-between align-items-center">
        <span><i class="fas fa-tags me-2"></i>Tipo</span>
        <a href="/tipo/new" class="btn btn-light btn-sm">
        <i class="fas fa-plus me-2"></i> Agregar Nuevo
        </a>
      </h5>
    </div>


        <div class="card-body p-3">
            <?php if (isset($tipos) && is_array($tipos)): ?>
                <div class="row">
                    <?php foreach ($tipos as $key => $value): ?>
                        <div class="col-12 ">
                            <div class="card shadow-sm border border-light">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-tag me-2 text-secondary"></i>
                                         <?= htmlspecialchars($value->nombre) ?>
                                    </div>
                                    <div class="btn-group">
                                        <a href="/tipo/view/<?= $value->id ?>" class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-eye me-1"></i> Ver
                                        </a>
                                        <a href="/tipo/edit/<?= $value->id ?>" class="btn btn-outline-success btn-sm">
                                            <i class="fas fa-edit me-1"></i> Editar
                                        </a>
                                        <a href="/tipo/delete/<?= $value->id ?>" class="btn btn-outline-danger btn-sm eliminar">
                                            <i class="fas fa-trash me-1"></i> Eliminar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="alert alert-info">
                    <i class="fas fa-info-circle me-2"></i> No hay registros disponibles.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/js/alerta.js"></script>