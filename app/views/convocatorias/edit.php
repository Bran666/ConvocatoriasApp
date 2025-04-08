<div class="container mt-4" style="max-width: 800px; margin: 0 auto;">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white py-2">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Editar Convocatoria</h5>
                <a href="/convocatoria/lista" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>Volver
                </a>
            </div>
        </div>
        <div class="card-body p-3">
            <?php if (isset($convocatoria) && !empty($convocatoria)): ?>
            <?php 
            // Debugging: Check if $convocatoria is an array or object
            if (is_array($convocatoria)) {
                $convocatoria = (object)$convocatoria;
            }
            ?>
            <form action="/convocatoria/update/<?= $convocatoria->id ?>" method="post">
                <input type="hidden" name="id" value="<?= $convocatoria->id ?>">
                
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" value="<?= htmlspecialchars($convocatoria->nombre) ?>" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea name="descripcion" class="form-control" required><?= htmlspecialchars(is_array($convocatoria) ? $convocatoria['descripcion'] : $convocatoria->descripcion) ?></textarea>
                </div>
                
                <div class="row g-2">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Fecha de Revisión</label>
                            <input type="date" name="fechaRevision" class="form-control" value="<?= is_array($convocatoria) ? $convocatoria['fechaRevision'] : $convocatoria->fechaRevision ?>" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Fecha de Cierre</label>
                            <input type="date" name="fechaCierre" class="form-control" value="<?= is_array($convocatoria) ? $convocatoria['fechaCierre'] : $convocatoria->fechaCierre ?>" required>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Objetivo</label>
                    <textarea name="objetivo" class="form-control" required><?= htmlspecialchars(is_array($convocatoria) ? $convocatoria['objetivo'] : $convocatoria->objetivo) ?></textarea>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Observaciones</label>
                    <textarea name="observaciones" class="form-control"><?= htmlspecialchars(is_array($convocatoria) ? $convocatoria['observaciones'] : $convocatoria->observaciones) ?></textarea>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Entidad</label>
                    <select name="fkIdEntidad" class="form-select" required>
                        <?php foreach ($entidades as $entidad): ?>
                        <option value="<?= $entidad->id ?>" <?= $entidad->id == (is_array($convocatoria) ? $convocatoria['fkIdEntidad'] : $convocatoria->fkIdEntidad) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($entidad->nombre) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Investigador</label>
                    <select name="fkIdInvestigador" class="form-select" required>
                        <?php foreach ($investigadores as $investigador): ?>
                        <option value="<?= $investigador->id ?>" <?= $investigador->id == (is_array($convocatoria) ? $convocatoria['fkIdInvestigador'] : $convocatoria->fkIdInvestigador) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($investigador->nombre) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
            </form>
            <?php else: ?>
            <div class="alert alert-danger">
                No se encontró la convocatoria solicitada.
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>