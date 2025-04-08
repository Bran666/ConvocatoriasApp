<!-- Contenedor Principal -->
<div class="col-md-10 mx-auto mt-4">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">
                Requisitos
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
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1 text-success"> <?= htmlspecialchars($requisito->nombre) ?></h6>
                                <small class="text-muted"> Observaciones: <?= $requisito->obervaciones ?></small><br>
                                <small class="text-muted"> Entidad: <?= htmlspecialchars($requisito->nombreEntidad ?? 'No asignada') ?></small><br>
                                <small class="text-muted"> Requisito Selección: <?= htmlspecialchars($requisito->nombreRequisitoSeleccion ?? 'No asignado') ?></small>
                            </div>
                            <div class="btn-group">
                                <a href="/requisitos/view/<?= $requisito->id ?>" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-eye me-1"></i> Ver
                                </a>
                                <a href="/requisitos/edit/<?= $requisito->id ?>" class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-edit me-1"></i> Editar
                                </a>
                                <a href="/requisitos/delete/<?= $requisito->id ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este registro?')">
                                    <i class="fas fa-trash me-1"></i> Eliminar
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="alert alert-info">
                    No hay requisitos registrados en el sistema.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
