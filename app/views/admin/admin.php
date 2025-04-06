<!--<div class="container py-5" style="max-width: 1000px; margin: 0 auto;">-->
<div class="container py-5" style="max-width: 1000px; margin: 0 auto; border: 2px solid #aaa; border-radius: 10px; padding: 20px;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/SENA.jpg" alt="Logo" width="30" height="30">
            </a>
            <div class="d-flex align-items-center">
                <a href="#" class="text-decoration-none text-secondary me-3">Cerrar Sesión</a>
                <a href="/userPerfil/init" class="text-decoration-none"> <!-- Añadí esta etiqueta <a> -->
                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <span class="fw-bold">BR</span>
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

    <div class="user-profile">
        <a href="/convocatoria/init"><i class="fas fa-chalkboard-teacher"></i><span> Crear Convocatorias</span></a></li>
        <br>
        <li><a href="/administrarUsuario/init"><i class="fas fa-users"></i><span>administrar Usuario</span></a></li>
        <br>
        <a href="/userPerfil/init"><i class="fas fa-user-circle"></i> Ícono de perfil <span>Perfil Usuario</span></a>
        <br>
        <a href="/administrarConvocatorias/init"><i class="fas fa-bullhorn me-2"></i> Ícono de perfil <span>Administrar Convocatorias</span></a>
    </div>


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
            <button class="btn btn-success">Todas</button>
            <button class="btn btn-outline-secondary">Empleo</button>
            <button class="btn btn-outline-secondary">Formación Técnica</button>
            <button class="btn btn-outline-secondary">Formación Tecnológica</button>
            <button class="btn btn-outline-secondary">Certificaciones</button>
            <button class="btn btn-outline-secondary">Prácticas</button>
            <button class="btn btn-outline-secondary">Internacional</button>
        </div>

        <!-- Cards Section -->
        <div class="row">
            <!-- Featured Card Section -->
            <?php if (isset($convocatorias) && is_array($convocatorias) && count($convocatorias) > 0): ?>
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-8 offset-md-4">
                                    <span class="badge-destacado mb-3">
                                        <i class="fas fa-certificate me-1"></i> Destacado
                                    </span>
                                    <div class="text-end">
                                        <h4 class="card-title fw-bold"><?= htmlspecialchars($convocatorias[0]->nombre ?? '') ?></h4>
                                        <p class="card-text text-muted"><?= htmlspecialchars($convocatorias[0]->descripcion ?? '') ?></p>
                                        <div class="d-flex flex-wrap justify-content-end mt-4">
                                            <div class="me-4 mb-2">
                                                <i class="far fa-calendar card-info-icon text-success"></i>
                                                <small>Cierre: <?= isset($convocatorias[0]->fechaCierre) ? date('d M Y', strtotime($convocatorias[0]->fechaCierre)) : 'N/A' ?></small>
                                            </div>
                                            <div class="mb-2">
                                                <i class="fas fa-users card-info-icon text-success"></i>
                                                <small><?= htmlspecialchars($convocatorias[0]->objetivo ?? '') ?></small>
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
                    <?php if (!empty($convocatorias)): ?>
                        <?php foreach ($convocatorias as $conv): ?>
                            <div class="col-md-6 mb-4">
                                <div class="card border-0 shadow-sm h-100">
                                    <div class="card-body p-0">
                                        <div class="position-relative">
                                            <img src="/img/image.png" class="card-img-top object-fit-cover" alt="<?= htmlspecialchars($conv->nombre) ?>" style="height: 150px;">
                                        </div>
                                        <div class="p-2">
                                            <h5 class="card-title fs-6"><?= htmlspecialchars($conv->nombre) ?></h5>
                                            <p class="card-text text-muted small"><?= htmlspecialchars($conv->descripcion) ?></p>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <div>
                                                    <i class="far fa-calendar text-muted me-1"></i>
                                                    <small class="text-muted">Cierre: <?= date('d M Y', strtotime($conv->fechaCierre)) ?></small>
                                                </div>
                                                <button class="btn btn-outline-success btn-sm">Inscribirse</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <div class="alert alert-info">
                                No hay convocatorias disponibles en este momento.
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
        </div>
    </div>
<?php endif; ?> <!-- Close $convocatorias card condition -->

<!-- Regular Cards Grid -->
<?php if (!empty($convocatorias)): ?>
    <div class="row">
        <?php foreach ($convocatorias as $conv): ?>
            <!-- Card content -->
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-info">
                No hay convocatorias disponibles
            </div>
        </div>
    </div>
<?php endif; ?>