<div class="container py-5" style="max-width: 1200px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1); padding: 25px; position: relative;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/convo2.png" alt="Logo" width="60" height="60">
            </a>
            <div class="d-flex align-items-center">
                <a href="/logout" class="text-decoration-none text-secondary me-3">Cerrar Sesión</a>
                <a href="/userPerfil/init" class="text-decoration-none">
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
                <input type="text" id="buscadorConvocatorias" class="form-control bg-transparent border-0" placeholder="Buscar programas, cursos o convocatorias">

            </div>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs border-0 justify-content-end mb-5">
        <li class="nav-item">
            <a class="nav-link" href="/menu/init">Descubrir</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/explorar/init">Explorar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/favoritos/init">
                <i class="far fa-bookmark me-1"></i> Favoritos
            </a>
        </li>
    </ul>

    <!-- Explorar Header 
    <div class="mb-5">
        <h1 class="fw-bold mb-2">Explorar Convocatorias</h1>
        <p class="text-muted">Descubre todas las oportunidades disponibles según tus intereses y ubicación</p>
    </div>
                            -->
    <!-- Filters Section -->
    <div class="filter-section mb-5">
        <h5 class="fw-semibold mb-4">Filtros de búsqueda</h5>

        <div class="row g-4">
            <!-- Categoría -->
            <div class="col-md-4">
                <label class="form-label fw-medium">Categoría</label>
                <select class="form-select">
                    <option selected>Todas las categorías</option>
                    <option>Formación Técnica</option>
                    <option>Formación Tecnológica</option>
                    <option>Certificaciones</option>
                    <option>Prácticas</option>
                    <option>Internacional</option>
                </select>
            </div>

            <!-- Ubicación -->
            <div class="col-md-4">
                <label class="form-label fw-medium">Ubicación</label>
                <select class="form-select">
                    <option selected>Todo el país</option>
                    <option>Bogotá</option>
                    <option>Medellín</option>
                    <option>Cali</option>
                    <option>Barranquilla</option>
                    <option>Virtual</option>
                </select>
            </div>

            <!-- Fecha -->
            <div class="col-md-4">
                <label class="form-label fw-medium">Fecha de inicio</label>
                <select class="form-select">
                    <option selected>Cualquier fecha</option>
                    <option>Próximos 7 días</option>
                    <option>Próximos 30 días</option>
                    <option>Próximos 3 meses</option>
                    <option>Personalizado</option>
                </select>
            </div>
        </div>

        <div class="mt-4">
            <button class="btn btn-success me-2">
                <i class="fas fa-filter me-2"></i> Aplicar filtros
            </button>
        </div>
    </div>

    <!-- Map View Toggle -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-semibold mb-0">Resultados (<?php echo count($convocatorias); ?>)</h5> <!-- Mostrar el total de convocatorias -->
        <!--
         <div class="d-flex align-items-center gap-2">
        <span class="small text-muted">Mostrar:</span>

        <select id="itemsPorPagina" class="form-select form-select-sm" style="width: auto;">
            <option value="10"selected>10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
              <option value="todos">Todos</option>
        </select>
    </div>
                            -->

    </div>


    <h2 class="mb-3">Visualización de Convocatorias</h2>

    <!-- Selector de visualización -->
    <div class="mb-3">
        <label for="tipoVista" class="form-label">Ver convocatorias como:</label>
        <select id="tipoVista" class="form-select" onchange="cambiarVista()">
            <option value="tarjetas">Tarjetas</option>
            <option value="tabla">Tabla</option>
            <option value="lista">Lista</option>
            <option value="mosaico">mosaico</option>
        </select>
    </div>

    <div id="contenedorConvocatorias">
        <!-- Cards Section -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 convocatorias-cards">

            <!-- Featured Card Section -->
            <?php if (! empty($convocatorias)): ?>
                <!-- Dynamic Convocatorias Section -->
                <?php foreach ($convocatorias as $conv): ?>
                    <div class="col-md-6 col-lg-4 tarjeta-convocatoria" data-index="<?= $index ?>">
                        <div class="card border-0 shadow-sm w-100 d-flex flex-column h-100">

                            <!-- Imagen -->
                            <div class="position-relative">
                                <img src="/img/image.png" class="card-img-top object-fit-cover" alt="<?php echo htmlspecialchars($conv->nombre) ?>" style="height: 200px; object-fit: cover;">
                            </div>

                            <!-- Contenido -->
                            <div class="card-body d-flex flex-column p-3">
                                <h5 class="card-title mb-2"><?php echo htmlspecialchars($conv->nombre) ?></h5>
                                <p class="card-text text-muted small flex-grow-1"><?php echo htmlspecialchars($conv->descripcion) ?></p>

                                <!-- Información y botones al final -->
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center text-muted small mb-3">
                                        <div>
                                            <i class="far fa-calendar me-1"></i>
                                            Cierre: <?php echo date('d M Y', strtotime($conv->fechaCierre)) ?>
                                        </div>
                                    </div>

                                    <!-- Botones -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex gap-2"> <!-- Aquí se separan los botones -->
                                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalConvocatoria<?php echo $conv->id ?>">Detalles</button>
                                            <button class="btn btn-outline-success btn-sm">Inscribirse</button>
                                        </div>
                                        <?php
                                        $favoritosModel   = new FavoritosModel();
                                        $favoritosUsuario = $favoritosModel->obtenerFavoritosPorUsuario($_SESSION['id'] ?? 0);
                                        $favoritosIds     = array_column($favoritosUsuario, 'id'); // Esto sí debe ir solo una vez, al inicio
                                        ?>
                                        <i class="<?php echo in_array($conv->id, $favoritosIds) ? 'fas' : 'far' ?> fa-star favorito-icon text-warning fs-5"
                                            style="cursor:pointer;"
                                            data-id="<?php echo $conv->id ?>"
                                            onclick="toggleFavorito(this)"></i>
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
        <!-- Vista Tabla Mejorada -->
        <div id="vistaTabla" style="display: none;">
            <div class="table-responsive rounded-3 shadow-sm border border-light tarjeta-convocatoria">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-success">
                        <tr>
                            <th class="py-3 ps-4 fw-semibold" style="width: 25%">Nombre</th>
                            <th class="py-3 fw-semibold" style="width: 40%">Descripción</th>
                            <th class="py-3 text-center fw-semibold" style="width: 15%">
                                <i class="far fa-calendar-alt me-2"></i>Cierre
                            </th>
                            <th class="py-3 pe-4 text-end fw-semibold" style="width: 20%">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $favoritosModel   = new FavoritosModel();
                        $favoritosUsuario = $favoritosModel->obtenerFavoritosPorUsuario($_SESSION['id'] ?? 0);
                        $favoritosIds     = array_column($favoritosUsuario, 'id');
                        ?>
                        <?php foreach ($convocatorias as $conv): ?>
                            <tr class="position-relative border-bottom border-light">
                                <td class="ps-4 fw-medium text-primary ">
                                    <?php echo htmlspecialchars($conv->nombre) ?>
                                </td>
                                <td>
                                    <p class="text-truncate m-0 text-muted" style="max-width: 500px;" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo htmlspecialchars($conv->descripcion) ?>">
                                        <?php echo htmlspecialchars($conv->descripcion) ?>
                                    </p>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-light text-dark border border-1 border-secondary">
                                        <?php echo date('d M Y', strtotime($conv->fechaCierre)) ?>
                                    </span>
                                </td>
                                <td class="pe-4">
                                    <div class="d-flex justify-content-end align-items-center gap-2">
                                        <div class="btn-group btn-group-sm shadow-sm">
                                            <button class="btn btn-outline-primary rounded-start"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalConvocatoria<?php echo $conv->id ?>">
                                                <i class="fas fa-eye me-1"></i> Ver
                                            </button>
                                            <button class="btn btn-outline-success rounded-end">
                                                <i class="fas fa-user-plus me-1"></i> Inscribirse
                                            </button>
                                        </div>
                                        <button class="btn btn-link p-0 ms-1">
                                            <i class="<?php echo in_array($conv->id, $favoritosIds) ? 'fas' : 'far' ?> fa-star favorito-icon text-warning fs-5"
                                                style="cursor:pointer; filter: drop-shadow(0 0 2px rgba(255,193,7,0.5));"
                                                data-id="<?php echo $conv->id ?>"
                                                onclick="toggleFavorito(this)">
                                            </i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Vista Lista Mejorada -->
        <div id="vistaLista" style="display: none;">
            <div class="row g-3">
                <?php foreach ($convocatorias as $conv): ?>
                    <div class="col-12">
                        <div class="card border border-light shadow-sm hover-shadow-lg transition-all h-100">
                            <div class="card-body p-4">
                                <div class="d-flex flex-column flex-md-row justify-content-between">
                                    <!-- Contenido principal -->
                                    <div class="flex-grow-1 pe-md-3 mb-3 mb-md-0">
                                        <div class="d-flex align-items-start">
                                            <h5 class="card-title text-primary mb-2 fw-semibold flex-grow-1">
                                                <?php echo htmlspecialchars($conv->nombre) ?>
                                            </h5>
                                            <i class="<?php echo in_array($conv->id, $favoritosIds) ? 'fas' : 'far' ?> fa-star favorito-icon text-warning fs-4 ms-3 mt-1"
                                                style="cursor:pointer; filter: drop-shadow(0 0 2px rgba(255,193,7,0.5));"
                                                data-id="<?php echo $conv->id ?>"
                                                onclick="toggleFavorito(this)">
                                            </i>
                                        </div>

                                        <p class="card-text text-muted mb-3">
                                            <?php echo htmlspecialchars($conv->descripcion) ?>
                                        </p>

                                        <div class="d-flex align-items-center text-muted">
                                            <span class="badge bg-light text-dark border border-secondary me-3">
                                                <i class="far fa-calendar-alt me-1"></i>
                                                <?php echo date('d M Y', strtotime($conv->fechaCierre)) ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Acciones -->
                                    <div class="d-flex flex-column justify-content-center border-start border-light ps-md-3">
                                        <div class="btn-group-vertical btn-group-sm" role="group">
                                            <button class="btn btn-outline-primary text-start"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalConvocatoria<?php echo $conv->id ?>">
                                                <i class="fas fa-eye me-2"></i> Ver detalles
                                            </button>
                                            <button class="btn btn-outline-success text-start">
                                                <i class="fas fa-user-plus me-2"></i> Inscribirse
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

<div id="vistaMosaico" style="display: none;">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php foreach ($convocatorias as $conv): ?>
            <div class="col d-flex">
                <div class="card h-100 w-100 border-0 shadow-sm hover-lift-sm transition-all d-flex flex-column">
                    <div class="card-header bg-white border-bottom-0 pb-0 flex-shrink-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title text-primary mb-0 text-truncate"><?php echo htmlspecialchars($conv->nombre) ?></h5>
                            <i class="<?php echo in_array($conv->id, $favoritosIds) ? 'fas' : 'far' ?> fa-star favorito-icon text-warning fs-5"
                                style="cursor:pointer;" data-id="<?php echo $conv->id ?>" onclick="toggleFavorito(this)"></i>
                        </div>
                    </div>
                    <div class="card-body pt-2 d-flex flex-column">
                        <p class="card-text text-muted small flex-grow-1 mb-3" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><?php echo htmlspecialchars($conv->descripcion) ?></p>
                        <div class="d-flex justify-content-between align-items-end flex-shrink-0">
                            <span class="badge bg-light text-dark border">
                                <i class="far fa-calendar-alt me-1"></i>
                                <?php echo date('d M Y', strtotime($conv->fechaCierre)) ?>
                            </span>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalConvocatoria<?php echo $conv->id ?>">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-outline-success">
                                    <i class="fas fa-user-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

        <!-- Modal Detalles -->
        <?php foreach ($convocatorias as $conv): ?>
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
        <?php endforeach; ?>


<!-- Paginación con estilos bonitos -->
<div class="d-flex justify-content-center my-4">
    <div class="btn-group shadow-sm">
        <button id="btnAnterior" class="btn btn-outline-secondary" disabled>
            <i class="fas fa-chevron-left me-1"></i> Anterior
        </button>

        <span id="indicadorPagina" class="btn btn-light disabled">Página 1 de 1</span>

        <button id="btnSiguiente" class="btn btn-outline-primary">
            Siguiente <i class="fas fa-chevron-right ms-1"></i>
        </button>
    </div>
</div>
  <script>
document.addEventListener('DOMContentLoaded', function () {
    const contenedor = document.querySelector(".convocatorias-cards");
    const btnAnterior = document.getElementById("btnAnterior");
    const btnSiguiente = document.getElementById("btnSiguiente");
    const indicadorPagina = document.getElementById("indicadorPagina");

    if (!contenedor || !btnAnterior || !btnSiguiente || !indicadorPagina) {
        console.error('Elementos de paginación no encontrados');
        return;
    }

    const todasLasConvocatorias = <?php echo json_encode($convocatorias); ?>;
    const favoritosDelUsuario = <?php echo json_encode($favoritosIds); ?>;

    // ✅ Esto sí marca correctamente los favoritos en las convocatorias que se van a paginar
todasLasConvocatorias.forEach(conv => {
    conv.favorito = favoritosDelUsuario.includes(conv.id);
});


    let paginaActual = 1;
    const convocatoriasPorPagina = 12;
    const totalPaginas = Math.ceil(todasLasConvocatorias.length / convocatoriasPorPagina);

    function renderizarConvocatorias() {
        const inicio = (paginaActual - 1) * convocatoriasPorPagina;
        const fin = inicio + convocatoriasPorPagina;
        const convocatoriasPagina = todasLasConvocatorias.slice(inicio, fin);

        indicadorPagina.textContent = `Página ${paginaActual} de ${totalPaginas}`;

        let html = '';

        if (convocatoriasPagina.length === 0) {
            html = '<div class="col-12"><div class="alert alert-info">No hay más convocatorias disponibles.</div></div>';
        } else {
            convocatoriasPagina.forEach(conv => {
                html += `
                <div class="col-md-6 col-lg-4 tarjeta-convocatoria">
                    <div class="card border-0 shadow-sm w-100 d-flex flex-column h-100">
                        <div class="position-relative">
                            <img src="/img/image.png" class="card-img-top object-fit-cover" alt="${conv.nombre}" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body d-flex flex-column p-3">
                            <h5 class="card-title mb-2">${conv.nombre}</h5>
                            <p class="card-text text-muted small flex-grow-1">${conv.descripcion}</p>
                            <div class="mt-auto">
                                <div class="d-flex justify-content-between align-items-center text-muted small mb-3">
                                    <div>
                                        <i class="far fa-calendar me-1"></i>
                                        Cierre: ${new Date(conv.fechaCierre).toLocaleDateString('es-ES', { day: 'numeric', month: 'short', year: 'numeric' })}
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalConvocatoria${conv.id}">Detalles</button>
                                        <button class="btn btn-outline-success btn-sm">Inscribirse</button>
                                    </div>
                                  <i class="${conv.favorito ? 'fas' : 'far'} fa-star favorito-icon text-warning fs-5"
                                       data-id="${conv.id}"
                                       onclick="toggleFavorito(this)"
                                       style="cursor:pointer;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
            });
        }

        contenedor.innerHTML = html;
        btnAnterior.disabled = paginaActual === 1;
        btnSiguiente.disabled = paginaActual >= totalPaginas;
    }

    btnAnterior.addEventListener("click", () => {
    if (paginaActual > 1) {
        paginaActual--;
        renderizarConvocatorias();
       window.scrollTo({
    top: window.innerHeight / 1,
    behavior: 'smooth'
});
    }
});

btnSiguiente.addEventListener("click", () => {
    if (paginaActual < totalPaginas) {
        paginaActual++;
        renderizarConvocatorias();
        window.scrollTo({
    top: window.innerHeight / 1,
    behavior: 'smooth'
});
    }
});


    renderizarConvocatorias();
});
</script>



        <script src="/js/favoritos.js"></script>