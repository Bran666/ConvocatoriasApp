<!-- Contenido Principal -->
<div class="col-md-10 ps-4">
    <div class="card shadow" style="max-width: 800px; margin-left: auto; margin-right: 0;">
        <div class="card-header bg-primary text-white py-2">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Editar Convocatoria</h5>
                <a href="/convocatoria/lista" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>Volver
                </a>
            </div>
        </div>
        <div class="card-body p-3">
            <form action="/convocatoria/update/<?php echo htmlspecialchars($convocatoria['id']); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($convocatoria['id']); ?>">
                
                <div class="row g-3">
                    <!-- Primera columna -->
                    <div class="col-md-6">
                        <div class="mb-2">
                            <label for="nombre" class="form-label fw-bold small">Nombre</label>
                            <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" 
                                   value="<?php echo htmlspecialchars($convocatoria['nombre']); ?>" required>
                        </div>

                        <div class="mb-2">
                            <label for="fechaRevision" class="form-label fw-bold small">Fecha Revisión</label>
                            <input type="date" class="form-control form-control-sm" id="fechaRevision" name="fechaRevision" 
                                   value="<?php echo htmlspecialchars($convocatoria['fechaRevision'] ?? ''); ?>" required>
                        </div>

                        <div class="mb-2">
                            <label for="fechaCierre" class="form-label fw-bold small">Fecha Cierre</label>
                            <input type="date" class="form-control form-control-sm" id="fechaCierre" name="fechaCierre" 
                                   value="<?php echo htmlspecialchars($convocatoria['fechaCierre'] ?? ''); ?>" required>
                        </div>

                        <div class="mb-2">
                            <label for="fkIdEntidad" class="form-label fw-bold small">Entidad</label>
                            <select class="form-select form-select-sm" id="fkIdEntidad" name="fkIdEntidad" required>
                                <?php foreach ($entidades as $entidad): ?>
                                    <option value="<?php echo $entidad->id; ?>" 
                                            <?php echo ($entidad->id == $convocatoria['fkIdEntidad']) ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($entidad->nombre); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Segunda columna -->
                    <div class="col-md-6">
                        <div class="mb-2">
                            <label for="fkIdInvestigador" class="form-label fw-bold small">Investigador</label>
                            <select class="form-select form-select-sm" id="fkIdInvestigador" name="fkIdInvestigador" required>
                                <?php foreach ($investigadores as $investigador): ?>
                                    <option value="<?php echo $investigador->id; ?>" 
                                            <?php echo ($investigador->id == $convocatoria['fkIdInvestigador']) ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($investigador->nombre); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="descripcion" class="form-label fw-bold small">Descripción</label>
                            <textarea class="form-control form-control-sm" id="descripcion" name="descripcion" rows="2" required>
                                <?php echo htmlspecialchars($convocatoria['descripcion']); ?>
                            </textarea>
                        </div>

                        <div class="mb-2">
                            <label for="objetivo" class="form-label fw-bold small">Objetivo</label>
                            <textarea class="form-control form-control-sm" id="objetivo" name="objetivo" rows="2" required>
                                <?php echo htmlspecialchars($convocatoria['objetivo'] ?? ''); ?>
                            </textarea>
                        </div>

                        <div class="mb-2">
                            <label for="observaciones" class="form-label fw-bold small">Observaciones</label>
                            <textarea class="form-control form-control-sm" id="observaciones" name="observaciones" rows="2">
                                <?php echo htmlspecialchars($convocatoria['observaciones'] ?? ''); ?>
                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fas fa-save me-1"></i>Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>