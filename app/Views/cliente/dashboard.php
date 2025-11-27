<?= $this->include('cliente/templates/header') ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">


  <?= $this->include('cliente/templates/navbar') ?>

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-12">
          <div class="home-tab">
            
            <div class="tab-content tab-content-basic">
              <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                <!-- Botón para ir a la landing -->
                <div class="row mb-4">
                  <div class="col-12">
                    <div class="d-flex justify-content-end">
                      <a href="<?= base_url() ?>" class="btn btn-danger text-white">
                        <i class="mdi mdi-home me-2"></i>Ir a Landing
                      </a>
                    </div>
                  </div>
                </div>
                <!-- INFORMACION DE SOFTWARE ALQUILADO -->
                <div class="row">
                  <div class="col-12">
                    <div class="row flex-grow">
                      <?php if (empty($suscripciones)): ?>
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="text-center">
                                <h4 class="card-title card-title-dash">No tienes software alquilado</h4>
                                <p class="card-subtitle card-subtitle-dash">Explora nuestros productos y adquiere una
                                  licencia.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php else: ?>
                        <?php foreach ($suscripciones as $suscripcion): ?>
                          <div class="col-md-4 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                  <div>
                                    <h4 class="card-title card-title-dash mb-1"><?= $suscripcion['nombre_producto'] ?></h4>
                                    <p class="text-small text-muted mb-0">Licencia de Software</p>
                                  </div>
                                  <?php
                                  $estadoClass = match ($suscripcion['estado']) {
                                    'activo' => 'success',
                                    'inactivo' => 'warning',
                                    'expirado' => 'danger',
                                    default => 'secondary'
                                  };
                                  ?>
                                  <span
                                    class="badge badge-opacity-<?= $estadoClass ?>"><?= ucfirst($suscripcion['estado']) ?></span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mb-3">
                                  <div>
                                    <p class="text-small text-muted mb-1">Fecha de Compra</p>
                                    <h6 class="mb-0 fw-bold"><?= date('d M, Y', strtotime($suscripcion['fecha_compra'])) ?>
                                    </h6>
                                  </div>
                                  <div class="text-end">
                                    <p class="text-small text-muted mb-1">Expira el</p>
                                    <h6 class="mb-0 fw-bold text-<?= $estadoClass ?>">
                                      <?= date('d M, Y', strtotime($suscripcion['fecha_expiracion'])) ?></h6>
                                  </div>
                                </div>

                                <?php if (!empty($suscripcion['imagen_principal'])): ?>
                                  <div class="mt-3">
                                    <img
                                      src="<?= base_url('public/assets/img/productos/' . $suscripcion['imagen_principal']) ?>"
                                      alt="<?= $suscripcion['nombre_producto'] ?>" class="img-fluid rounded"
                                      style="width: 100%; height: 150px; object-fit: cover;">
                                  </div>
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      <?php endif; ?>
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
</div>


<?= $this->include('cliente/templates/footer') ?>