<div class="container  py-0">
    <div class="flip-container" id="flipCard">
        <div class="flipper">


            <div class="container py-1">
                <div class="card shadow-lg border-0 rounded-4">
                    <!-- Encabezado verde estilo success -->
                    <div class="card-header p-4 rounded-top-4 d-flex justify-content-between align-items-center"
                        style="background-color: #198754; color: white; box-shadow: inset 0 -2px 8px rgba(0, 0, 0, 0.2);">

                        <!-- Título -->
                        <div>
                            <h2 class="fs-3 fw-bold mb-1" style="letter-spacing: 0.5px;">Requisitos</h2>
                            <p class="text-white mb-0 fs-7" style="opacity: 0.9;">Gestión documental</p>
                        </div>

                        <!-- Barra de progreso -->
                        <div class="text-end">
                            <div class="progress rounded-pill mb-2" style="height: 10px; width: 160px; background-color: rgba(255, 255, 255, 0.4);">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 0%;"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="badge bg-white text-success fw-semibold rounded-pill px-3 py-1 fs-7 shadow-sm">
                                <span id="progress-value">0%</span> completado
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <!-- Verifica si hay tipos -->
                        <?php if (isset($tipos) && ! empty($tipos)): ?>
                            <ul class="nav nav-tabs mb-3" id="requisitosTab" role="tablist">
                                <?php $active = true;
                                foreach ($tipos as $index => $tipo): ?>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link                                                                <?php echo $active ? 'active' : ''; ?>"
                                            id="tipo-<?php echo $tipo->id; ?>-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#tipo-<?php echo $tipo->id; ?>"
                                            type="button" role="tab">
                                            <?php echo htmlspecialchars($tipo->nombre); ?>
                                        </button>
                                    </li>
                                <?php $active = false;
                                endforeach; ?>
                            </ul>

                            <div class="tab-content" id="requisitosTabContent">
                                <?php $active = true;
                                foreach ($tipos as $tipo): ?>
                                    <div class="tab-pane fade<?php echo $active ? 'show active' : ''; ?>" id="tipo-<?php echo $tipo->id; ?>" role="tabpanel">
                                        <?php if (! empty($requisitosPorTipo[$tipo->id])): ?>
                                            <div class="accordion" id="accordion-<?php echo $tipo->id; ?>">
                                                <?php foreach ($categorias as $categoria => $titulo): ?>
                                                    <div class="accordion-item border-0 shadow-sm rounded-3 mb-3">
                                                        <h2 class="accordion-header" id="heading-<?php echo $tipo->id; ?>-<?php echo $categoria; ?>">
                                                            <button class="accordion-button collapsed fw-semibold                                                                                                                  <?php echo in_array($titulo, ['Administrativos', 'Documentación', 'Financieros']) ? 'bg-success-subtle' : 'bg-white'; ?>"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse-<?php echo $tipo->id; ?>-<?php echo $categoria; ?>"
                                                                aria-expanded="false"
                                                                aria-controls="collapse-<?php echo $tipo->id; ?>-<?php echo $categoria; ?>">
                                                                <i class="bi bi-folder me-2"></i> <?php echo $titulo; ?>
                                                            </button>
                                                        </h2>
                                                        <div id="collapse-<?php echo $tipo->id; ?>-<?php echo $categoria; ?>"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#accordion-<?php echo $tipo->id; ?>">
                                                            <div class="accordion-body bg-light">
                                                                <?php
                                                                $requisitosCategoria = array_filter($requisitosPorTipo[$tipo->id], function ($req) use ($categoria) {
                                                                    return $req->categoria === $categoria;
                                                                });

                                                                if (! empty($requisitosCategoria)):
                                                                    foreach ($requisitosCategoria as $requisito): ?>
                                                                        <div class="form-check mb-3 p-3 bg-white rounded-3 d-flex align-items-start shadow-sm requisito-item">
                                                                            <input class="form-check-input me-3 mt-1" type="checkbox" id="requisito-<?php echo $requisito->id; ?>">
                                                                            <label class="form-check-label w-100" for="requisito-<?php echo $requisito->id; ?>">
                                                                                <span class="fw-semibold d-block"><?php echo htmlspecialchars($requisito->nombre); ?></span>
                                                                                <?php if (! empty($requisito->descripcion)): ?>
                                                                                    <small class="text-muted d-block mt-1"><?php echo htmlspecialchars($requisito->descripcion); ?></small>
                                                                                <?php endif; ?>
                                                                            </label>
                                                                        </div>
                                                                    <?php endforeach;
                                                                else: ?>
                                                                    <div class="text-center py-4 text-muted">
                                                                        <i class="bi bi-exclamation-circle fs-1"></i>
                                                                        <p class="mt-3">No hay requisitos en esta categoría.</p>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php else: ?>
                                            <div class="card border-0 shadow-sm rounded-4 text-center">
                                                <div class="card-body py-5">
                                                    <i class="bi bi-file-earmark-x fs-1 text-muted mb-3"></i>
                                                    <h5 class="card-title">Requisitos específicos para <?php echo htmlspecialchars($tipo->nombre); ?></h5>
                                                    <p class="card-text text-muted">No hay requisitos definidos para este tipo.</p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php $active = false; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info border-0 rounded-4 shadow-sm">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-info-circle-fill me-3 fs-4"></i>
                                    <div>
                                        <h5 class="alert-heading mb-1">Sin tipos de requisitos</h5>
                                        <p class="mb-0">No hay tipos de requisitos definidos en el sistema. Por favor, contacte al administrador.</p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer d-flex justify-content-between p-4 bg-light">
                        <div>
                            <button id="showRequisitosBtn" class="btn btn-outline-secondary rounded-pill px-4">
                                <i class="bi bi-x-lg me-2"></i>Cancelar
                            </button>

                            <a href="/menu/init" class="btn btn-outline-success rounded-pill px-4 ms-2">
                                <i class="bi bi-house me-2"></i>Volver al Menú
                            </a>
                        </div>
                        <button class="btn btn-success rounded-pill px-4" id="btnGuardar">
                            <i class="bi bi-check2-circle me-2"></i>Guardar
                        </button>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>





            <script>
                showRequisitosBtn.addEventListener('click', function() {
                    flipCard.classList.add('flipped');
                    setTimeout(() => {
                        window.location.href = '/userPerfil/init';
                    }, 300);
                });


                document.addEventListener('DOMContentLoaded', function() {
                    // Initialize tooltips
                    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                    tooltipTriggerList.map(function(tooltipTriggerEl) {
                        return new bootstrap.Tooltip(tooltipTriggerEl);
                    });

                    function calculateProgress() {
                        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                        const total = checkboxes.length;
                        const checked = Array.from(checkboxes).filter(cb => cb.checked).length;
                        const progress = total > 0 ? Math.round((checked / total) * 100) : 0;

                        // Update progress text
                        document.getElementById('progress-value').textContent = `${progress}%`;

                        // Update progress bar
                        const progressBar = document.querySelector('.progress-bar');
                        progressBar.style.width = `${progress}%`;
                        progressBar.setAttribute('aria-valuenow', progress);

                        // Change progress bar color based on completion
                        if (progress < 30) {
                            progressBar.className = 'progress-bar bg-danger';
                        } else if (progress < 70) {
                            progressBar.className = 'progress-bar bg-warning';
                        } else if (progress === 100) {
                            // Set color to blue when progress is 100%
                            progressBar.className = 'progress-bar bg-primary';
                        } else {
                            progressBar.className = 'progress-bar bg-success';
                        }

                        // Change progress text color when it's 100%
                        const progressValue = document.getElementById('progress-value');
                        if (progress === 100) {
                            progressValue.classList.add('text-white');
                            progressValue.classList.remove('text-success', 'text-warning', 'text-danger');
                        } else if (progress >= 70) {
                            progressValue.classList.add('text-success');
                            progressValue.classList.remove('text-warning', 'text-danger', 'text-white');
                        } else if (progress >= 30) {
                            progressValue.classList.add('text-warning');
                            progressValue.classList.remove('text-danger', 'text-success', 'text-white');
                        } else {
                            progressValue.classList.add('text-danger');
                            progressValue.classList.remove('text-warning', 'text-success', 'text-white');
                        }
                    }

                    function highlightCheckbox(checkbox) {
                        const wrapper = checkbox.closest('.requisito-item');
                        if (wrapper) {
                            wrapper.classList.add('highlight-animation');
                            setTimeout(() => {
                                wrapper.classList.remove('highlight-animation');
                            }, 1500);
                        }
                    }

                    function openAccordionForCheckbox(checkbox) {
                        const collapseDiv = checkbox.closest('.accordion-collapse');
                        if (collapseDiv && !collapseDiv.classList.contains('show')) {
                            new bootstrap.Collapse(collapseDiv, {
                                toggle: true
                            });
                        }
                    }

                    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                        checkbox.addEventListener('change', function() {
                            calculateProgress();

                            if (this.checked) {
                                openAccordionForCheckbox(this);
                                this.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'center'
                                });
                                highlightCheckbox(this);
                            }

                            // Add visual feedback to parent container
                            const container = this.closest('.requisito-item');
                            if (container) {
                                if (this.checked) {
                                    container.style.backgroundColor = '#ecfdf5';
                                    container.style.borderColor = '#a7f3d0';
                                } else {
                                    container.style.backgroundColor = '';
                                    container.style.borderColor = '';
                                }
                            }
                        });
                    });

                    // Save button functionality
                    document.getElementById('btnGuardar').addEventListener('click', function() {
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

                    // Calculate initial progress
                    calculateProgress();
                });
            </script>

            </body>

            </html>