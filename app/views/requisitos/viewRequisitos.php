<!-- Contenedor Principal -->
<div class="w-100 px-3">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h4 class="mb-0 fs-5">
                <i class="fas fa-clipboard-list me-2"></i>Requisitos
                <a href="/requisitos/new" class="btn btn-light float-end">
                    <i class="fas fa-plus me-2"></i>Agregar Nuevo
                </a>
            </h4>
        </div>

        <!-- Cuerpo del contenido -->
        <div class="card-body">
            <?php if (isset($requisitos) && !empty($requisitos)): ?>
                <?php foreach ($requisitos as $requisito) : ?>
                    <div class="card mb-3 border border-light shadow-sm bg-white">
                        <div class="card-body d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="mb-1 fs-6 text-muted"> <!-- Letra más pequeña y clara -->
                                    <i class="fas fa-file-alt me-2 text-secondary"></i><?= htmlspecialchars($requisito->nombre) ?>
                                </h6>
                                <small class="text-muted d-block">
                                    <i class="fas fa-comment-dots me-1"></i>Observaciones:
                                    <?= htmlspecialchars($requisito->obervaciones) ?>
                                </small>
                                <small class="text-muted d-block">
                                    <i class="fas fa-building me-1"></i>Entidad:
                                    <?= htmlspecialchars($requisito->nombreEntidad ?? 'No asignada') ?>
                                </small>
                                <small class="text-muted d-block">
                                    <i class="fas fa-check-circle me-1"></i>Requisito Selección:
                                    <?= htmlspecialchars($requisito->nombreRequisitoSeleccion ?? 'No asignado') ?>
                                </small>
                            </div>
                            <div class="btn-group">
                                <a href="/requisitos/view/<?= $requisito->id ?>" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-eye me-1"></i> Ver
                                </a>
                                <a href="/requisitos/edit/<?= $requisito->id ?>" class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-edit me-1"></i> Editar
                                </a>
                                <a href="/requisitos/delete/<?= $requisito->id ?>" class="btn btn-outline-danger btn-sm eliminar">
                                    <i class="fas fa-trash me-1"></i> Eliminar
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle me-2"></i>No hay requisitos registrados en el sistema.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/js/alerta.js"></script>
