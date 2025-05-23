<!--<div class="container py-5" style="max-width: 1000px; margin: 0 auto;">-->
<div class="container py-5" style="max-width: 1200px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1); padding: 25px; position: relative;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/SENA.jpg" alt="Logo" width="30" height="30">
            </a>
            <div class="d-flex align-items-center">
                <a href="/logout" class="text-decoration-none text-secondary me-3">Cerrar Sesión</a>
                <a href="/userPerfil/init" class="text-decoration-none"> <!-- Añadí esta etiqueta <a> -->
                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <span class="fw-bold">
                            <?php

                            use App\Models\FavoritosModel;

                            if (isset($_SESSION['nombre'])) {
                                // Separa el nombre por espacios
                                $nombreCompleto = trim($_SESSION['nombre']);
                                $partes         = explode(' ', $nombreCompleto);
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

                </a> <!-- Cierre de la etiqueta <a> -->
            </div>
        </div>
    </nav>

    <!-- Search Bar -->
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="input-group search-bar">
                <span class="input-group-text bg-transparent border-0">
                    <i class="fas fa-search text-secondary"></i>
                </span>
                <input type="text" class="form-control bg-transparent" placeholder="Buscar">
            </div>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs mt-4 border-0 justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="/menu/init">Descubrir</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/explorar/init">Explorar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/favoritos/init">
                <i class="far fa-bookmark me-1"></i> Favoritos
            </a>
        </li>
    </ul>
    <!-- Hero Section -->
    <div class="hero-section p-4 mt-4">
        <div class="row">
            <div class="col-md-7">
                <div class="badge bg-secondary bg-opacity-25 text-white mb-3">
                    <i class="fas fa-bolt me-1"></i> Programa Destacado
                </div>
                <h1 class="fw-bold">Impulsa tu Talento 2025</h1>
                <div class="green-underline"></div>
                <p class="mb-4">Conviértete en un profesional destacado y mejora tus habilidades con el apoyo del SENA. ¡Inicia hoy tu camino profesional!</p>
                <div class="d-flex flex-wrap">
                    <a href="#" class="btn btn-primary me-2 mb-2">
                        <i class="fas fa-user-plus me-1"></i> Inscribirse Ahora
                    </a>
                    <a href="#" class="btn btn-outline-light mb-2">
                        <i class="fas fa-info-circle me-1"></i> Ver Detalles
                    </a>
                </div>
                <div class="d-flex mt-3">
                    <span class="badge bg-light text-dark me-2">Estudiantes</span>
                    <span class="badge bg-light text-dark me-2">Cursos</span>
                    <span class="badge bg-light text-dark">Empleabilidad</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Discover Section -->
    <div class="mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">
                <i class="far fa-file-alt text-success me-2"></i> Descubre algo nuevo
            </h5>
            <div>
                <button class="btn btn-sm btn-outline-secondary me-2">
                    <i class="fas fa-filter me-1"></i> Filtrar
                </button>
                <a href="#" class="text-decoration-none text-primary">Ver todos <i class="fas fa-chevron-right fa-xs"></i></a>
            </div>
        </div>

        <!-- Category Pills -->
        <div class="category-pills mb-4">
            <button class="btn btn-outline-secondary">Todas</button>
            <button class="btn btn-outline-secondary">Empleo</button>
            <button class="btn btn-outline-secondary">Formación Técnica</button>
            <button class="btn btn-outline-secondary">Formación Tecnológica</button>
            <button class="btn btn-outline-secondary">Certificaciones</button>
            <button class="btn btn-outline-secondary">Prácticas</button>
            <button class="btn btn-outline-secondary">Internacional</button>
        </div>

        <?php if (isset($convocatorias) && is_array($convocatorias) && count($convocatorias) > 0): ?>
    <?php $conv = $convocatorias[0]; ?> <!-- Para usar solo $conv -->
    <div class="col-12 mb-4">
        <div class="card border-0 shadow-sm" style="max-height: 250px;">
            <div class="card-body p-0 h-100">
                <div class="row g-0 h-100">

                    <!-- Mitad Izquierda: Imagen -->
                    <div class="col-md-6 h-100">
                        <img src="/img/image.png"
                             class="img-fluid h-100 w-100 rounded-start"
                             alt="<?php echo htmlspecialchars($conv->nombre ?? '') ?>"
                             style="object-fit: cover; max-height: 250px;">
                    </div>

                    <!-- Mitad Derecha: Contenido -->
                    <div class="col-md-6 p-3 d-flex flex-column">
                        <!-- Contenido superior -->
                        <div class="flex-grow-1">
                            <span class="badge bg-warning text-dark mb-2 d-inline-block fs-6">
                                <i class="fas fa-certificate me-1"></i> Destacado
                            </span>
                            <h5 class="card-title fw-bold mb-2 w-100 text-wrap">
                                <?php echo htmlspecialchars($conv->nombre ?? '') ?>
                            </h5>
                            <p class="card-text text-muted small mb-3 w-100 text-wrap">
                                <?php echo htmlspecialchars($conv->descripcion ?? '') ?>
                            </p>
                        </div>

                        <!-- Información inferior -->
                        <div class="d-flex flex-wrap justify-content-between align-items-center mt-auto">
                            <div class="small me-2">
                                <i class="far fa-calendar text-success me-1"></i>
                                <span>Cierre: <?php echo isset($conv->fechaCierre) ? date('d M Y', strtotime($conv->fechaCierre)) : 'N/A' ?></span>
                            </div>
                            <div class="small me-2">
                                <i class="fas fa-users text-success me-1"></i>
                                <span><?php echo htmlspecialchars($conv->objetivo ?? '') ?></span>
                            </div>

                            <!-- Botones (agrega funcionalidad según tu lógica) -->
                            <div class="mt-2">
                                <button class="btn btn-outline-primary btn-sm me-2"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalConvocatoria<?php echo $conv->id ?>">
                                    Detalles
                                </button>
                                <button class="btn btn-outline-success btn-sm">Inscribirse</button>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


            <!-- Dynamic Convocatorias Section -->
            <div class="row">
                <?php if (! empty($convocatorias)): ?>
                    <?php foreach ($convocatorias as $conv): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-0">
                                    <div class="position-relative">
                                        <img src="/img/image.png" class="card-img-top object-fit-cover" alt="<?php echo htmlspecialchars($conv->nombre) ?>" style="height: 150px;">
                                    </div>
                                    <div class="p-2">
                                        <h5 class="card-title fs-6"><?php echo htmlspecialchars($conv->nombre) ?></h5>
                                        <p class="card-text text-muted small"><?php echo htmlspecialchars($conv->descripcion) ?></p>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <div>
                                                <i class="far fa-calendar text-muted me-1"></i>
                                                <small class="text-muted">Cierre: <?php echo date('d M Y', strtotime($conv->fechaCierre)) ?></small>
                                            </div>
                                            <!-- Botón Detalles -->
                                            <button class="btn btn-outline-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#modalConvocatoria<?php echo $conv->id ?>">Detalles</button>
                                            <button class="btn btn-outline-success btn-sm">Inscribirse</button>
                                            <!-- Ícono de favorito -->

                                            <?php
                                            $favoritosModel = new FavoritosModel();
                                            $favoritosUsuario = $favoritosModel->obtenerFavoritosPorUsuario($_SESSION['id'] ?? 0);
                                            $favoritosIds = array_column($favoritosUsuario, 'id');
                                            // Esto sí debe ir solo una vez, al inicio
                                            ?>


                                            <i class="<?= in_array($conv->id, $favoritosIds) ? 'fas' : 'far' ?> fa-star favorito-icon text-warning fs-5"
                                                style="cursor:pointer;"
                                                data-id="<?= $conv->id ?>"
                                                onclick="toggleFavorito(this)"></i>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Detalles -->
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
                                        <!-- Banner image with overlay -->
                                        <div class="position-relative">
                                            <img src="/img/image.png" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                                            <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                                <h4 class="text-white mb-0"><?php echo htmlspecialchars($conv->nombre) ?></h4>
                                            </div>
                                            <span class="badge bg-danger position-absolute top-0 end-0 m-3">
                                                Cierra: <?php echo date('d M Y', strtotime($conv->fechaCierre)) ?>
                                            </span>
                                        </div>

                                        <!-- Content section -->
                                        <div class="p-4">
                                            <!-- Info cards -->
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

                                            <!-- Tabs for content organization -->
                                            <ul class="nav nav-tabs" id="convocatoriaTab<?php echo $conv->id ?>" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="descripcion-tab<?php echo $conv->id ?>" data-bs-toggle="tab" data-bs-target="#descripcion<?php echo $conv->id ?>" type="button" role="tab" aria-controls="descripcion" aria-selected="true">Descripción</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="objetivo-tab<?php echo $conv->id ?>" data-bs-toggle="tab" data-bs-target="#objetivo<?php echo $conv->id ?>" type="button" role="tab" aria-controls="objetivo" aria-selected="false">Objetivo</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="requisitos-tab<?php echo $conv->id ?>" data-bs-toggle="tab" data-bs-target="#requisitos<?php echo $conv->id ?>" type="button" role="tab" aria-controls="requisitos" aria-selected="false">Requisitos</button>
                                                </li>
                                            </ul>

                                            <div class="tab-content p-3 border border-top-0 rounded-bottom mb-4" id="convocatoriaTabContent<?php echo $conv->id ?>">
                                                <div class="tab-pane fade show active" id="descripcion<?php echo $conv->id ?>" role="tabpanel" aria-labelledby="descripcion-tab<?php echo $conv->id ?>">
                                                    <p><?php echo htmlspecialchars($conv->descripcion) ?></p>
                                                </div>
                                                <div class="tab-pane fade" id="objetivo<?php echo $conv->id ?>" role="tabpanel" aria-labelledby="objetivo-tab<?php echo $conv->id ?>">
                                                    <p><?php echo htmlspecialchars($conv->objetivo) ?></p>
                                                </div>
                                                <div class="tab-pane fade" id="requisitos<?php echo $conv->id ?>" role="tabpanel" aria-labelledby="requisitos-tab<?php echo $conv->id ?>">
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
                <?php else: ?>
                    <div class="col-12">
                        <div class="alert alert-info">
                            No hay convocatorias disponibles en este momento.
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        <?php endif; ?>
        <div class="text-center mt-3 mb-5">
            <button class="btn btn-outline-secondary rounded-pill px-6">
                <i class="fas fa-sync-alt me-2"></i> Cargar más convocatorias
            </button>
        </div>


        <script src="/js/favoritos.js"></script>