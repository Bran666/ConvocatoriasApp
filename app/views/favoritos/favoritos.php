<div class="container py-5" style="max-width: 1200px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1); padding: 25px; position: relative;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/SENA.jpg" alt="Logo" width="30" height="30">
                <span class="ms-2 fw-semibold">SENA</span>
            </a>
            <div class="d-flex align-items-center">
                <a href="/logout" class="text-decoration-none text-secondary me-3">Cerrar Sesión</a>
                <a href="/userPerfil/init" class="text-decoration-none">
                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <span class="fw-bold">
                            <?php
                            if (isset($_SESSION['nombre'])) {
                                // Separa el nombre por espacios
                                $nombreCompleto = trim($_SESSION['nombre']);
                                $partes = explode(' ', $nombreCompleto);

                                // Toma la primera letra del primer nombre y primer apellido (si existe)
                                $iniciales = strtoupper(substr($partes[0], 0, 1));
                                if (isset($partes[1])) {
                                    $iniciales .= strtoupper(substr($partes[1], 0, 1));
                                }

                                echo $iniciales;
                            } else {
                                echo "US"; // Si no hay nombre en sesión, muestra "US" de "Usuario"
                            }
                            ?>

                        </span>
                    </div>
                </a>
            </div>

        </div>
    </nav>

    <!-- Search Bar -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="input-group search-bar">
                <span class="input-group-text bg-transparent border-0">
                    <i class="fas fa-search text-secondary"></i>
                </span>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Buscar en mis favoritos">
            </div>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs border-0 justify-content-end mb-5">
        <li class="nav-item">
            <a class="nav-link" href="/menu/init">Descubrir</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/explorar/init">Explorar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/favoritos/init">
                <i class="far fa-bookmark me-1"></i> Favoritos
            </a>
        </li>
    </ul>

    <!-- Favoritos Header -->
    <div class="mb-5">
        <h1 class="fw-bold mb-2">Mis Favoritos</h1>
        <p class="text-muted">Gestiona las oportunidades que has guardado para revisar más tarde</p>
    </div>

    <!-- Filters and View Toggle -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
        <div class="d-flex align-items-center gap-2">
            <button class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-filter me-2"></i> Filtrar
            </button>
            <select class="form-select form-select-sm" style="width: auto;">
                <option selected>Todos</option>
                <option>Formación Técnica</option>
                <option>Formación Tecnológica</option>
                <option>Certificaciones</option>
                <option>Prácticas</option>
            </select>
        </div>

        <div class="d-flex align-items-center gap-2">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-sm view-toggle-btn active" id="gridViewBtn">
                    Cuadrícula
                </button>
                <button type="button" class="btn btn-sm view-toggle-btn btn-outline-secondary" id="listViewBtn">
                    Lista
                </button>
            </div>
            <button class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-sort me-2"></i> Ordenar
            </button>
        </div>
    </div>
<!-- Cards Section para los Favoritos -->
<div id="gridView">
    <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-semibold mb-0">Convocatorias Favoritas</h5>
            <a href="#" class="text-decoration-none text-success">Ver todos</a>
        </div>
        <div class="row g-3 mb-4">
            <?php foreach ($convocatoriasFavoritas as $conv): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="position-relative">
                            <img src="/img/image.png" class="card-img-top" alt="<?php echo htmlspecialchars($conv->nombre) ?>" style="height: 140px; object-fit: cover;">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2">Vence en 2 días</span>
                        </div>

                        <div class="card-body p-4">
                            <h6 class="card-title fw-semibold mb-1"><?php echo htmlspecialchars($conv->nombre) ?></h6>
                            <p class="card-text text-muted small mb-2"><?php echo htmlspecialchars($conv->descripcion) ?></p>

                            <div class="d-flex flex-wrap gap-1 mb-2 small text-muted">
                                <div>
                                    <i class="far fa-clock me-1"></i>
                                    Cierre: <?php echo isset($conv->fechaCierre) ? date('d M Y', strtotime($conv->fechaCierre)) : 'No definido' ?>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt me-1"></i>
                                    Ubicación: <?php echo isset($conv->ubicacion) ? htmlspecialchars($conv->ubicacion) : 'No definido' ?>
                                </div>
                                <div>
                                    <i class="far fa-calendar-alt me-1"></i>
                                    Guardado: <?php echo isset($conv->fechaGuardado) ? date('d M Y', strtotime($conv->fechaGuardado)) : 'No definido' ?>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalConvocatoria<?php echo $conv->id ?>">Detalles</button>
                                <button class="btn btn-outline-success btn-sm">Inscribirse</button>
                                
                                <form action="/favoritos/eliminarFavorito" class="form-eliminar-favorito d-inline" method="POST">
    <input type="hidden" name="id_convocatoria" value="<?= $conv->id ?>">
    <button type="submit" class="btn btn-light btn-sm rounded-circle shadow-sm btn-eliminar-favorito" title="Eliminar">
        <i class="fas fa-trash-alt text-danger"></i>
    </button>
</form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Detalles (dentro del foreach para cada convocatoria) -->
                <div class="modal fade" id="modalConvocatoria<?php echo $conv->id ?>" tabindex="-1" aria-labelledby="modalConvocatoriaLabel<?php echo $conv->id ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header bg-success text-white border-0">
                                <h5 class="modal-title" id="modalConvocatoriaLabel<?php echo $conv->id ?>">
                                    <i class="fas fa-clipboard-list me-2"></i> Detalles de la Convocatoria
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="position-relative">
                                    <img src="/img/image.png" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                                    <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                        <h4 class="text-white mb-0"><?php echo htmlspecialchars($conv->nombre) ?></h4>
                                    </div>
                                    <span class="badge bg-danger position-absolute top-0 end-0 m-3">
                                        Cierra: <?php echo date('d M Y', strtotime($conv->fechaCierre)) ?>
                                    </span>
                                </div>

                                <div class="p-4">
                                    <div class="row mb-4">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <div class="card h-100 border-0 bg-light">
                                                <div class="card-body text-center">
                                                    <i class="far fa-calendar-alt text-success fa-2x mb-2"></i>
                                                    <h6 class="card-title">Fecha de Cierre</h6>
                                                    <p class="card-text"><?php echo date('d M Y', strtotime($conv->fechaCierre)) ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <div class="card h-100 border-0 bg-light">
                                                <div class="card-body text-center">
                                                    <i class="fas fa-building text-success fa-2x mb-2"></i>
                                                    <h6 class="card-title">Entidad</h6>
                                                    <p class="card-text">SENA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100 border-0 bg-light">
                                                <div class="card-body text-center">
                                                    <i class="fas fa-user-tie text-success fa-2x mb-2"></i>
                                                    <h6 class="card-title">Responsable</h6>
                                                    <p class="card-text">Administrador</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="nav nav-tabs" id="convocatoriaTab<?php echo $conv->id ?>" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="descripcion-tab<?php echo $conv->id ?>" data-bs-toggle="tab" data-bs-target="#descripcion<?php echo $conv->id ?>" type="button" role="tab">Descripción</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="objetivo-tab<?php echo $conv->id ?>" data-bs-toggle="tab" data-bs-target="#objetivo<?php echo $conv->id ?>" type="button" role="tab">Objetivo</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="requisitos-tab<?php echo $conv->id ?>" data-bs-toggle="tab" data-bs-target="#requisitos<?php echo $conv->id ?>" type="button" role="tab">Requisitos</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content p-3 border border-top-0 rounded-bottom mb-4" id="convocatoriaTabContent<?php echo $conv->id ?>">
                                        <div class="tab-pane fade show active" id="descripcion<?php echo $conv->id ?>" role="tabpanel">
                                            <p><?php echo htmlspecialchars($conv->descripcion) ?></p>
                                        </div>
                                        <div class="tab-pane fade" id="objetivo<?php echo $conv->id ?>" role="tabpanel">
                                            <p><?php echo htmlspecialchars($conv->objetivo) ?></p>
                                        </div>
                                        <div class="tab-pane fade" id="requisitos<?php echo $conv->id ?>" role="tabpanel">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-success me-2"></i> Documento de identidad</li>
                                                <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-success me-2"></i> Hoja de vida actualizada</li>
                                                <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-success me-2"></i> Certificados académicos</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer bg-light">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    <i class="fas fa-times me-1"></i> Cerrar
                                </button>
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-user-plus me-1"></i> Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin del Modal -->
            <?php endforeach; ?>
        </div>

        <!-- Botón de cargar más -->
        <div class="text-center mt-3 mb-5">
            <button class="btn btn-outline-secondary rounded-pill px-6">
                <i class="fas fa-sync-alt me-2"></i> Cargar más convocatorias
            </button>
        </div>
    </div>
</div>

        <!-- Carga jQuery primero -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Luego tus scripts que usan jQuery -->
<script>
$(document).ready(function () {
    $(".form-eliminar-favorito").on("submit", function (e) {
        e.preventDefault();
        const form = $(this);
        const id_convocatoria = form.find("input[name='id_convocatoria']").val();

        $.ajax({
            type: "POST",
            url: "/favoritos/eliminarFavorito",
            data: { id_convocatoria: id_convocatoria },
            success: function (respuesta) {
                if (respuesta.trim() === "ok") {
                    form.closest("div.card").fadeOut("slow", function () {
                        $(this).remove();
                        alert(" ✅ Eliminado con éxito"); // Mensaje de éxito
                    });
                } else {
                    alert(" ❌  Error al eliminar el favorito.");
                }
            },
            error: function () {
                alert(" ❌ Error en la solicitud.");
            }
        });
    });
});
</script>


 

    <!-- Custom JavaScript for View Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const gridViewBtn = document.getElementById('gridViewBtn');
            const listViewBtn = document.getElementById('listViewBtn');
            const gridView = document.getElementById('gridView');
            const listView = document.getElementById('listView');

            gridViewBtn.addEventListener('click', function() {
                gridView.style.display = 'block';
                listView.style.display = 'none';
                gridViewBtn.classList.add('active');
                gridViewBtn.classList.remove('btn-outline-secondary');
                listViewBtn.classList.remove('active');
                listViewBtn.classList.add('btn-outline-secondary');
            });

            listViewBtn.addEventListener('click', function() {
                gridView.style.display = 'none';
                listView.style.display = 'block';
                listViewBtn.classList.add('active');
                listViewBtn.classList.remove('btn-outline-secondary');
                gridViewBtn.classList.remove('active');
                gridViewBtn.classList.add('btn-outline-secondary');
            });
        });
    </script>
    </body>

    </html>