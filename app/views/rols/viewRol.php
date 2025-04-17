<!-- Contenido Principal -->
<div class="col-md-10 mx-auto">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h5 class="mb-0 d-flex justify-content-between align-items-center">
                Lista de Roles
                <a href="/rol/new" class="btn btn-light btn-sm">
                    <i class="fas fa-plus me-2"></i>Nuevo Rol
                </a>
            </h5>
        </div>

        <!-- Cuerpo del contenido -->
        <div class="card-body p-3">
            <?php if (isset($roles) && is_array($roles)): ?>
                <div class="row">
                    <?php foreach ($roles as $value): ?>
                        <div class="col-12 mb-2">
                            <div class="card shadow-sm border border-white">
                                <div class="card-body d-flex justify-content-between align-items-center p-2">
                                    <div>
                                        <i class="fas fa-user-tag me-2 text-success"></i>
                                        <strong><?= htmlspecialchars($value->nombre) ?></strong>
                                    </div>
                                    <div class="btn-group btn-group-sm">
                                        <a href="/rol/view/<?= $value->id ?>" class="btn btn-outline-info btn-sm">
                                            <i class="fas fa-eye me-1"></i> Ver
                                        </a>
                                        <a href="/rol/edit/<?= $value->id ?>" class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-edit me-1"></i> Editar
                                        </a>
                                        <a href="/rol/delete/<?= $value->id ?>" class="btn btn-outline-danger btn-sm"
                                           onclick="return confirm('¿Está seguro de que desea eliminar este rol?');">
                                            <i class="fas fa-trash me-1"></i> Eliminar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="alert alert-info mb-0">
                    <i class="fas fa-info-circle me-2"></i> No hay roles registrados.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
