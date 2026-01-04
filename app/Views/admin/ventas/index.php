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
                                <h4 class="card-title card-title-dash">Ventas</h4>
                                <p class="card-subtitle card-subtitle-dash">Gestión de suscripciones y ventas</p>
                            </div>
                        </div>
                        
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" role="tabpanel">
                                <div class="row">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Cliente</th>
                                                                <th>Email</th>
                                                                <th>Producto</th>
                                                                <th>Precio</th>
                                                                <th>Fecha Compra</th>
                                                                <th>Fecha Expiración</th>
                                                                <th>Estado</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if (!empty($ventas)): ?>
                                                                <?php foreach ($ventas as $venta): ?>
                                                                    <tr>
                                                                        <td><?= esc($venta['usuario_nombre']) ?></td>
                                                                        <td><?= esc($venta['usuario_email']) ?></td>
                                                                        <td><?= esc($venta['producto_nombre']) ?></td>
                                                                        <td>$<?= number_format($venta['precio'], 0, ',', '.') ?></td>
                                                                        <td><?= date('d/m/Y', strtotime($venta['fecha_compra'])) ?></td>
                                                                        <td><?= date('d/m/Y', strtotime($venta['fecha_expiracion'])) ?></td>
                                                                        <td>
                                                                            <?php
                                                                            $badgeClass = match($venta['estado']) {
                                                                                'activo' => 'success',
                                                                                'inactivo' => 'warning',
                                                                                'expirado' => 'danger',
                                                                                default => 'secondary'
                                                                            };
                                                                            ?>
                                                                            <span class="badge badge-<?= $badgeClass ?>"><?= ucfirst($venta['estado']) ?></span>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            <?php else: ?>
                                                                <tr>
                                                                    <td colspan="7" class="text-center">No hay ventas registradas</td>
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