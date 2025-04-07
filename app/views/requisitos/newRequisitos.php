<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Agregar Requisito
                        <a href="/requisitosCrud/init" class="btn btn-danger float-end">Volver</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="/requisitos/create" method="POST">
                        <div class="mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="observaciones">Observaciones</label>
                            <textarea name="observaciones" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="idEntidad">Entidad</label>
                            <select name="idEntidad" class="form-control" required>
                                <option value="">Seleccione una entidad</option>
                                <?php if(isset($entidades) && !empty($entidades)): ?>
                                    <?php foreach($entidades as $entidad): ?>
                                        <option value="<?= $entidad->id ?>"><?= htmlspecialchars($entidad->nombre) ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="idRequisitoSeleccion">Requisito Selección</label>
                            <select name="idRequisitoSeleccion" class="form-control" required>
                                <option value="">Seleccione un requisito</option>
                                <?php if(isset($requisitosSeleccion) && !empty($requisitosSeleccion)): ?>
                                    <?php foreach($requisitosSeleccion as $requisito): ?>
                                        <option value="<?= $requisito->id ?>"><?= htmlspecialchars($requisito->nombre) ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>