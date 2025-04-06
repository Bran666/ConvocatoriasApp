<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/login.css">
    
     <!-- Bootstrap 5 CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
    
</head>
<body class="">
   
    <style>
    :root {
        --primary-green: #28a745;
        --dark-green: #218838;
        --light-green: #86df9c;
        --light-gray: #f8f9fa;
        --medium-gray: #6c757d;
        --dark-gray: #343a40;
    }

    /* Estilos para el menú lateral */
    .list-group-item {
        border-radius: 0 !important;
        border-left: 4px solid transparent;
        transition: all 0.2s ease;
    }

    .list-group-item:hover {
        border-left: 4px solid var(--primary-green);
        background-color: var(--light-gray);
    }

    .list-group-item.active {
        background-color: var(--primary-green);
        border-color: var(--primary-green);
    }

    .list-group-item i {
        width: 20px;
    }

    /* Header y footer personalizados */
    .custom-header {
        background: linear-gradient(135deg, var(--primary-green) 0%, var(--light-green) 100%);
        padding: 1rem 0;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .custom-footer {
        background: var(--dark-gray);
        color: white;
        padding: 1.5rem 0;
        margin-top: 3rem;
    }

    .main-wrapper {
        min-height: calc(100vh - 200px);
    }
    
    .btn-primary {
        background-color: var(--primary-green);
        border-color: var(--dark-green);
    }
    
    .btn-primary:hover {
        background-color: var(--dark-green);
        border-color: var(--dark-green);
    }
    
    .card-header.bg-primary {
        background-color: var(--primary-green) !important;
    }
    
    .btn-outline-primary {
        color: var(--primary-green);
        border-color: var(--primary-green);
    }
    
    .btn-outline-primary:hover {
        background-color: var(--primary-green);
        border-color: var(--primary-green);
    }
</style>
<header class="custom-header mb-4">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- Convertido a enlace que lleva al dashboard/home -->
                <a href="/dashboard" class="text-decoration-none">
                    <h1 class="text-white mb-0">
                        <i class="fas fa-layer-group me-2"></i>
                        Sistema de Convocatorias
                    </h1>
                </a>
            </div>
            <div class="col-md-6 text-end">
                <!-- Menú desplegable para el usuario -->
                <div class="dropdown">
                    <a class="text-white dropdown-toggle text-decoration-none" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle me-2"></i>
                        Bienvenido, Usuario
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="/perfil"><i class="fas fa-id-card me-2"></i>Ver Perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Main Content Wrapper -->
<div class="main-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- Menú Lateral Estático -->
            <div class="col-md-2">
                <div class="card position-fixed" style="width: 16%;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Menú de Gestión</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <a href="/linea/init" class="list-group-item list-group-item-action active d-flex align-items-center">
                                <i class="fas fa-chart-line me-2"></i> Línea
                            </a>
                            <a href="/publicoObjetivo/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-users me-2"></i> Público Objetivo
                            </a>
                            <a href="/requisitos/view" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-list-check me-2"></i> Requisitos
                            </a>
                            <a href="/entidadInstitucion/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-building me-2"></i> Entidad Institución
                            </a>
                            <a href="/rol/index" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-user-tag me-2"></i> Rol
                            </a>
                            <a href="/requisitosSeleccion/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-tasks me-2"></i> Requisitos Selección
                            </a>
                            <a href="/tipo/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-tag me-2"></i> Tipo
                            </a>
                            <a href="/convocatoria/lista" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-bullhorn me-2"></i> Convocatorias
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        
<?php include_once $content; ?>

<!-- Footer -->
<footer class="custom-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h5>Sistema de Convocatorias</h5>
                <p class="mb-0">© 2023 Todos los derechos reservados</p>
            </div>
            <div class="col-md-6 text-end">
                <div class="social-links">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>


 
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>