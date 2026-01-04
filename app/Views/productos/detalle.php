<?= $this->include('layouts/header') ?>

<div class="bg-light py-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="bg-white rounded-4 shadow-sm overflow-hidden">
                    <div class="row g-0">
                        <!-- Imagen del producto (Carousel) -->
                        <div class="col-12 col-md-6 bg-light d-flex align-items-center justify-content-center p-10">
                            <?php
                            $imagenes = [];
                            if (!empty($producto['imagen_principal'])) {
                                $imagenes[] = $producto['imagen_principal'];
                            }
                            $adicionales = $producto['imagenes_adicionales'] ?? [];
                            if (is_array($adicionales)) {
                                $imagenes = array_merge($imagenes, $adicionales);
                            }
                            ?>

                            <?php if (!empty($imagenes)): ?>
                                <div id="productCarousel" class="carousel slide w-100" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php foreach ($imagenes as $index => $img): ?>
                                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                                <div class="carousel-image-container">
                                                    <img src="<?= base_url('assets/img/productos/' . $img) ?>"
                                                        class="carousel-image"
                                                        alt="<?= esc($producto['nombre']) ?>">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php if (count($imagenes) > 1): ?>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden">Anterior</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                aria-hidden="true"></span>
                                            <span class="visually-hidden">Siguiente</span>
                                        </button>
                                    <?php endif; ?>
                                </div>
                            <?php else: ?>
                                <div class="text-center text-secondary">
                                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1">
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                        </path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                    </svg>
                                    <p class="mt-2 mb-0">Sin imagen</p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Información del producto -->
                        <div class="col-12 col-md-6 p-10 p-lg-16">
                            <div class="mb-6">
                                <h1 class="font-heading fs-4 mb-4"><?= esc($producto['nombre']) ?></h1>
                                <div class="d-flex align-items-center gap-3 mb-6">
                                    <?php if ($producto['precio_oferta'] > 0): ?>
                                        <span
                                            class="fs-5 fw-bold text-danger">$<?= number_format($producto['precio_oferta'], 0, ',', '.') ?><small class="fs-8 text-muted">/mes</small></span>
                                        <span
                                            class="fs-7 text-secondary text-decoration-line-through">$<?= number_format($producto['precio'], 0, ',', '.') ?></span>
                                    <?php else: ?>
                                        <span
                                            class="fs-5 fw-bold text-dark">$<?= number_format($producto['precio'], 0, ',', '.') ?><small class="fs-8 text-muted">/mes</small></span>
                                    <?php endif; ?>
                                </div>
                                <p class="fs-10 text-secondary mb-8" style="line-height: 1.4; letter-spacing: normal;">
                                    <?= nl2br(esc($producto['descripcion'])) ?>
                                </p>
                            </div>

                            <div class="action-buttons-container">
                                <!-- Botón principal - Prueba Gratis -->
                                <div class="mb-4">
                                    <a href="<?= base_url('prueba-gratis/' . $producto['id']) ?>"
                                        class="btn btn-danger btn-lg w-100 py-3 fw-medium d-flex align-items-center justify-content-center gap-2">
                                        <i class="fas fa-rocket"></i>
                                        <span>Prueba Gratis por 14 días</span>
                                    </a>
                                    <small class="text-muted d-block text-center mt-2">Sin compromiso • Cancela cuando quieras</small>
                                </div>

                                <!-- Botones secundarios -->
                                <div class="row g-2 mb-4">
                                    <div class="col-6">
                                        <a href="<?= base_url('compra/' . $producto['id']) ?>" class="btn btn-dark btn-lg w-100 py-3 fw-medium d-flex align-items-center justify-content-center gap-2">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span class="d-none d-sm-inline">Comprar</span>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="https://wa.me/573001234567?text=Hola,%20estoy%20interesado%20en%20<?= urlencode($producto['nombre']) ?>"
                                            target="_blank"
                                            class="btn btn-dark btn-lg w-100 py-3 fw-medium d-flex align-items-center justify-content-center gap-2">
                                            <i class="fab fa-whatsapp"></i>
                                            <span class="d-none d-sm-inline">WhatsApp</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Información adicional -->
                                <div class="features-list mb-4">
                                    <div class="d-flex align-items-center gap-2 mb-2 text-secondary">
                                        <i class="fas fa-check"></i>
                                        <small>Soporte técnico incluido</small>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 mb-2 text-secondary">
                                        <i class="fas fa-check"></i>
                                        <small>Actualizaciones automáticas</small>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 mb-2 text-secondary">
                                        <i class="fas fa-check"></i>
                                        <small>Garantía de satisfacción</small>
                                    </div>
                                </div>

                                <!-- Botón de navegación -->
                                <div class="text-center">
                                    <a href="<?= base_url('productos') ?>"
                                        class="btn btn-link text-secondary text-decoration-none">
                                        <i class="fas fa-arrow-left me-1"></i>
                                        Ver más productos
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Static Related Products Carousel -->
<div class="container mt-5 mb-5">
    <h3 class="mb-4 font-heading">Productos Relacionados</h3>

    <div class="position-relative">
        <!-- Navigation Buttons -->
        <button
            class="btn btn-white shadow rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 d-flex align-items-center justify-content-center"
            style="width: 48px; height: 48px; margin-left: -24px;"
            onclick="document.getElementById('static-related-products').scrollBy({left: -350, behavior: 'smooth'})">
            <i class="fas fa-chevron-left text-dark"></i>
        </button>

        <button
            class="btn btn-white shadow rounded-circle position-absolute top-50 end-0 translate-middle-y z-2 d-flex align-items-center justify-content-center"
            style="width: 48px; height: 48px; margin-right: -24px;"
            onclick="document.getElementById('static-related-products').scrollBy({left: 350, behavior: 'smooth'})">
            <i class="fas fa-chevron-right text-dark"></i>
        </button>

        <!-- Carousel Container -->
        <div id="static-related-products" class="d-flex gap-4 py-3 px-1 overflow-auto"
            style="scroll-behavior: smooth; scrollbar-width: none;">
            <?php if (!empty($relacionados)): ?>
                <?php foreach ($relacionados as $relacionado): ?>
                    <div class="card shadow-sm border-0 flex-shrink-0 rounded-4 overflow-hidden" style="width: 300px;">
                        <div class="position-relative" style="height: 200px; overflow: hidden;">
                            <div class="d-flex align-items-center justify-content-center h-100 bg-light text-secondary">
                                <?php if (!empty($relacionado['imagen_principal'])): ?>
                                    <img src="<?= base_url('assets/img/productos/' . $relacionado['imagen_principal']) ?>"
                                        class="w-100 h-100 object-fit-cover" alt="<?= esc($relacionado['nombre']) ?>">
                                <?php else: ?>
                                    <i class="fas fa-image fa-3x"></i>
                                <?php endif; ?>
                            </div>
                            <?php if ($relacionado['mas_vendido']): ?>
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-danger fw-normal px-2 py-1" style="font-size: 0.7rem;">Más Vendido</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body d-flex flex-column p-3">
                            <div class="text-danger fw-bold mb-1 text-uppercase" style="font-size: 0.65rem;">
                                <?= esc($relacionado['categoria_nombre']) ?></div>
                            <h5 class="card-title fw-bold text-dark mb-2" style="font-size: 1rem;">
                                <?= esc($relacionado['nombre']) ?></h5>
                            <p class="text-muted mb-3"
                                style="font-size: 0.75rem; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                <?= esc($relacionado['descripcion']) ?></p>

                            <div class="d-flex gap-2 mb-3">
                                <span class="badge bg-light text-dark border fw-normal" style="font-size: 0.7rem;">Stock:
                                    <?= $relacionado['stock'] ?></span>
                                <?php if ($relacionado['precio_oferta'] > 0): ?>
                                    <span class="badge bg-light text-dark border fw-normal" style="font-size: 0.7rem;">Oferta</span>
                                <?php endif; ?>
                            </div>

                            <div class="d-flex align-items-end gap-2 mb-3">
                                <?php if ($relacionado['precio_oferta'] > 0): ?>
                                    <span class="text-decoration-line-through text-muted fw-bold opacity-50"
                                        style="font-size: 0.85rem;">$<?= number_format($relacionado['precio'], 0, ',', '.') ?></span>
                                    <span class="fw-bold text-dark lh-1"
                                        style="font-size: 1.25rem;">$<?= number_format($relacionado['precio_oferta'], 0, ',', '.') ?><small class="text-muted">/mes</small></span>
                                <?php else: ?>
                                    <span class="fw-bold text-dark lh-1"
                                        style="font-size: 1.25rem;">$<?= number_format($relacionado['precio'], 0, ',', '.') ?><small class="text-muted">/mes</small></span>
                                <?php endif; ?>
                            </div>

                            <div class="mt-auto">
                                <a href="<?= base_url('productos/detalle/' . $relacionado['id']) ?>"
                                    class="btn btn-danger w-100 fw-bold py-2" style="font-size: 0.85rem;">Ver Producto</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="w-100 text-center py-5">
                    <p class="text-muted">No hay productos relacionados disponibles en esta categoría.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
    #static-related-products::-webkit-scrollbar {
        display: none;
    }
    
    /* Carousel con altura fija */
    .carousel-image-container {
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
        border-radius: 8px;
    }
    
    .carousel-image {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        border-radius: 8px;
    }
    
    /* Estilos minimalistas para botones rojos */
    .action-buttons-container .btn {
        border-radius: 6px;
        font-weight: 500;
        transition: all 0.2s ease;
        border-width: 1px;
    }
    
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    
    .btn-outline-danger:hover {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }
    
    .btn-outline-secondary:hover {
        background-color: #6c757d;
        border-color: #6c757d;
        color: white;
    }
    
    .features-list {
        background: transparent;
        border: 1px solid #e9ecef;
        border-radius: 6px;
        padding: 1rem;
    }
    
    .features-list small {
        font-weight: 400;
    }
    
    @media (max-width: 576px) {
        .action-buttons-container .btn-lg {
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
        }
        
        .carousel-image-container {
            height: 250px;
        }
    }
</style>

<?= $this->include('layouts/footer') ?>