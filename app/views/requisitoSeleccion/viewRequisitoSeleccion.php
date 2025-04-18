<!-- Contenido Principal -->
<div class="col-md-10 mx-auto">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h5 class="mb-0 d-flex justify-content-between align-items-center">
                <span>
                    <i class="fas fa-clipboard-check me-2"></i> Requisitos de Selección
                </span>
                <a href="/requisitoSeleccion/new" class="btn btn-light btn-sm">
                    <i class="fas fa-plus me-2"></i> Agregar Nuevo
                </a>
            </h5>
        </div>


        <!-- Cuerpo del contenido -->
        <div class="card-body p-3">
            <?php if (isset($requisitosSeleccion) && is_array($requisitosSeleccion)): ?>
                <div class="row">
                    <?php foreach ($requisitosSeleccion as $key => $value): ?>
                        <div class="col-12 mb-3">
                            <div class="card shadow-sm border border-light">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-clipboard-list me-2 text-secondary"></i>
                                        <?= $value->id ?> - <?= htmlspecialchars($value->nombre) ?>
                                        <span class="text-muted ms-2">(<?= htmlspecialchars($value->tipo_nombre) ?>)</span>
                                    </div>
                                    <div class="btn-group">
                                        <a href="/requisitoSeleccion/view/<?= $value->id ?>" class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-eye me-1"></i> Ver
                                        </a>
                                        <a href="/requisitoSeleccion/edit/<?= $value->id ?>" class="btn btn-outline-success btn-sm">
                                            <i class="fas fa-edit me-1"></i> Editar
                                        </a>
                                        <a href="/requisitoSeleccion/delete/<?= $value->id ?>" class="btn btn-outline-danger btn-sm"
                                           onclick="return confirm('¿Está seguro de eliminar este registro?')">
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
