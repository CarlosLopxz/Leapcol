<?= $this->extend('sistemas/Inventario/Layouts/main') ?>

<?= $this->section('content') ?>

<!-- Información de la Prueba -->
<?php if ($prueba): ?>
<div class="alert alert-info mb-4">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h5><i class="fas fa-clock me-2"></i>Prueba Gratis Activa</h5>
            <p class="mb-0">Cliente: <strong><?= esc($cliente['nombre'] ?? 'N/A') ?></strong> | 
            Email: <strong><?= esc($cliente['email'] ?? 'N/A') ?></strong> | 
            Expira: <strong><?= date('d/m/Y', strtotime($prueba['fecha_expiracion'])) ?></strong></p>
        </div>
        <div class="col-md-4 text-end">
            <span class="badge bg-<?= $dias_restantes > 7 ? 'success' : ($dias_restantes > 3 ? 'warning' : 'danger') ?> fs-6">
                <?= $dias_restantes ?> días restantes
            </span>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card">
            <div class="stats-icon" style="background: linear-gradient(135deg, #28a745, #20c997);">
                <i class="fas fa-boxes"></i>
            </div>
            <div class="stats-number">1,247</div>
            <div class="stats-label">Total Productos</div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card">
            <div class="stats-icon" style="background: linear-gradient(135deg, #ffc107, #fd7e14);">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="stats-number">23</div>
            <div class="stats-label">Stock Bajo</div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card">
            <div class="stats-icon" style="background: linear-gradient(135deg, #17a2b8, #6f42c1);">
                <i class="fas fa-truck"></i>
            </div>
            <div class="stats-number">45</div>
            <div class="stats-label">Proveedores</div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="stats-card">
            <div class="stats-icon" style="background: linear-gradient(135deg, #dc3545, #e83e8c);">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="stats-number">$125,430</div>
            <div class="stats-label">Valor Inventario</div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-bolt me-2"></i>Acciones Rápidas</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-primary w-100" onclick="showModal('addProduct')">
                            <i class="fas fa-plus me-2"></i>
                            Agregar Producto
                        </button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-success w-100" onclick="showModal('addStock')">
                            <i class="fas fa-arrow-up me-2"></i>
                            Entrada de Stock
                        </button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-warning w-100" onclick="showModal('removeStock')">
                            <i class="fas fa-arrow-down me-2"></i>
                            Salida de Stock
                        </button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-info w-100" onclick="generateReport()">
                            <i class="fas fa-file-pdf me-2"></i>
                            Generar Reporte
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity & Low Stock -->
<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-history me-2"></i>Actividad Reciente</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Producto</th>
                                <th>Acción</th>
                                <th>Cantidad</th>
                                <th>Usuario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2024-01-15 10:30</td>
                                <td>Laptop Dell XPS 13</td>
                                <td><span class="badge bg-success">Entrada</span></td>
                                <td>+5</td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                                <td>2024-01-15 09:15</td>
                                <td>Mouse Logitech MX</td>
                                <td><span class="badge bg-danger">Salida</span></td>
                                <td>-2</td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                                <td>2024-01-14 16:45</td>
                                <td>Teclado Mecánico</td>
                                <td><span class="badge bg-primary">Nuevo</span></td>
                                <td>10</td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                                <td>2024-01-14 14:20</td>
                                <td>Monitor Samsung 24"</td>
                                <td><span class="badge bg-success">Entrada</span></td>
                                <td>+3</td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                                <td>2024-01-14 11:30</td>
                                <td>Cable HDMI</td>
                                <td><span class="badge bg-danger">Salida</span></td>
                                <td>-8</td>
                                <td>Admin</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-exclamation-triangle me-2"></i>Stock Bajo</h5>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <div>
                            <h6 class="mb-1">Cable USB-C</h6>
                            <small class="text-muted">Stock actual: 2</small>
                        </div>
                        <span class="badge bg-danger rounded-pill">Crítico</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <div>
                            <h6 class="mb-1">Adaptador HDMI</h6>
                            <small class="text-muted">Stock actual: 5</small>
                        </div>
                        <span class="badge bg-warning rounded-pill">Bajo</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <div>
                            <h6 class="mb-1">Memoria RAM 8GB</h6>
                            <small class="text-muted">Stock actual: 3</small>
                        </div>
                        <span class="badge bg-danger rounded-pill">Crítico</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <div>
                            <h6 class="mb-1">SSD 256GB</h6>
                            <small class="text-muted">Stock actual: 7</small>
                        </div>
                        <span class="badge bg-warning rounded-pill">Bajo</span>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-outline-primary btn-sm">Ver todos</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-plus me-2"></i>Agregar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" placeholder="Ej: Laptop Dell XPS 13">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoría</label>
                        <select class="form-select">
                            <option>Seleccionar categoría</option>
                            <option>Electrónicos</option>
                            <option>Accesorios</option>
                            <option>Componentes</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Precio</label>
                            <input type="number" class="form-control" placeholder="0.00">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stock Inicial</label>
                            <input type="number" class="form-control" placeholder="0">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" rows="3" placeholder="Descripción del producto"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar Producto</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    function showModal(type) {
        switch(type) {
            case 'addProduct':
                new bootstrap.Modal(document.getElementById('addProductModal')).show();
                break;
            case 'addStock':
                Swal.fire({
                    title: 'Entrada de Stock',
                    html: `
                        <div class="mb-3">
                            <label class="form-label">Producto</label>
                            <select class="form-select" id="product">
                                <option>Laptop Dell XPS 13</option>
                                <option>Mouse Logitech MX</option>
                                <option>Teclado Mecánico</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="quantity" placeholder="0">
                        </div>
                    `,
                    showCancelButton: true,
                    confirmButtonText: 'Agregar Stock',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire('¡Éxito!', 'Stock agregado correctamente', 'success');
                    }
                });
                break;
            case 'removeStock':
                Swal.fire({
                    title: 'Salida de Stock',
                    html: `
                        <div class="mb-3">
                            <label class="form-label">Producto</label>
                            <select class="form-select" id="product">
                                <option>Laptop Dell XPS 13</option>
                                <option>Mouse Logitech MX</option>
                                <option>Teclado Mecánico</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="quantity" placeholder="0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Motivo</label>
                            <select class="form-select">
                                <option>Venta</option>
                                <option>Devolución</option>
                                <option>Daño</option>
                                <option>Otro</option>
                            </select>
                        </div>
                    `,
                    showCancelButton: true,
                    confirmButtonText: 'Registrar Salida',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire('¡Éxito!', 'Salida registrada correctamente', 'success');
                    }
                });
                break;
        }
    }
    
    function generateReport() {
        Swal.fire({
            title: 'Generar Reporte',
            html: `
                <div class="mb-3">
                    <label class="form-label">Tipo de Reporte</label>
                    <select class="form-select">
                        <option>Inventario General</option>
                        <option>Productos con Stock Bajo</option>
                        <option>Movimientos por Fecha</option>
                        <option>Valorización de Inventario</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="form-label">Fecha Desde</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Fecha Hasta</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
            `,
            showCancelButton: true,
            confirmButtonText: 'Generar PDF',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('¡Generando!', 'El reporte se descargará en unos segundos', 'info');
            }
        });
    }
    
    // Simular notificaciones en tiempo real
    setTimeout(() => {
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            icon: 'warning',
            title: 'Stock bajo detectado en Cable USB-C'
        });
    }, 5000);
</script>
<?= $this->endSection() ?>