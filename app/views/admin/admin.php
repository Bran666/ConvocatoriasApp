<!--<div class="container py-5" style="max-width: 1000px; margin: 0 auto;">-->
<div class="container py-5" style="max-width: 1200px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1); padding: 25px; position: relative;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/convo2.png" alt="Logo" width="60" height="60">
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
                                echo "US";
                            }
                            ?>
                        </span>
                    </div>

                </a>
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
                <input type="text" id="buscadorConvocatorias" class="form-control bg-transparent" placeholder="Buscar">
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

    
   <!-- Bootstrap 5 y FontAwesome (agrega en el <head>) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- Estilos -->
<style>
  .green-underline {
    width: 60px;
    height: 4px;
    background-color: #28a745;
    margin: 10px 0 20px 0;
    border-radius: 2px;
  }
  .hero-section {
    min-height: 420px;
  }
</style>

<!-- Carrusel de Programas -->
<div id="carruselProgramas" class="carousel slide mt-4" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="hero-section p-4 bg-dark text-white rounded">
        <div class="row h-100">
          <div class="col-md-7 d-flex flex-column justify-content-between h-100">
            <!-- Parte superior -->
            <div>
              <div class="badge bg-secondary bg-opacity-25 text-white mb-3">
                <i class="fas fa-bolt me-1"></i> Programa Destacado
              </div>
              <h1 class="fw-bold">Impulsa tu Talento 2025</h1>
              <div class="green-underline"></div>
              <p class="mb-4">Conviértete en un profesional destacado y mejora tus habilidades con el apoyo del SENA. ¡Inicia hoy tu camino profesional!</p>
            </div>
            <!-- Parte inferior -->
            <div>
              <div class="d-flex flex-wrap mt-4">
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
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="hero-section p-4" style="background-color: #14532d; color: white;">
        <div class="row h-100">
          <div class="col-md-7 d-flex flex-column justify-content-between h-100">
            <!-- Parte superior -->
            <div>
              <div class="badge bg-light text-success mb-3">
                <i class="fas fa-leaf me-1"></i> Oportunidad Verde
              </div>
              <h1 class="fw-bold">Sostenibilidad Profesional</h1>
              <div class="green-underline"></div>
              <p class="mb-4">Capacítate en energías limpias, economía circular y medio ambiente. ¡Sé parte del cambio!</p>
            </div>
            <!-- Parte inferior -->
            <div>
              <div class="d-flex flex-wrap mt-4">
                <a href="#" class="btn btn-light text-success me-2 mb-2">
                  <i class="fas fa-user-plus me-1"></i> Participar
                </a>
                <a href="#" class="btn btn-outline-light mb-2">
                  <i class="fas fa-info-circle me-1"></i> Más Info
                </a>
              </div>
              <div class="d-flex mt-3">
                <span class="badge bg-light text-dark me-2">Sostenibilidad</span>
                <span class="badge bg-light text-dark me-2">Ambiente</span>
                <span class="badge bg-light text-dark">Futuro Verde</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="hero-section p-4" style="background-color: #0d3b66; color: white;">
        <div class="row h-100">
          <div class="col-md-7 d-flex flex-column justify-content-between h-100">
            <!-- Parte superior -->
            <div>
              <div class="badge bg-white text-dark mb-3">
                <i class="fas fa-lightbulb me-1"></i> Creatividad en Acción
              </div>
              <h1 class="fw-bold">Diseño y Multimedia</h1>
              <div class="green-underline"></div>
              <p class="mb-4">Exprésate con cursos de diseño gráfico, animación y contenido digital. ¡Inspira al mundo!</p>
            </div>
            <!-- Parte inferior -->
            <div>
              <div class="d-flex flex-wrap mt-4">
                <a href="#" class="btn btn-light me-2 mb-2">
                  <i class="fas fa-user-plus me-1"></i> Unirse
                </a>
                <a href="#" class="btn btn-outline-light mb-2">
                  <i class="fas fa-info-circle me-1"></i> Detalles
                </a>
              </div>
              <div class="d-flex mt-3">
                <span class="badge bg-light text-dark me-2">Diseño</span>
                <span class="badge bg-light text-dark me-2">Multimedia</span>
                <span class="badge bg-light text-dark">Creatividad</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Control de navegación -->
  <button class="carousel-control-next" type="button" data-bs-target="#carruselProgramas" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
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
                <a href="#" class="text-decoration-none text-primary" onclick="mostrarVista('tabla')">Ver todos <i class="fas fa-chevron-right fa-xs"></i></a>

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
            <?php $conv = $convocatorias[0]; ?>
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
                            <div class="col-md-6 p-3 md-2 d-flex flex-column">
                                <!-- Etiqueta Destacado en la esquina superior derecha -->
                                <div class="d-flex justify-content-end">
                                    <span class="badge bg-warning text-dark  small">
                                        <i class="fas fa-certificate me-1"></i> Destacado
                                    </span>
                                </div>

                                <!-- Título -->
                                <h5 class="fw-bold mb-2 text-wrap"
                                    style="line-height: 1.2em; min-height: 2.4em; overflow: hidden;">
                                    <?php echo htmlspecialchars($conv->nombre ?? '') ?>
                                </h5>

                                <!-- Descripción -->
                                <p class="text-muted small mb-2 text-wrap"
                                    style="line-height: 1.2em; min-height: 2.4em; overflow: hidden;">
                                    <i class="fas fa-info-circle me-1"></i>
                                    <?php echo htmlspecialchars($conv->descripcion ?? '') ?>
                                </p>

                                <p class="text-muted small mb-2 text-wrap"><i class="fas fa-users  me-1"></i>
                                    <?php echo htmlspecialchars($conv->objetivo ?? '') ?>
                                </p>


                                <!-- Información inferior -->
                                <div class="d-flex flex-wrap justify-content-between align-items-center mt-auto mb-2">
                                    <div class="small me-2">
                                        <i class="far fa-calendar  me-1"></i>
                                        Cierre: <?php echo isset($conv->fechaCierre) ? date('d M Y', strtotime($conv->fechaCierre)) : 'N/A' ?>
                                    </div>

                                </div>

                                <!-- Botones y favorito -->
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-outline-primary btn-sm me-2"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalConvocatoria<?php echo $conv->id ?>">
                                        Detalles
                                    </button>
                                    <button class="btn btn-outline-success btn-sm me-2">Inscribirse</button>
                                    <!--
                            <?php
                            $esFavorito    = isset($favoritosIds) && in_array($conv->id, $favoritosIds);
                            $claseEstrella = $esFavorito ? 'fas' : 'far';
                            ?>
                         <   <i class="<?php echo $claseEstrella ?> fa-star favorito-icon text-warning fs-5"
                               style="cursor:pointer;"
                               title="<?php echo $esFavorito ? 'Quitar de favoritos' : 'Agregar a favoritos' ?>"
                               data-id="<?php echo $conv->id ?>"
                               onclick="toggleFavorito(this)"></i>-->
                                </div>
                            </div> <!-- Fin Mitad Derecha -->

                        </div>
                    </div>
                </div>
            </div>


            <!-- Dynamic Convocatorias Section -->
            <div id="contenedor-convocatorias" class="row">

                <?php foreach ($convocatorias as $conv): ?>
                    <div class="col-md-6 mb-4 tarjeta-convocatoria">
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
                                        $favoritosModel   = new FavoritosModel();
                                        $favoritosUsuario = $favoritosModel->obtenerFavoritosPorUsuario($_SESSION['id'] ?? 0);
                                        $favoritosIds     = array_column($favoritosUsuario, 'id');
                                        // Esto sí debe ir solo una vez, al inicio
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
                <!-- Fin del Modal -->
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
// Definir la función global ANTES del DOMContentLoaded
window.toggleFavorito = function(icono) {
    const id = parseInt(icono.dataset.id);
    const convocatoria = window.todasLasConvocatoriasGlobal.find(c => c.id === id);
    if (convocatoria) {
        convocatoria.favorito = !convocatoria.favorito;
        icono.classList.toggle('fas', convocatoria.favorito);
        icono.classList.toggle('far', !convocatoria.favorito);
        
        // AJAX para guardar el favorito
        fetch('/guardar-favorito', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                convocatoria_id: id,
                es_favorito: convocatoria.favorito
            })
        })
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                // Revertir en caso de error
                convocatoria.favorito = !convocatoria.favorito;
                icono.classList.toggle('fas');
                icono.classList.toggle('far');
                alert('Error al actualizar favoritos');
            }
        });
    }
};

document.addEventListener('DOMContentLoaded', function() {
    // Elementos del DOM
    const contenedor = document.getElementById("contenedor-convocatorias");
    const btnAnterior = document.getElementById("btnAnterior");
    const btnSiguiente = document.getElementById("btnSiguiente");
    const indicadorPagina = document.getElementById("indicadorPagina");

    if (!contenedor || !btnAnterior || !btnSiguiente || !indicadorPagina) {
        console.error('Elementos de paginación no encontrados');
        return;
    }

    // Hacer los datos disponibles globalmente
    window.todasLasConvocatoriasGlobal = <?php echo json_encode($todasConvocatorias); ?>;
    const favoritosDelUsuario = <?php echo json_encode($favoritosIds); ?>;

    // Marcar favoritos
    window.todasLasConvocatoriasGlobal.forEach(conv => {
        conv.favorito = favoritosDelUsuario.includes(conv.id);
    });

    let paginaActual = 1;
    const convocatoriasPorPagina = 10;
    const totalPaginas = Math.ceil(window.todasLasConvocatoriasGlobal.length / convocatoriasPorPagina);

    function renderizarConvocatorias() {
        const inicio = (paginaActual - 1) * convocatoriasPorPagina;
        const fin = inicio + convocatoriasPorPagina;
        const convocatoriasPagina = window.todasLasConvocatoriasGlobal.slice(inicio, fin);

        indicadorPagina.textContent = `Página ${paginaActual} de ${totalPaginas}`;

        let html = '';
        if (convocatoriasPagina.length === 0) {
            html = '<div class="col-12"><div class="alert alert-info">No hay más convocatorias disponibles.</div></div>';
        } else {
            convocatoriasPagina.forEach(conv => {
                html += `
                <div class="col-md-6 mb-4 tarjeta-convocatoria">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-0">
                            <div class="position-relative">
                                <img src="/img/image.png" class="card-img-top object-fit-cover" alt="${conv.nombre}" style="height: 150px;">
                            </div>
                            <div class="p-2">
                                <h5 class="card-title fs-6">${conv.nombre}</h5>
                                <p class="card-text text-muted small">${conv.descripcion}</p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <div>
                                        <i class="far fa-calendar text-muted me-1"></i>
                                        <small class="text-muted">Cierre: ${new Date(conv.fechaCierre).toLocaleDateString('es-ES')}</small>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#modalConvocatoria${conv.id}">Detalles</button>
                                    <button class="btn btn-outline-success btn-sm">Inscribirse</button>
                                    <i class="${conv.favorito ? 'fas' : 'far'} fa-star favorito-icon text-warning fs-5"
                                       data-id="${conv.id}"
                                       onclick="toggleFavorito(this)"
                                       style="cursor:pointer;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- Modal Detalles -->
                    <div class="modal fade" id="modalConvocatoria${conv.id}" tabindex="-1" aria-labelledby="modalConvocatoriaLabel${conv.id}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content border-0 shadow">
                                <div class="modal-header bg-success text-white border-0">
                                    <h5 class="modal-title" id="modalConvocatoriaLabel${conv.id}">
                                        <i class="fas fa-clipboard-list me-2"></i> Detalles de la Convocatoria
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="position-relative">
                                        <img src="/img/image.png" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                            <h4 class="text-white mb-0">${conv.nombre}</h4>
                                        </div>
                                        <span class="badge bg-danger position-absolute top-0 end-0 m-3">
                                            Cierra: ${new Date(conv.fechaCierre).toLocaleDateString('es-ES')}
                                        </span>
                                    </div>

                                    <div class="p-4">
                                        <div class="row mb-4">
                                            <div class="col-md-4 mb-3 mb-md-0">
                                                <div class="card h-100 border-0 bg-light">
                                                    <div class="card-body text-center">
                                                        <i class="far fa-calendar-alt text-success fa-2x mb-2"></i>
                                                        <h6 class="card-title">Fecha de Cierre</h6>
                                                        <p class="card-text">${new Date(conv.fechaCierre).toLocaleDateString('es-ES')}</p>
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

                                        <ul class="nav nav-tabs" id="convocatoriaTab${conv.id}" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="descripcion-tab${conv.id}" data-bs-toggle="tab" data-bs-target="#descripcion${conv.id}" type="button" role="tab" aria-controls="descripcion" aria-selected="true">Descripción</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="objetivo-tab${conv.id}" data-bs-toggle="tab" data-bs-target="#objetivo${conv.id}" type="button" role="tab" aria-controls="objetivo" aria-selected="false">Objetivo</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="requisitos-tab${conv.id}" data-bs-toggle="tab" data-bs-target="#requisitos${conv.id}" type="button" role="tab" aria-controls="requisitos" aria-selected="false">Requisitos</button>
                                            </li>
                                        </ul>

                                        <div class="tab-content p-3 border border-top-0 rounded-bottom mb-4" id="convocatoriaTabContent${conv.id}">
                                            <div class="tab-pane fade show active" id="descripcion${conv.id}" role="tabpanel" aria-labelledby="descripcion-tab${conv.id}">
                                                <p>${conv.descripcion}</p>
                                            </div>
                                            <div class="tab-pane fade" id="objetivo${conv.id}" role="tabpanel" aria-labelledby="objetivo-tab${conv.id}">
                                                <p>${conv.objetivo}</p>
                                            </div>
                                            <div class="tab-pane fade" id="requisitos${conv.id}" role="tabpanel" aria-labelledby="requisitos-tab${conv.id}">
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
                
                `;
            });
        }

        contenedor.innerHTML = html;
        btnAnterior.disabled = paginaActual === 1;
        btnSiguiente.disabled = paginaActual >= totalPaginas;
    }

   btnSiguiente.addEventListener("click", () => {
    if (paginaActual < totalPaginas) {
        paginaActual++;
        renderizarConvocatorias();

        // Esperar un momento antes de hacer scroll (efecto de carga)
        setTimeout(() => {
            window.scrollTo({
                top: window.innerHeight / 1,
                behavior: 'smooth'
            });
        }, 300); // Espera 300ms antes de hacer scroll (ajústalo si quieres)
    }
});


   btnAnterior.addEventListener("click", () => {
    if (paginaActual > 1) {
        paginaActual--;
        renderizarConvocatorias();

        setTimeout(() => {
            window.scrollTo({
                top: window.innerHeight / 1,
                behavior: 'smooth'
            });
        }, 300);
    }
});


    // Renderizar inicialmente
    renderizarConvocatorias();
});
</script>









            <script src="/js/favoritos.js"></script>