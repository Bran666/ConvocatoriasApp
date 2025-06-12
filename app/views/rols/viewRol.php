<div class="w-100 px-3">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Ícono y título juntos -->
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-cog me-2"></i>
                    <h5 class="mb-0">Lista de Roles</h5>
                </div>
                <!-- Botón a la derecha -->
                <a href="/rol/new" class="btn btn-light btn-sm">
                    <i class="fas fa-plus me-2"></i>Nuevo Rol
                </a>
            </div>
        </div>

        <!-- Cuerpo del contenido -->
        <div class="card-body p-3">
            <?php if (isset($roles) && is_array($roles)): ?>
                <div class="row">
                    <?php foreach ($roles as $value): ?>
                        <div class="col-12 ">
                            <div class="card shadow-sm border border-white">
                                <div class="card-body d-flex justify-content-between align-items-center p-2">
                                    <div>
                                        <i class="fas fa-user-tag me-2  text-secondary"></i>
                                        <?= htmlspecialchars($value->nombre) ?>
                                    </div>
                                    <div class="btn-group btn-group-sm">
                                        <a href="/rol/view/<?= $value->id ?>" class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-eye me-1"></i> Ver
                                        </a>
                                        <a href="/rol/edit/<?= $value->id ?>" class="btn btn-outline-success btn-sm">
                                            <i class="fas fa-edit me-1"></i> Editar
                                        </a>
                                        <a href="/rol/delete/<?= $value->id ?>" class="btn btn-outline-danger btn-sm eliminar">
                                            <i class="fas fa-trash me-1"></i> Eliminar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="alert alert-info mb-0 text-center">
                    <i class="fas fa-info-circle me-2"></i> No hay roles registrados.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/js/alerta.js"></script>