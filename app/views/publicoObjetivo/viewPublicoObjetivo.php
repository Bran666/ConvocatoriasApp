<!-- Contenido Principal -->
<div class="col-md-10 mx-auto">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">
                <i class="fas fa-bullseye me-2"></i>Público Objetivo
                <a href="/publicoObjetivo/new" class="btn btn-light float-end">
                    <i class="fas fa-plus me-2"></i>Agregar Nuevo
                </a>
            </h4>
        </div>

        <!-- Cuerpo -->
        <div class="card-body">
            <?php if (!empty($publicosObjetivo)): ?>
                <?php foreach ($publicosObjetivo as $publicoObjetivo) : ?>
                    <div class="card mb-3 border border-light shadow-sm bg-white">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">
                                    <i class="fas fa-users me-2 text-secondary"></i><?= htmlspecialchars($publicoObjetivo->nombre) ?>
                                </h5>
                                <small class="text-muted">
                                    <i class="fas fa-id-badge me-1"></i>ID: <?= $publicoObjetivo->id ?>
                                </small>
                            </div>
                            <div class="btn-group">
                                <a href="/publicoObjetivo/view/<?= $publicoObjetivo->id ?>" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-eye me-1"></i> Ver
                                </a>
                                <a href="/publicoObjetivo/edit/<?= $publicoObjetivo->id ?>" class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-edit me-1"></i> Editar
                                </a>
                                <a href="/publicoObjetivo/delete/<?= $publicoObjetivo->id ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este registro?')">
                                    <i class="fas fa-trash me-1"></i> Eliminar
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle me-2"></i>No hay registros de público objetivo aún.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
