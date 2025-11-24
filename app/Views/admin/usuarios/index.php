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
                                <h4 class="card-title card-title-dash">Gestión de Usuarios</h4>
                                <p class="card-subtitle card-subtitle-dash">Administrar usuarios del sistema</p>
                            </div>
                            <div>
                                <div class="btn-wrapper">
                                    <a href="<?= base_url('admin/usuarios/crear') ?>"
                                        class="btn btn-primary text-white me-0">
                                        <i class="mdi mdi-plus"></i> Nuevo Usuario
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?php if (session()->getFlashdata('mensaje')): ?>
                            <div class="alert alert-success mt-3">
                                <?= session()->getFlashdata('mensaje') ?>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger mt-3">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" role="tabpanel">
                                <div class="row">
                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card card-rounded">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Email</th>
                                                                <th>Rol</th>
                                                                <th>Estado</th>
                                                                <th>Fecha Creación</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($usuarios as $usuario): ?>
                                                                <tr>
                                                                    <td><?= $usuario['id'] ?></td>
                                                                    <td><?= $usuario['email'] ?></td>
                                                                    <td>
                                                                        <span
                                                                            class="badge badge-opacity-<?= $usuario['rol'] == 'administrador' ? 'warning' : 'info' ?>">
                                                                            <?= ucfirst($usuario['rol']) ?>
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="badge badge-opacity-<?= $usuario['estado'] == 'activo' ? 'success' : 'danger' ?>">
                                                                            <?= ucfirst($usuario['estado']) ?>
                                                                        </span>
                                                                    </td>
                                                                    <td><?= date('d/m/Y H:i', strtotime($usuario['created_at'])) ?>
                                                                    </td>
                                                                    <td>
                                                                        <a href="<?= base_url('admin/usuarios/editar/' . $usuario['id']) ?>"
                                                                            class="btn btn-primary btn-sm text-white">
                                                                            <i class="mdi mdi-pencil"></i>
                                                                        </a>
                                                                        <?php if (session()->get('id') != $usuario['id']): ?>
                                                                            <a href="<?= base_url('admin/usuarios/eliminar/' . $usuario['id']) ?>"
                                                                                class="btn btn-danger btn-sm text-white"
                                                                                onclick="return confirm('¿Estás seguro de eliminar este usuario?')">
                                                                                <i class="mdi mdi-delete"></i>
                                                                            </a>
                                                                        <?php endif; ?>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
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