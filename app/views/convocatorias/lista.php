<!-- Contenido Principal -->
<div class="container py-4">
    <div class="card shadow mx-auto border border-white bg-light" style="max-width: 1000px;"> <!-- Contenedor más blanco -->
        <div class="card-header bg-success text-white"> <!-- Encabezado verde -->
            <h4 class="mb-0 d-flex justify-content-between align-items-center">
                Lista de Convocatorias
                <a href="/convocatoria/init" class="btn btn-light btn-sm">
                    <i class="fas fa-plus me-2"></i> Nueva Convocatoria
                </a>
            </h4>
        </div>

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
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title mb-2">
                                        <i class="fas fa-bullhorn me-2 text-success"></i>
                                        <?php echo htmlspecialchars($convocatoria->nombre); ?>
                                    </h5>
                                    <p class="card-text text-muted small"><?php echo htmlspecialchars($convocatoria->descripcion); ?></p>

                                    <ul class="list-unstyled small mb-3">
                                        <li><strong>Revisión:</strong> <?php echo htmlspecialchars($convocatoria->fechaRevision); ?></li>
                                        <li><strong>Cierre:</strong> <?php echo htmlspecialchars($convocatoria->fechaCierre); ?></li>
                                        <li><strong>Objetivo:</strong> <?php echo htmlspecialchars($convocatoria->objetivo); ?></li>
                                        <li><strong>Entidad:</strong> <?php echo htmlspecialchars($convocatoria->entidad_nombre ?? ''); ?></li>
                                        <li><strong>Investigador:</strong> <?php echo htmlspecialchars($convocatoria->investigador_nombre ?? ''); ?></li>
                                    </ul>

                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="/convocatoria/view/<?php echo $convocatoria->id; ?>" class="btn btn-outline-info btn-sm">
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
