<!-- Contenido Principal -->
<!-- Contenido Principal -->
<div class="col-md-10 mx-auto mt-2">
    <div class="card shadow border border-light bg-white">
        <!-- Encabezado verde con ícono y botón a la derecha -->
        <div class="card-header bg-success text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <i class="fas fa-list-alt me-2"></i>
                    <h5 class="mb-0">Lista de Convocatorias</h5>
                </div>
                <a href="/convocatoria/init" class="btn btn-light btn-sm">
                    <i class="fas fa-plus me-2"></i> Nueva Convocatoria
                </a>
            </div>
        </div>


        <!-- Cuerpo del card -->
        <div class="card-body p-3">
            <?php if (isset($error)): ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($convocatorias)): ?>
                <div class="row">
                    <?php foreach ($convocatorias as $convocatoria): ?>
                        <div class="col-12 mb-3">
                            <div class="card shadow-sm border border-light">
                                <div class="card-body">
                                    <h5 class="card-title mb-2">
                                        <i class="fas fa-bullhorn me-2 text-success"></i>
                                        <?php echo htmlspecialchars($convocatoria->nombre); ?>
                                    </h5>
                                    <p class="card-text text-muted small"><?php echo htmlspecialchars($convocatoria->descripcion); ?></p>

                                    <ul class="list-unstyled small mb-3">
                                        <li><i class="fas fa-calendar-check me-2 text-secondary"></i>Revisión: <?php echo htmlspecialchars($convocatoria->fechaRevision); ?></li>
                                        <li><i class="fas fa-calendar-times me-2 text-secondary"></i>Cierre: <?php echo htmlspecialchars($convocatoria->fechaCierre); ?></li>
                                        <li><i class="fas fa-bullseye me-2 text-secondary"></i>Objetivo: <?php echo htmlspecialchars($convocatoria->objetivo); ?></li>
                                        <li><i class="fas fa-building me-2 text-secondary"></i>Entidad: <?php echo htmlspecialchars($convocatoria->entidad_nombre ?? ''); ?></li>
                                        <li><i class="fas fa-user me-2 text-secondary"></i>Investigador: <?php echo htmlspecialchars($convocatoria->investigador_nombre ?? ''); ?></li>
                                    </ul>

                                    <div class="d-flex justify-content-end">
                                        <div class="btn-group" role="group" aria-label="Acciones">
                                            <a href="/convocatoria/view/<?php echo $convocatoria->id ?>" class="btn btn-outline-primary btn-sm">
                                                <i class="fas fa-eye me-1"></i> Ver
                                            </a>
                                            <a href="/convocatoria/edit/<?php echo $convocatoria->id; ?>" class="btn btn-outline-success btn-sm">
                                                <i class="fas fa-edit me-1"></i> Editar
                                            </a>
                                            <a href="/convocatoria/delete/<?php echo $convocatoria->id; ?>"
                                               class="btn btn-outline-danger btn-sm"
                                               onclick="return confirm('¿Estás seguro de que deseas eliminar esta convocatoria?');">
                                                <i class="fas fa-trash me-1"></i> Eliminar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="alert alert-info">
                    <i class="fas fa-info-circle me-2"></i> No hay convocatorias disponibles.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
