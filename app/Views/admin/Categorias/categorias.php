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
                                <h4 class="card-title card-title-dash">Categorías</h4>
                                <p class="card-subtitle card-subtitle-dash">Gestión de categorías del sistema</p>
                            </div>
                            <div>
                                <div class="btn-wrapper">
                                    <a href="<?= base_url('admin/categorias/crear') ?>" class="btn btn-success text-white me-0">
                                        <i class="mdi mdi-plus"></i> Nueva Categoría
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
                                                        <h4 class="card-title card-title-dash">Lista de Categorías</h4>
                                                        <p class="card-subtitle card-subtitle-dash">Todas las categorías registradas</p>
                                                    </div>
                                                </div>
                                                <div class="table-responsive mt-1">
                                                    <table class="table select-table">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Categoría</th>
                                                                <th>Descripción</th>
                                                                <th>Productos</th>
                                                                <th>Estado</th>
                                                                <th>Fecha</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if (!empty($categorias)): ?>
                                                                <?php foreach ($categorias as $categoria): ?>
                                                                    <tr>
                                                                        <td><?= $categoria['id'] ?></td>
                                                                        <td>
                                                                            <div>
                                                                                <h6><?= $categoria['nombre'] ?></h6>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p><?= $categoria['descripcion'] ?? 'Sin descripción' ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-info">
                                                                                <?= $categoria['total_productos'] ?? 0 ?> productos
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge badge-opacity-<?= $categoria['estado'] == 'activo' ? 'success' : 'secondary' ?>">
                                                                                <?= ucfirst($categoria['estado']) ?>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p><?= date('d/m/Y', strtotime($categoria['fecha_creacion'])) ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <a href="<?= base_url('admin/categorias/editar/' . $categoria['id']) ?>" 
                                                                                   class="btn btn-sm btn-primary me-2">
                                                                                    <i class="mdi mdi-pencil"></i>
                                                                                </a>
                                                                                <button class="btn btn-sm btn-danger" 
                                                                                        onclick="eliminarCategoria(<?= $categoria['id'] ?>, '<?= $categoria['nombre'] ?>')">
                                                                                    <i class="mdi mdi-delete"></i>
                                                                                </button>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            <?php else: ?>
                                                                <tr>
                                                                    <td colspan="7" class="text-center">No hay categorías registradas</td>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function eliminarCategoria(id, nombre) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: `¿Quieres eliminar la categoría "${nombre}"?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`<?= base_url('admin/categorias/eliminar/') ?>${id}`)
                .then(() => {
                    Swal.fire({
                        title: '¡Eliminado!',
                        text: 'La categoría ha sido eliminada correctamente.',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        location.reload();
                    });
                });
        }
    });
}
</script>

<?= $this->include('admin/templates/footer') ?>