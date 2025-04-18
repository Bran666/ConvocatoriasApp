<!-- Contenido Principal -->
<div class="col-md-10">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">
                <i class="fas fa-edit me-2"></i> Editar Público Objetivo
                <a href="/publicoObjetivo/init" class="btn btn-light float-end">
                    <i class="fas fa-arrow-left me-2"></i>Volver
                </a>
            </h4>
        </div>

        <!-- Cuerpo del formulario -->
        <div class="card-body">
            <form action="/publicoObjetivo/update/<?= $infoReal->id ?>" method="POST">
                <input type="hidden" name="id" value="<?= $infoReal->id ?>">

                <!-- Campo ID -->
                <div class="mb-3">
                    <label for="id" class="form-label fw-semibold">ID</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                        <input type="text" name="id" value="<?= $infoReal->id ?>" class="form-control" readonly>
                    </div>
                </div>

                <!-- Campo Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-semibold">Nombre</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                        <input type="text" name="nombre" value="<?= $infoReal->nombre ?>" class="form-control" required>
                    </div>
                </div>

                <!-- Botón Actualizar -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-2"></i> Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
