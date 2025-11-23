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
                            $adicionales = json_decode($producto['imagenes_adicionales'] ?? '[]', true);
                            if (is_array($adicionales)) {
                                $imagenes = array_merge($imagenes, $adicionales);
                            }
                            ?>

                            <?php if (!empty($imagenes)): ?>
                                <div id="productCarousel" class="carousel slide w-100" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php foreach ($imagenes as $index => $img): ?>
                                            <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                                <img src="<?= base_url('assets/img/productos/' . $img) ?>"
                                                    class="d-block w-100 rounded shadow-sm"
                                                    alt="<?= esc($producto['nombre']) ?>"
                                                    style="max-height: 400px; object-fit: contain;">
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
                                            class="fs-5 fw-bold text-danger">$<?= number_format($producto['precio_oferta'], 0, ',', '.') ?></span>
                                        <span
                                            class="fs-7 text-secondary text-decoration-line-through">$<?= number_format($producto['precio'], 0, ',', '.') ?></span>
                                    <?php else: ?>
                                        <span
                                            class="fs-5 fw-bold text-dark">$<?= number_format($producto['precio'], 0, ',', '.') ?></span>
                                    <?php endif; ?>
                                </div>
                                <p class="fs-9 text-secondary lh-lg mb-8">
                                    <?= nl2br(esc($producto['descripcion'])) ?>
                                </p>
                            </div>

                            <div class="d-grid gap-4">
                                <a href="https://wa.me/573001234567?text=Hola,%20estoy%20interesado%20en%20<?= urlencode($producto['nombre']) ?>"
                                    target="_blank"
                                    class="btn btn-danger btn-lg fs-9 py-3 fw-bold d-flex align-items-center justify-content-center gap-2">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                                    </svg>
                                    Consultar por WhatsApp
                                </a>
                                <a href="<?= base_url('productos') ?>"
                                    class="btn btn-outline-light text-secondary fs-9 py-3 fw-medium">
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

<?= $this->include('layouts/footer') ?>