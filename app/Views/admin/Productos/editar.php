<?= $this->include('admin/templates/header') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    
    <?= $this->include('admin/templates/navbar') ?>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                            <div>
                                <h4 class="card-title card-title-dash">Editar Producto</h4>
                                <p class="card-subtitle card-subtitle-dash">Modificar información del producto</p>
                            </div>
                            <div>
                                <div class="btn-wrapper">
                                    <a href="<?= base_url('admin/productos') ?>" class="btn btn-secondary text-white me-0">
                                        <i class="mdi mdi-arrow-left"></i> Volver
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" role="tabpanel">
                                <div class="row">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <form action="<?= base_url('admin/productos/actualizar/' . $producto['id']) ?>" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nombre">Nombre del Producto</label>
                                                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $producto['nombre'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="categoria_id">Categoría</label>
                                                                <select class="form-control" id="categoria_id" name="categoria_id" required>
                                                                    <option value="">Seleccionar categoría</option>
                                                                    <?php foreach ($categorias as $categoria): ?>
                                                                        <option value="<?= $categoria['id'] ?>" <?= $producto['categoria_id'] == $categoria['id'] ? 'selected' : '' ?>>
                                                                            <?= $categoria['nombre'] ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="precio">Precio</label>
                                                                <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="<?= $producto['precio'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="precio_oferta">Precio Oferta</label>
                                                                <input type="number" step="0.01" class="form-control" id="precio_oferta" name="precio_oferta" value="<?= $producto['precio_oferta'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="stock">Stock</label>
                                                                <input type="number" class="form-control" id="stock" name="stock" value="<?= $producto['stock'] ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="descripcion">Descripción</label>
                                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4"><?= $producto['descripcion'] ?></textarea>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="imagen_principal">Imagen Principal</label>
                                                                <?php if (!empty($producto['imagen_principal'])): ?>
                                                                    <div class="mb-2">
                                                                        <img src="<?= base_url('public/assets/img/productos/' . $producto['imagen_principal']) ?>" 
                                                                             alt="Imagen actual" class="img-thumbnail" style="max-height: 100px;">
                                                                    </div>
                                                                <?php endif; ?>
                                                                <input type="file" class="form-control" id="imagen_principal" name="imagen_principal" accept="image/*">
                                                                <small class="text-muted">Dejar vacío para mantener la imagen actual</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="estado">Estado</label>
                                                                <select class="form-control" id="estado" name="estado">
                                                                    <option value="activo" <?= $producto['estado'] == 'activo' ? 'selected' : '' ?>>Activo</option>
                                                                    <option value="inactivo" <?= $producto['estado'] == 'inactivo' ? 'selected' : '' ?>>Inactivo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="mas_vendido" name="mas_vendido" value="1" <?= $producto['mas_vendido'] ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="mas_vendido">
                                                            Marcar como más vendido
                                                        </label>
                                                    </div>
                                                    
                                                    <div class="mt-4">
                                                        <button type="submit" class="btn btn-primary me-2">
                                                            <i class="mdi mdi-content-save"></i> Actualizar Producto
                                                        </button>
                                                        <a href="<?= base_url('admin/productos') ?>" class="btn btn-secondary">
                                                            Cancelar
                                                        </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->

<?= $this->include('admin/templates/footer') ?>