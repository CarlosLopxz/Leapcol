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
                      <h4 class="card-title card-title-dash">Panel de Control</h4>
                    </div>
                    <div>
                      <div class="btn-wrapper">
                        <a href="<?= base_url() ?>" class="btn btn-danger text-white me-2"><i class="mdi mdi-home"></i> Ir a Landing</a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" role="tabpanel">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div>
                              <p class="statistics-title">Productos Activos</p>
                              <h3 class="rate-percentage">4</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+1</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">Usuarios Registrados</p>
                              <h3 class="rate-percentage">3</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+1</span></p>
                            </div>
                            <div>
                              <p class="statistics-title">Pruebas Gratis</p>
                              <h3 class="rate-percentage">1</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>Activa</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Suscripciones</p>
                              <h3 class="rate-percentage">2</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>Activas</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Categorías</p>
                              <h3 class="rate-percentage">4</h3>
                              <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>Activas</span></p>
                            </div>
                            <div class="d-none d-md-block">
                              <p class="statistics-title">Mensajes Chat</p>
                              <h3 class="rate-percentage">0</h3>
                              <p class="text-muted d-flex"><i class="mdi mdi-menu-right"></i><span>Sin cambios</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">Resumen de Ventas</h4>
                                      <p class="card-subtitle card-subtitle-dash">Ingresos y suscripciones del mes actual</p>
                                    </div>
                                    <div>
                                      <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> This month </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                          <h6 class="dropdown-header">Settings</h6>
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                                    <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                      <h2 class="me-2 fw-bold">$829.98</h2>
                                      <h4 class="me-2">COP</h4>
                                      <h4 class="text-success">(+100%)</h4>
                                    </div>
                                    <div class="me-3">
                                      <div id="marketingOverview-legend"></div>
                                    </div>
                                  </div>
                                  <div class="chartjs-bar-wrapper mt-3">
                                    <canvas id="marketingOverview"></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">Usuarios Recientes</h4>
                                      <p class="card-subtitle card-subtitle-dash">Nuevos registros y actividad</p>
                                    </div>
                                    <div>
                                      <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Nuevo Usuario</button>
                                    </div>
                                  </div>
                                  <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                      <thead>
                                        <tr>
                                          <th>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false" id="check-all"><i class="input-helper"></i></label>
                                            </div>
                                          </th>
                                          <th>Usuario</th>
                                          <th>Email</th>
                                          <th>Suscripciones</th>
                                          <th>Estado</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex ">
                                              <img src="<?= base_url('public/assets/dashboard/images/faces/face1.jpg') ?>" alt="">
                                              <div>
                                                <h6>Carlos Lopez</h6>
                                                <p>Administrador</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>carloslxpxz@gmail.com</h6>
                                            <p>Cuenta principal</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">Admin</p>
                                                <p>Total</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-success">Activo</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex">
                                              <img src="<?= base_url('public/assets/dashboard/images/faces/face2.jpg') ?>" alt="">
                                              <div>
                                                <h6>Carlos</h6>
                                                <p>Cliente</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>carlos@gmail.com</h6>
                                            <p>Usuario activo</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">2 activas</p>
                                                <p>2/2</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-success">Activo</div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <div class="form-check form-check-flat mt-0">
                                              <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="d-flex">
                                              <img src="<?= base_url('public/assets/dashboard/images/faces/face3.jpg') ?>" alt="">
                                              <div>
                                                <h6>Leapcol</h6>
                                                <p>Cliente</p>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <h6>leapcol.soporte@gmail.com</h6>
                                            <p>Cuenta soporte</p>
                                          </td>
                                          <td>
                                            <div>
                                              <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-warning">Sin suscripciones</p>
                                                <p>0/0</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="badge badge-opacity-success">Activo</div>
                                          </td>
                                        </tr>

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
          </div>
         
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    
    <?= $this->include('admin/templates/footer') ?>