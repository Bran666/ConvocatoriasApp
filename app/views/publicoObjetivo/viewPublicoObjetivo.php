<!-- Contenido Principal -->
<div class="w-100 px-3">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h4 class="mb-0 fs-5"> <!-- Reducido el tamaño de la fuente -->
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
                    <div class="card mb-1 border border-light shadow-sm bg-white">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1 fs-6 text-muted"> <!-- Tamaño de fuente más pequeño y color más suave -->
                                    <i class="fas fa-users me-2 text-secondary"></i><?= htmlspecialchars($publicoObjetivo->nombre) ?>
                                </h5>
                             
                            </div>
                            <div class="btn-group">
                                <a href="/publicoObjetivo/view/<?= $publicoObjetivo->id ?>" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-eye me-1"></i> Ver
                                </a>
                                <a href="/publicoObjetivo/edit/<?= $publicoObjetivo->id ?>" class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-edit me-1"></i> Editar
                                </a>
                                <a href="/publicoObjetivo/delete/<?= $publicoObjetivo->id ?>" class="btn btn-outline-danger btn-sm eliminar">
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/js/alerta.js"></script>
