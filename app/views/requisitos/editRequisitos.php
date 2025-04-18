<!-- Contenido Principal -->
<div class="col-md-10 mx-auto mt-2">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">
                <i class="fas fa-edit me-2"></i> Editar Requisito
                <a href="/requisitosCrud/init" class="btn btn-light float-end">
                    <i class="fas fa-arrow-left me-2"></i>Volver
                </a>
            </h4>
        </div>

        <!-- Cuerpo del formulario -->
        <div class="card-body">
            <?php if (isset($error)): ?>
                <div class="alert alert-danger">
                    <i class="fas fa-exclamation-circle me-2"></i> <?= $error ?>
                </div>
            <?php endif; ?>

            <form action="/requisitos/update/<?= $infoReal->id ?>" method="POST">
                <input type="hidden" name="id" value="<?= $infoReal->id ?>">

                <!-- Campo Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">
                        Nombre
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                        <input type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($infoReal->nombre) ?>" class="form-control" required>
                    </div>
                </div>

                <!-- Campo Observaciones -->
                <div class="mb-3">
                    <label for="obervaciones" class="form-label fw-bold">
                        Observaciones
                    </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-comment-dots"></i></span>
                        <textarea name="obervaciones" id="obervaciones" class="form-control" rows="3"><?= htmlspecialchars($infoReal->obervaciones) ?></textarea>
                    </div>
                </div>


                <!-- Campo Entidad -->
                <div class="mb-3">
                    <label for="fkIdEntidad" class="form-label fw-semibold">Entidad</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                        <select name="fkIdEntidad" id="fkIdEntidad" class="form-select" required>
                            <option value="">Seleccione una entidad</option>
                            <?php if (isset($entidades) && is_array($entidades)): ?>
                                <?php foreach ($entidades as $entidad): ?>
                                    <option value="<?= $entidad->id ?>" <?= ($entidad->id == $infoReal->idEntidad) ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($entidad->nombre) ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>

                <!-- Campo Requisito Selección -->
                <div class="mb-3">
                    <label for="idRequisitoSeleccion" class="form-label fw-semibold">Requisito Selección</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-check-circle"></i></span>
                        <select name="idRequisitoSeleccion" id="idRequisitoSeleccion" class="form-select" required>
                            <option value="">Seleccione un requisito</option>
                            <?php if (isset($requisitosSeleccion) && is_array($requisitosSeleccion)): ?>
                                <?php foreach ($requisitosSeleccion as $requisito): ?>
                                    <option value="<?= $requisito->id ?>" <?= ($requisito->id == $infoReal->idRequisitoSeleccion) ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($requisito->nombre) ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>

                <!-- Botón Actualizar -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-2"></i> Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>