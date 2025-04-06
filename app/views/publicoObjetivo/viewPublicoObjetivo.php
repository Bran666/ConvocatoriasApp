<!-- Contenido Principal -->
<div class="col-md-10 mx-auto">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Público Objetivo
                <a href="/publicoObjetivo/new" class="btn btn-light float-end">
                    <i class="fas fa-plus me-2"></i>Agregar Nuevo
                </a>
            </h4>
        </div>
        <div class="card-body">
            <?php foreach ($publicosObjetivo as $publicoObjetivo) : ?>
                <div class="card mb-3 border border-secondary shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1"><?= htmlspecialchars($publicoObjetivo->nombre) ?></h5>
                            <small class="text-muted">ID: <?= $publicoObjetivo->id ?></small>
                        </div>
                        <div class="btn-group">
                            <a href="/publicoObjetivo/view/<?= $publicoObjetivo->id ?>" class="btn btn-outline-primary btn-sm custom-hover-blue">
                                <i class="fas fa-eye me-1"></i> Ver
                            </a>
                            <a href="/publicoObjetivo/edit/<?= $publicoObjetivo->id ?>" class="btn btn-outline-success btn-sm custom-hover-green">
                                <i class="fas fa-edit me-1"></i> Editar
                            </a>
                            <a href="/publicoObjetivo/delete/<?= $publicoObjetivo->id ?>" class="btn btn-outline-danger btn-sm custom-hover-red" onclick="return confirm('¿Está seguro de eliminar este registro?')">
                                <i class="fas fa-trash me-1"></i> Eliminar
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

