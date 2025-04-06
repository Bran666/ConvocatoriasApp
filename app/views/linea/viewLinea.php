
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
                            <a href="/requisitos/init" class="list-group-item list-group-item-action d-flex align-items-center">
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

            <!-- Contenido Principal -->
            <div class="col-md-10">
                <div class="container">
                    <!-- Botón Nuevo con estilo Bootstrap -->
                    <a href="/linea/new" class="btn btn-primary mb-3">
                        <i class="fas fa-plus me-2"></i>
                        Nuevo
                    </a>

                    <!-- Lista de registros -->
                    <?php if (isset($lineas) && is_array($lineas)): ?>
                        <div class="list-group">
                            <?php foreach ($lineas as $key => $value): ?>
                                <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-light">
                                    <div>
                                        <span class="fw-bold"><?= $value->id ?> - <?= $value->nombre ?></span>
                                        <span class="d-block text-muted"><?= $value->descripcion ?></span>
                                    </div>
                                    <div class="btn-group">
                                        <a href="/linea/view/<?= $value->id ?>" class="btn btn-sm btn-outline-primary">Consultar</a>
                                        <a href="/linea/edit/<?= $value->id ?>" class="btn btn-sm btn-outline-secondary">Editar</a>
                                        <a href="/linea/delete/<?= $value->id ?>" class="btn btn-sm btn-outline-danger">Eliminar</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

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