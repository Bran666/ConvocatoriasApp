<!-- Contenido Principal -->
<div class="col-md-10">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0 d-flex justify-content-between align-items-center">
                Lista de Roles
                <a href="/rol/new" class="btn btn-light btn-sm">
                    <i class="fas fa-plus me-2"></i> Nuevo Rol
                </a>
            </h4>
        </div>

        <div class="card-body">
            <?php if (isset($roles) && is_array($roles)): ?>
                <div class="row">
                    <?php foreach ($roles as $value): ?>
                        <div class="col-12 mb-3"> <!-- Contenedor individual por cada rol -->
                            <div class="card shadow-sm">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fas fa-user-tag me-2 text-primary"></i>
                                        <strong><?= htmlspecialchars($value->nombre) ?></strong>
                                    </div>
                                    <div class="btn-group">
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
                <div class="alert alert-info">
                    <i class="fas fa-info-circle me-2"></i> No hay roles registrados.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
