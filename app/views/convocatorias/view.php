<div class="container mt-4" style="max-width: 800px; margin: 0 auto;">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white py-2">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Detalles de la Convocatoria</h5>
                <a href="/convocatoria/lista" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>Volver
                </a>
            </div>
        </div>
        <div class="card-body p-3">
            <h4 class="mb-3"><?= htmlspecialchars($convocatoria->nombre) ?></h4>
            
            <div class="row g-2">
                <div class="col-md-6">
                    <div class="mb-2">
                        <strong>Entidad:</strong>
                        <p class="mb-0"><?= htmlspecialchars($entidad->nombre ?? 'No especificado') ?></p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-2">
                        <strong>Investigador:</strong>
                        <p class="mb-0"><?= htmlspecialchars($investigador->nombre ?? 'No especificado') ?></p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-2">
                        <strong>Fecha de Revisión:</strong>
                        <p class="mb-0"><?= htmlspecialchars($convocatoria->fechaRevision) ?></p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-2">
                        <strong>Fecha de Cierre:</strong>
                        <p class="mb-0"><?= htmlspecialchars($convocatoria->fechaCierre) ?></p>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <strong>Descripción:</strong>
                <p class="mb-2"><?= nl2br(htmlspecialchars($convocatoria->descripcion)) ?></p>
            </div>

            <div class="mt-3">
                <strong>Objetivo:</strong>
                <p class="mb-2"><?= nl2br(htmlspecialchars($convocatoria->objetivo)) ?></p>
            </div>

            <?php if (!empty($convocatoria->observaciones)): ?>
            <div class="mt-3">
                <strong>Observaciones:</strong>
                <p class="mb-0"><?= nl2br(htmlspecialchars($convocatoria->observaciones)) ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>