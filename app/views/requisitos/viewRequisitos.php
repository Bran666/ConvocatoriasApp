<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Requisitos
            <a href="/requisitos/new" class="btn btn-light float-end">
                <i class="fas fa-plus me-2"></i>Agregar Nuevo
            </a>
        </h4>
    </div>
    <div class="card-body">
        <?php foreach ($requisitos as $requisito) : ?>
            <div class="requisito-card">
                <div class="requisito-info"><span class="requisito-label">Nombre:</span> <?= $requisito->nombre ?></div>
                <div class="requisito-info"><span class="requisito-label">Observaciones:</span> <?= $requisito->obervaciones ?></div>
                <div class="requisito-info"><span class="requisito-label">Entidad:</span> <?= $requisito->idEntidad ?></div>
                <div class="requisito-info"><span class="requisito-label">Requisito Selección:</span> <?= $requisito->idRequisitoSeleccion ?></div>
                <div class="text-end">
                    <a href="/requisitos/view/<?= $requisito->id ?>" class="btn btn-transparent btn-info btn-sm">
                        <i class="fas fa-eye me-1"></i> Ver
                    </a>
                    <a href="/requisitos/edit/<?= $requisito->id ?>" class="btn btn-transparent btn-success btn-sm">
                        <i class="fas fa-edit me-1"></i> Editar
                    </a>
                    <a href="/requisitos/delete/<?= $requisito->id ?>" class="btn btn-transparent btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este registro?')">
                        <i class="fas fa-trash me-1"></i> Eliminar
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
