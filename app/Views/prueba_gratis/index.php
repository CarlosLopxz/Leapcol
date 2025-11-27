<?= $this->include('layouts/header') ?>

<section class="position-relative py-20 bg-white overflow-hidden" style="background-image: url('<?= media_url() ?>euphoria-assets/elements/pattern-light.png')">
    <div class="position-absolute top-0 start-0 h-100 w-100" style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #ffffff 100%);"></div>
    
    <div class="container position-relative" style="z-index: 1;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="bg-white rounded-4 shadow-lg p-8 p-lg-12">
                    
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <?php if ($prueba): ?>
                            <span class="badge bg-success text-white shadow text-uppercase fs-13 fw-medium mb-4">Prueba Activa</span>
                            <h1 class="font-heading fs-4 mb-4" style="letter-spacing: -1px;">
                                Tu prueba de <span class="text-danger"><?= esc($producto['nombre']) ?></span> está activa
                            </h1>
                            <p class="fs-9 fw-medium text-secondary mb-0">
                                Expira el <strong><?= date('d/m/Y', strtotime($prueba['fecha_expiracion'])) ?></strong>
                            </p>
                        <?php else: ?>
                            <span class="badge bg-danger-dark text-danger shadow text-uppercase fs-13 fw-medium mb-4">Prueba Gratis</span>
                            <h1 class="font-heading fs-4 mb-4" style="letter-spacing: -1px;">
                                ¡Prueba <span class="text-danger"><?= esc($producto['nombre']) ?></span> GRATIS por 14 días!
                            </h1>
                            <p class="fs-9 fw-medium text-secondary mb-0">
                                Sin tarjeta de crédito • Cancela cuando quieras • Acceso completo
                            </p>
                        <?php endif; ?>
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
                                <p class="fs-10 text-secondary mb-3"><?= esc($producto['descripcion']) ?></p>
                                <?php if ($prueba): ?>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <span class="badge bg-success me-2">Activa</span>
                                        <small class="text-muted">
                                            Desde: <?= date('d/m/Y', strtotime($prueba['fecha_inicio'])) ?>
                                        </small>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botones de control -->
                    <div class="text-center mb-8">
                        <?php if ($prueba): ?>
                            <?php 
                            $diasRestantes = ceil((strtotime($prueba['fecha_expiracion']) - time()) / (60 * 60 * 24));
                            ?>
                            <div class="alert alert-info mb-6">
                                <h4 class="fs-8 fw-bold mb-2">
                                    <i class="fas fa-hourglass-half me-2"></i>
                                    Te quedan <?= $diasRestantes ?> días
                                </h4>
                                <p class="mb-0">Aprovecha al máximo tu prueba gratuita</p>
                            </div>
                            <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                                <a href="https://wa.me/573001234567?text=Hola, tengo una prueba activa de <?= urlencode($producto['nombre']) ?> y necesito ayuda" 
                                   target="_blank" 
                                   class="btn btn-success btn-lg px-6 py-3 fs-9 fw-bold">
                                    <i class="fab fa-whatsapp me-2"></i>
                                    Contactar Soporte
                                </a>
                                <a href="<?= base_url('prueba-gratis/cancelar/' . $producto['id']) ?>" 
                                   class="btn btn-outline-danger btn-lg px-6 py-3 fs-9 fw-medium"
                                   onclick="return confirm('¿Estás seguro de cancelar tu prueba gratis?')">
                                    <i class="fas fa-times me-2"></i>
                                    Cancelar Prueba
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                                <a href="<?= base_url('prueba-gratis/activar/' . $producto['id']) ?>" 
                                   class="btn btn-danger btn-lg px-8 py-3 fs-9 fw-bold shadow-lg">
                                    <i class="fas fa-rocket me-2"></i>
                                    Activar Prueba Gratis
                                </a>
                                <a href="<?= base_url('productos') ?>" 
                                   class="btn btn-outline-secondary btn-lg px-6 py-3 fs-9 fw-medium">
                                    <i class="fas fa-arrow-left me-2"></i>
                                    Volver a Productos
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Beneficios -->
                    <div class="mt-10 pt-8 border-top">
                        <h3 class="fs-7 fw-bold text-center mb-6">¿Qué incluye tu prueba gratis?</h3>
                        <div class="row g-6">
                            <div class="col-12 col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <div>
                                        <h4 class="fs-9 fw-semibold mb-1">Acceso completo</h4>
                                        <p class="fs-10 text-secondary mb-0">Todas las funciones disponibles sin restricciones</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-headset text-success me-3 mt-1"></i>
                                    <div>
                                        <h4 class="fs-9 fw-semibold mb-1">Soporte 24/7</h4>
                                        <p class="fs-10 text-secondary mb-0">Te ayudamos a configurar todo paso a paso</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-cloud text-success me-3 mt-1"></i>
                                    <div>
                                        <h4 class="fs-9 fw-semibold mb-1">En la nube</h4>
                                        <p class="fs-10 text-secondary mb-0">Accede desde cualquier dispositivo, en cualquier lugar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-shield-alt text-success me-3 mt-1"></i>
                                    <div>
                                        <h4 class="fs-9 fw-semibold mb-1">100% seguro</h4>
                                        <p class="fs-10 text-secondary mb-0">Tus datos protegidos con la mejor tecnología</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>



<?= $this->include('layouts/footer') ?>