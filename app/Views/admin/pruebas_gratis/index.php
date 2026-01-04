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
                                <h4 class="card-title card-title-dash">Pruebas Gratis</h4>
                                <p class="card-subtitle card-subtitle-dash">Gestión de pruebas gratis activas</p>
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
                                                                <th>Usuario</th>
                                                                <th>Email</th>
                                                                <th>Producto</th>
                                                                <th>Fecha Inicio</th>
                                                                <th>Fecha Expiración</th>
                                                                <th>Estado</th>
                                                                <th>Días Restantes</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if (!empty($pruebas)): ?>
                                                                <?php foreach ($pruebas as $prueba): ?>
                                                                    <?php
                                                                    $fechaExpiracion = new DateTime($prueba['fecha_expiracion']);
                                                                    $fechaActual = new DateTime();
                                                                    $diferencia = $fechaActual->diff($fechaExpiracion);
                                                                    $diasRestantes = $fechaExpiracion > $fechaActual ? $diferencia->days : 0;
                                                                    ?>
                                                                    <tr>
                                                                        <td><?= esc($prueba['usuario_nombre']) ?></td>
                                                                        <td><?= esc($prueba['usuario_email']) ?></td>
                                                                        <td><?= esc($prueba['producto_nombre']) ?></td>
                                                                        <td><?= date('d/m/Y', strtotime($prueba['fecha_inicio'])) ?></td>
                                                                        <td><?= date('d/m/Y', strtotime($prueba['fecha_expiracion'])) ?></td>
                                                                        <td>
                                                                            <?php
                                                                            $badgeClass = match($prueba['estado']) {
                                                                                'activa' => 'success',
                                                                                'expirada' => 'danger',
                                                                                'cancelada' => 'secondary',
                                                                                default => 'secondary'
                                                                            };
                                                                            ?>
                                                                            <span class="badge badge-<?= $badgeClass ?>"><?= ucfirst($prueba['estado']) ?></span>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($prueba['estado'] === 'activa'): ?>
                                                                                <span class="badge badge-<?= $diasRestantes > 7 ? 'success' : ($diasRestantes > 3 ? 'warning' : 'danger') ?>">
                                                                                    <?= $diasRestantes ?> días
                                                                                </span>
                                                                            <?php else: ?>
                                                                                -
                                                                            <?php endif; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($prueba['estado'] === 'activa'): ?>
                                                                                <a href="<?= base_url('admin/pruebas-gratis/cancelar/' . $prueba['id']) ?>" 
                                                                                   class="btn btn-sm btn-danger"
                                                                                   onclick="return confirm('¿Estás seguro de cancelar esta prueba gratis?')">
                                                                                    Cancelar
                                                                                </a>
                                                                            <?php endif; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            <?php else: ?>
                                                                <tr>
                                                                    <td colspan="8" class="text-center">No hay pruebas gratis registradas</td>
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