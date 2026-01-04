<?= $this->extend('sistemas/Inventario/Layouts/main') ?>

<?= $this->section('content') ?>

<div class="alert alert-info">
    <h4><i class="fas fa-info-circle me-2"></i>Bienvenido al Sistema de Inventario</h4>
    <p>Este es el sistema de gestión de inventario de Leapcol. Aquí podrás gestionar todos tus productos, proveedores y movimientos de stock.</p>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body text-center">
                <i class="fas fa-tachometer-alt fa-3x text-primary mb-3"></i>
                <h5>Dashboard</h5>
                <p>Accede al panel principal del sistema</p>
                <a href="<?= base_url('inventario/dashboard') ?>" class="btn btn-primary">Ir al Dashboard</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body text-center">
                <i class="fas fa-sign-out-alt fa-3x text-danger mb-3"></i>
                <h5>Cerrar Sesión</h5>
                <p>Salir del sistema de inventario</p>
                <a href="<?= base_url('inventario/logout') ?>" class="btn btn-danger">Cerrar Sesión</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>