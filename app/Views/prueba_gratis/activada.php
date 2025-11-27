<?= $this->include('layouts/header') ?>

<section class="position-relative py-20 bg-white overflow-hidden" style="background-image: url('<?= media_url() ?>euphoria-assets/elements/pattern-light.png')">
    <div class="position-absolute top-0 start-0 h-100 w-100" style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #ffffff 100%);"></div>
    
    <div class="container position-relative" style="z-index: 1;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="bg-white rounded-4 shadow-lg p-8 p-lg-12 text-center">
                    
                    <!-- Icono de éxito -->
                    <div class="mb-6">
                        <div class="d-inline-flex align-items-center justify-content-center bg-success rounded-circle" style="width: 80px; height: 80px;">
                            <i class="fas fa-check text-white" style="font-size: 2rem;"></i>
                        </div>
                    </div>

                    <!-- Header -->
                    <div class="mb-8">
                        <span class="badge bg-success text-white shadow text-uppercase fs-13 fw-medium mb-4">¡Prueba Activada!</span>
                        <h1 class="font-heading fs-4 mb-4" style="letter-spacing: -1px;">
                            Tu prueba de <span class="text-danger"><?= esc($producto['nombre']) ?></span> está activa
                        </h1>
                        <p class="fs-9 fw-medium text-secondary mb-0">
                            Tienes acceso completo hasta el <strong><?= $fechaExpiracion ?></strong>
                        </p>
                    </div>

                    <!-- Información del producto -->
                    <div class="bg-light rounded-3 p-6 mb-8">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <?php if (!empty($producto['imagen_principal'])): ?>
                                    <img src="<?= base_url('assets/img/productos/' . $producto['imagen_principal']) ?>" 
                                         alt="<?= esc($producto['nombre']) ?>" 
                                         class="img-fluid rounded" style="max-height: 120px;">
                                <?php else: ?>
                                    <div class="bg-secondary rounded d-flex align-items-center justify-content-center" style="height: 120px;">
                                        <i class="fas fa-box fa-3x text-white"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-8 text-start">
                                <h3 class="fs-7 fw-bold mb-3"><?= esc($producto['nombre']) ?></h3>
                                <p class="fs-10 text-secondary mb-0"><?= esc($producto['descripcion']) ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Próximos pasos -->
                    <div class="mb-8">
                        <h3 class="fs-7 fw-bold mb-4">¿Qué sigue ahora?</h3>
                        <div class="row g-4">
                            <div class="col-12 col-md-4">
                                <div class="text-center">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-danger rounded-circle mb-3" style="width: 50px; height: 50px;">
                                        <i class="fas fa-download text-white"></i>
                                    </div>
                                    <h4 class="fs-9 fw-semibold mb-2">1. Descarga</h4>
                                    <p class="fs-10 text-secondary mb-0">Te enviaremos el enlace de descarga por email</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="text-center">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-danger rounded-circle mb-3" style="width: 50px; height: 50px;">
                                        <i class="fas fa-cog text-white"></i>
                                    </div>
                                    <h4 class="fs-9 fw-semibold mb-2">2. Configura</h4>
                                    <p class="fs-10 text-secondary mb-0">Nuestro equipo te ayudará con la configuración</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="text-center">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-danger rounded-circle mb-3" style="width: 50px; height: 50px;">
                                        <i class="fas fa-rocket text-white"></i>
                                    </div>
                                    <h4 class="fs-9 fw-semibold mb-2">3. ¡Úsalo!</h4>
                                    <p class="fs-10 text-secondary mb-0">Disfruta de 14 días de acceso completo</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Botones de acción -->
                    <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                        <a href="https://wa.me/573001234567?text=Hola, acabo de activar mi prueba gratis de <?= urlencode($producto['nombre']) ?>" 
                           target="_blank" 
                           class="btn btn-success btn-lg px-6 py-3 fs-9 fw-bold">
                            <i class="fab fa-whatsapp me-2"></i>
                            Contactar Soporte
                        </a>
                        <a href="<?= base_url('productos') ?>" 
                           class="btn btn-outline-secondary btn-lg px-6 py-3 fs-9 fw-medium">
                            Ver Más Productos
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('layouts/footer') ?>