<div class="container py-4">
    <div class="card shadow-lg">
        <div class="card-header bg-success bg-opacity-75 d-flex justify-content-between align-items-center">
            <div>
                <h2 class="card-title mb-1">Requisitos</h2>
                <p class="card-text text-muted">Gestión de documentos y requisitos necesarios</p>
            </div>
            <span class="badge bg-success bg-opacity-75">Progreso: 0%</span>
        </div>

        <div class="card-body">
            <?php if (isset($error)): ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <?php if (isset($tipos) && !empty($tipos)): ?>
                <ul class="nav nav-tabs mb-3" id="requisitosTab" role="tablist">
                    <?php
                    $active = true;
                    foreach ($tipos as $index => $tipo): ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo $active ? 'active' : ''; ?>"
                                id="tipo-<?php echo $tipo->id; ?>-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#tipo-<?php echo $tipo->id; ?>"
                                type="button"
                                role="tab">
                                <?php echo htmlspecialchars($tipo->nombre); ?>
                            </button>
                        </li>
                    <?php
                        $active = false;
                    endforeach; ?>
                </ul>

                <div class="tab-content" id="requisitosTabContent">
                    <?php
                    $active = true;
                    foreach ($tipos as $tipo): ?>
                        <div class="tab-pane fade <?php echo $active ? 'show active' : ''; ?>"
                            id="tipo-<?php echo $tipo->id; ?>"
                            role="tabpanel">

                            <?php if (isset($requisitosPorTipo[$tipo->id]) && !empty($requisitosPorTipo[$tipo->id])): ?>
                                <div class="accordion" id="accordion-<?php echo $tipo->id; ?>">
                                    <?php foreach ($categorias as $categoria => $titulo): ?>
                                        <!-- Categoría Section -->
                                        <div class="accordion-item mt-3">
                                            <h2 class="accordion-header" id="heading-<?php echo $tipo->id; ?>-<?php echo $categoria; ?>">
                                                <button class="accordion-button bg-success bg-opacity-10 text-success"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-<?php echo $tipo->id; ?>-<?php echo $categoria; ?>">
                                                    <?php echo $titulo; ?>
                                                </button>
                                            </h2>
                                            <div id="collapse-<?php echo $tipo->id; ?>-<?php echo $categoria; ?>"
                                                class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                    <?php
                                                    $requisitosCategoria = array_filter($requisitosPorTipo[$tipo->id], function ($req) use ($categoria) {
                                                        return $req->categoria === $categoria;
                                                    });

                                                    if (!empty($requisitosCategoria)):
                                                        foreach ($requisitosCategoria as $requisito): ?>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input"
                                                                    type="checkbox"
                                                                    id="requisito-<?php echo $requisito->id; ?>">
                                                                <label class="form-check-label"
                                                                    for="requisito-<?php echo $requisito->id; ?>">
                                                                    <?php echo htmlspecialchars($requisito->nombre); ?>
                                                                    <?php if (!empty($requisito->descripcion)): ?>
                                                                        <small class="d-block text-muted">
                                                                            <?php echo htmlspecialchars($requisito->descripcion); ?>
                                                                        </small>
                                                                    <?php endif; ?>
                                                                </label>
                                                            </div>
                                                        <?php endforeach;
                                                    else: ?>
                                                        <p class="text-muted">No hay requisitos en esta categoría.</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Requisitos específicos para <?php echo htmlspecialchars($tipo->nombre); ?></h5>
                                        <p class="card-text text-muted">No hay requisitos definidos para este tipo.</p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php
                        $active = false;
                    endforeach; ?>
                </div>
            <?php else: ?>
                <div class="alert alert-info">
                    No hay tipos de requisitos definidos en el sistema. Por favor, contacte al administrador.
                </div>
            <?php endif; ?>
        </div>

        <div class="card-footer d-flex justify-content-between bg-light">
            <div>
                <a href="/menu/init" class="btn btn-outline-secondary">Cancelar</a>
                <a href="/menu/init" class="btn btn-outline-primary ms-2">Volver al Menú</a>
            </div>
            <button class="btn btn-success bg-opacity-75" id="btnGuardar">Guardar</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Basic progress calculation
    function calculateProgress() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        const totalCheckboxes = checkboxes.length;
        const checkedCheckboxes = Array.from(checkboxes).filter(cb => cb.checked).length;
        const progress = totalCheckboxes > 0 ? Math.round((checkedCheckboxes / totalCheckboxes) * 100) : 0;

        document.querySelector('.badge').textContent = `Progreso: ${progress}%`;
    }

    // Add event listeners to checkboxes
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', calculateProgress);
    });

    // Save button functionality
    document.getElementById('btnGuardar').addEventListener('click', function() {
        // Collect all checked requirements
        const checkedRequisitos = [];
        document.querySelectorAll('input[type="checkbox"]:checked').forEach(checkbox => {
            const requisitoId = checkbox.id.replace('requisito-', '');
            checkedRequisitos.push(requisitoId);
        });

        // Send to server via AJAX
        fetch('/requisitos/guardarChequeo', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    requisitos: checkedRequisitos
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Requisitos guardados correctamente');
                } else {
                    alert('Error al guardar los requisitos');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error al guardar los requisitos');
            });
    });
</script>