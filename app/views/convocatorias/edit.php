<!-- Contenido Principal -->
<div class="d-flex justify-content-center">
    <div class="card shadow-sm border border-success w-100" style="max-width: 1000px; background-color: #ffffff;">
        <div class="card-header bg-success text-white py-2">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Editar Convocatoria</h5>
                <a href="/convocatoria/lista" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>Volver
                </a>
            </div>
        </div>

        <div class="card-body p-4">
            <form action="/convocatoria/update/<?php echo htmlspecialchars($convocatoria['id']); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($convocatoria['id']); ?>">

                <!-- Campo Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold small">Nombre</label>
                    <input type="text" class="form-control form-control-sm" id="nombre" name="nombre"
                           value="<?php echo htmlspecialchars($convocatoria['nombre']); ?>" required>
                </div>

                <!-- Campo Fecha Revisión -->
                <div class="mb-3">
                    <label for="fechaRevision" class="form-label fw-bold small">Fecha Revisión</label>
                    <input type="date" class="form-control form-control-sm" id="fechaRevision" name="fechaRevision"
                           value="<?php echo htmlspecialchars($convocatoria['fechaRevision'] ?? ''); ?>" required>
                </div>

                <!-- Campo Fecha Cierre -->
                <div class="mb-3">
                    <label for="fechaCierre" class="form-label fw-bold small">Fecha Cierre</label>
                    <input type="date" class="form-control form-control-sm" id="fechaCierre" name="fechaCierre"
                           value="<?php echo htmlspecialchars($convocatoria['fechaCierre'] ?? ''); ?>" required>
                </div>

                <!-- Campo Entidad -->
                <div class="mb-3">
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

                <!-- Campo Investigador -->
                <div class="mb-3">
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

                <!-- Campo Descripción -->
                <div class="mb-3">
                    <label for="descripcion" class="form-label fw-bold small">Descripción</label>
                    <textarea class="form-control form-control-sm" id="descripcion" name="descripcion" rows="3" required><?php echo htmlspecialchars($convocatoria['descripcion']); ?></textarea>
                </div>

                <!-- Campo Objetivo -->
                <div class="mb-3">
                    <label for="objetivo" class="form-label fw-bold small">Objetivo</label>
                    <textarea class="form-control form-control-sm" id="objetivo" name="objetivo" rows="3" required><?php echo htmlspecialchars($convocatoria['objetivo'] ?? ''); ?></textarea>
                </div>

                <!-- Campo Observaciones -->
                <div class="mb-3">
                    <label for="observaciones" class="form-label fw-bold small">Observaciones</label>
                    <textarea class="form-control form-control-sm" id="observaciones" name="observaciones" rows="3"><?php echo htmlspecialchars($convocatoria['observaciones'] ?? ''); ?></textarea>
                </div>

                <!-- Botón -->
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fas fa-save me-1"></i>Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
