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
                                <h4 class="card-title card-title-dash">Crear Usuario</h4>
                                <p class="card-subtitle card-subtitle-dash">Agregar nuevo usuario al sistema</p>
                            </div>
                            <div>
                                <div class="btn-wrapper">
                                    <a href="<?= base_url('admin/usuarios') ?>" class="btn btn-secondary text-white me-0">
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
                                                
                                                <?php if (session()->getFlashdata('errors')): ?>
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                                                <li><?= $error ?></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>

                                                <form action="<?= base_url('admin/usuarios/guardar') ?>" method="POST">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="password">Contraseña</label>
                                                                <input type="password" class="form-control" id="password" name="password" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="rol">Rol</label>
                                                                <select class="form-control" id="rol" name="rol" required>
                                                                    <option value="">Seleccionar rol</option>
                                                                    <option value="administrador" <?= old('rol') == 'administrador' ? 'selected' : '' ?>>Administrador</option>
                                                                    <option value="cliente" <?= old('rol') == 'cliente' ? 'selected' : '' ?>>Cliente</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="estado">Estado</label>
                                                                <select class="form-control" id="estado" name="estado" required>
                                                                    <option value="activo" <?= old('estado') == 'activo' ? 'selected' : '' ?>>Activo</option>
                                                                    <option value="inactivo" <?= old('estado') == 'inactivo' ? 'selected' : '' ?>>Inactivo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4">
                                                        <button type="submit" class="btn btn-primary me-2">
                                                            <i class="mdi mdi-content-save"></i> Crear Usuario
                                                        </button>
                                                        <a href="<?= base_url('admin/usuarios') ?>" class="btn btn-secondary">
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
