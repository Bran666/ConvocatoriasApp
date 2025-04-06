<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Convocatorias</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #28a745;
            --dark-green: #218838;
            --light-green: #86df9c;
            --light-gray: #f8f9fa;
            --medium-gray: #6c757d;
            --dark-gray: #343a40;
        }

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

        /* Sidebar styles */
        .sidebar {
            width: 250px;
            transition: all 0.3s;
        }

        .sidebar.collapsed {
            width: 60px;
        }

        .sidebar.collapsed .menu-text {
            display: none;
        }

        .sidebar.collapsed .list-group-item {
            text-align: center;
            padding: 0.75rem 0.5rem;
        }

        .sidebar.collapsed .list-group-item i {
            margin-right: 0;
        }

        .sidebar-toggle {
            cursor: pointer;
            transition: all 0.3s;
        }

        .sidebar-toggle:hover {
            transform: scale(1.1);
        }

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
            margin-right: 10px;
            transition: all 0.3s;
        }

        /* Button colors */
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
        .custom-hover-green:hover {
        background-color: #198754 !important;
        color: white !important;
        border-color: #198754 !important;
    }

    .custom-hover-red:hover {
        background-color: #dc3545 !important;
        color: white !important;
        border-color: #dc3545 !important;
    }

    .custom-hover-blue:hover {
        background-color: #0d6efd !important;
        color: white !important;
        border-color: #0d6efd !important;
    }
    </style>
</head>
<body>
    <header class="custom-header mb-4">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a href="/dashboard" class="text-decoration-none">
                        <h1 class="text-white mb-0">
                            <i class="fas fa-layer-group me-2"></i>
                            <span>Sistema de Convocatorias</span>
                        </h1>
                    </a>
                </div>
                <div class="col-md-6 text-end">
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

    <div class="main-wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- Menú Lateral -->
                <div class="col-md-2 px-0">
                    <div class="sidebar bg-white shadow" id="sidebar">
                        <div class="card h-100">
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 menu-text">Menú</h5>
                                <i class="fas fa-bars sidebar-toggle" id="sidebarToggle"></i>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group list-group-flush">
                                    <a href="/linea/init" class="list-group-item list-group-item-action active d-flex align-items-center">
                                        <i class="fas fa-chart-line"></i>
                                        <span class="menu-text">Línea</span>
                                    </a>
                                    <a href="/publicoObjetivo/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <i class="fas fa-users"></i>
                                        <span class="menu-text">Público Objetivo</span>
                                    </a>
                                    <a href="/requisitos/view" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <i class="fas fa-list-check"></i>
                                        <span class="menu-text">Requisitos</span>
                                    </a>
                                    <a href="/entidadInstitucion/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <i class="fas fa-building"></i>
                                        <span class="menu-text">Entidad</span>
                                    </a>
                                    <a href="/rol/index" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <i class="fas fa-user-tag"></i>
                                        <span class="menu-text">Rol</span>
                                    </a>
                                    <a href="/requisitos/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <i class="fas fa-tasks"></i>
                                        <span class="menu-text">Requisitos Selección</span>
                                    </a>
                                    <a href="/tipo/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <i class="fas fa-tag"></i>
                                        <span class="menu-text">Tipo</span>
                                    </a>
                                    <a href="/convocatoria/lista" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <i class="fas fa-bullhorn"></i>
                                        <span class="menu-text">Convocatorias</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contenido Principal -->
                <div class="col-md-10">
                    <?php include_once $content; ?>
                </div>
            </div>
        </div>
    </div>

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
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('collapsed');
                
                // Cambiar icono entre hamburguesa y X
                if (sidebar.classList.contains('collapsed')) {
                    sidebarToggle.classList.remove('fa-bars');
                    sidebarToggle.classList.add('fa-times');
                } else {
                    sidebarToggle.classList.remove('fa-times');
                    sidebarToggle.classList.add('fa-bars');
                }
            });
        });
    </script>
</body>
</html>