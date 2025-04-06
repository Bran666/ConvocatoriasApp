<!-- Contenido Principal -->
<div class="container py-4"> <!-- Contenedor Bootstrap centrado -->
    <div class="card shadow mx-auto" style="max-width: 1000px;">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h4 class="mb-0 d-flex justify-content-between align-items-center">
                Requisitos de Selección
                <a href="/requisitoSeleccion/new" class="btn btn-light btn-sm">
                    <i class="fas fa-plus me-2"></i> Agregar Nuevo
                </a>
            </h4>
        </div>

        <div class="card-body">
            <?php if (isset($requisitosSeleccion) && is_array($requisitosSeleccion)): ?>
                <div class="row">
                    <?php foreach ($requisitosSeleccion as $key => $value): ?>
                        <div class="col-12 mb-3"> <!-- Ocupa toda la fila -->
                            <div class="card shadow-sm border border-light"> <!-- Borde más claro -->
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-clipboard-list me-2 text-success"></i>
                                        <strong><?= $value->id ?> - <?= htmlspecialchars($value->nombre) ?></strong>
                                        <span class="text-muted ms-2">(<?= htmlspecialchars($value->tipo_nombre) ?>)</span>
                                    </div>
                                    <div class="btn-group">
                                        <a href="/requisitoSeleccion/view/<?= $value->id ?>" class="btn btn-outline-info btn-sm">
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