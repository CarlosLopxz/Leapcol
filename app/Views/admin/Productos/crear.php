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
                                <h4 class="card-title card-title-dash">Crear Producto</h4>
                                <p class="card-subtitle card-subtitle-dash">Agregar nuevo producto al sistema</p>
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
                                                <form action="<?= base_url('admin/productos/guardar') ?>" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nombre">Nombre del Producto</label>
                                                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="categoria_id">Categoría</label>
                                                                <select class="form-control" id="categoria_id" name="categoria_id" required>
                                                                    <option value="">Seleccionar categoría</option>
                                                                    <?php foreach ($categorias as $categoria): ?>
                                                                        <option value="<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="precio">Precio</label>
                                                                <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="precio_oferta">Precio Oferta</label>
                                                                <input type="number" step="0.01" class="form-control" id="precio_oferta" name="precio_oferta">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="stock">Stock</label>
                                                                <input type="number" class="form-control" id="stock" name="stock" value="0" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="descripcion">Descripción</label>
                                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="4"></textarea>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="imagen_principal">Imagen Principal</label>
                                                                <input type="file" class="form-control" id="imagen_principal" name="imagen_principal" accept="image/*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="estado">Estado</label>
                                                                <select class="form-control" id="estado" name="estado">
                                                                    <option value="activo">Activo</option>
                                                                    <option value="inactivo">Inactivo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="imagenes_adicionales">Imágenes Adicionales</label>
                                                        <input type="file" class="form-control" id="imagenes_adicionales" name="imagenes_adicionales[]" accept="image/*" multiple>
                                                        <small class="text-muted">Puedes seleccionar varias imágenes</small>
                                                    </div>
                                                    
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="mas_vendido" name="mas_vendido" value="1">
                                                        <label class="form-check-label" for="mas_vendido">
                                                            Marcar como más vendido
                                                        </label>
                                                    </div>
                                                    
                                                    <!-- Configuración del Sistema -->
                                                    <div class="card mt-4">
                                                        <div class="card-header">
                                                            <h5 class="mb-0">Configuración del Sistema (Opcional)</h5>
                                                            <small class="text-muted">Si este producto tiene un sistema asociado, completa los siguientes campos</small>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="nombre_sistema">Nombre del Sistema</label>
                                                                        <input type="text" class="form-control" id="nombre_sistema" name="sistema[nombre_sistema]" placeholder="Ej: Sistema de Inventario">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="codigo_sistema">Código del Sistema</label>
                                                                        <input type="text" class="form-control" id="codigo_sistema" name="sistema[codigo_sistema]" placeholder="Ej: inventario">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="ruta_login">Ruta de Login</label>
                                                                        <input type="text" class="form-control" id="ruta_login" name="sistema[ruta_login]" placeholder="Ej: inventario/login">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="ruta_dashboard">Ruta del Dashboard</label>
                                                                        <input type="text" class="form-control" id="ruta_dashboard" name="sistema[ruta_dashboard]" placeholder="Ej: inventario/dashboard">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="controlador">Controlador</label>
                                                                <input type="text" class="form-control" id="controlador" name="sistema[controlador]" placeholder="Ej: Sistemas\\InventarioController">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4">
                                                        <button type="submit" class="btn btn-primary me-2">
                                                            <i class="mdi mdi-content-save"></i> Crear Producto
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