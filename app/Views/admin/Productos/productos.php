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
                                <h4 class="card-title card-title-dash">Productos</h4>
                                <p class="card-subtitle card-subtitle-dash">Gestión de productos del sistema</p>
                            </div>
                            <div>
                                <div class="btn-wrapper">
                                    <a href="<?= base_url('admin/productos/crear') ?>" class="btn btn-primary text-white me-0">
                                        <i class="mdi mdi-plus"></i> Nuevo Producto
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
                                                <div class="d-sm-flex justify-content-between align-items-start">
                                                    <div>
                                                        <h4 class="card-title card-title-dash">Lista de Productos</h4>
                                                        <p class="card-subtitle card-subtitle-dash">Todos los productos registrados</p>
                                                    </div>
                                                </div>
                                                <div class="table-responsive mt-1">
                                                    <table class="table select-table">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Producto</th>
                                                                <th>Categoría</th>
                                                                <th>Precio</th>
                                                                <th>Stock</th>
                                                                <th>Estado</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if (!empty($productos)): ?>
                                                                <?php foreach ($productos as $producto): ?>
                                                                    <tr>
                                                                        <td><?= $producto['id'] ?></td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <img src="<?= base_url('public/assets/img/productos/' . ($producto['imagen_principal'] ?? 'default.jpg')) ?>" 
                                                                                     alt="<?= $producto['nombre'] ?>" class="me-2" style="width: 40px; height: 40px; object-fit: cover; border-radius: 4px;">
                                                                                <div>
                                                                                    <h6><?= $producto['nombre'] ?></h6>
                                                                                    <?php if ($producto['mas_vendido']): ?>
                                                                                        <div class="badge badge-opacity-warning">Más vendido</div>
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <h6><?= $producto['categoria_nombre'] ?? 'Sin categoría' ?></h6>
                                                                        </td>
                                                                        <td>
                                                                            <div>
                                                                                <h6>$<?= number_format($producto['precio'], 2) ?></h6>
                                                                                <?php if ($producto['precio_oferta']): ?>
                                                                                    <p class="text-success">Oferta: $<?= number_format($producto['precio_oferta'], 2) ?></p>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </td>
                                                                        <td><?= $producto['stock'] ?></td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-<?= $producto['estado'] == 'activo' ? 'success' : 'secondary' ?>">
                                                                                <?= ucfirst($producto['estado']) ?>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <a href="<?= base_url('admin/productos/editar/' . $producto['id']) ?>" 
                                                                                   class="btn btn-sm btn-primary me-2">
                                                                                    <i class="mdi mdi-pencil"></i>
                                                                                </a>
                                                                                <a href="<?= base_url('admin/productos/eliminar/' . $producto['id']) ?>" 
                                                                                   class="btn btn-sm btn-danger"
                                                                                   onclick="return confirm('¿Estás seguro de eliminar este producto?')">
                                                                                    <i class="mdi mdi-delete"></i>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            <?php else: ?>
                                                                <tr>
                                                                    <td colspan="7" class="text-center">No hay productos registrados</td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        </tbody>
                                                    </table>
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
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->

<?= $this->include('admin/templates/footer') ?>