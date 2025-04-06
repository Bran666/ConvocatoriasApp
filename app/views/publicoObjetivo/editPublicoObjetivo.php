<!-- Contenido Principal -->
<div class="col-md-10">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Editar Público Objetivo
                <a href="/publicoObjetivo/init" class="btn btn-light float-end">
                    <i class="fas fa-arrow-left me-2"></i>Volver
                </a>
            </h4>
        </div>

        <!-- Cuerpo del formulario -->
        <div class="card-body">
            <form action="/publicoObjetivo/update/<?= $infoReal->id ?>" method="POST">
                <input type="hidden" name="id" value="<?= $infoReal->id ?>">

                <!-- Campo Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre</label>
                    <input type="text" name="nombre" value="<?= $infoReal->nombre ?>" class="form-control" required>
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
