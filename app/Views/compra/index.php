<?= $this->include('layouts/header') ?>

<div class="bg-light py-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="bg-white rounded-4 shadow-sm p-6">
                    <div class="text-center mb-6">
                        <h2 class="font-heading text-dark mb-2">Finalizar Compra</h2>
                        <p class="text-muted">Completa tu compra de forma segura</p>
                    </div>

                    <!-- Resumen del producto -->
                    <div class="card border-0 bg-light mb-6">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <?php if (!empty($producto['imagen_principal'])): ?>
                                        <img src="<?= base_url('assets/img/productos/' . $producto['imagen_principal']) ?>" 
                                             class="img-fluid rounded" alt="<?= esc($producto['nombre']) ?>">
                                    <?php else: ?>
                                        <div class="bg-secondary rounded d-flex align-items-center justify-content-center" style="height: 100px;">
                                            <i class="fas fa-image text-white"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="mb-2"><?= esc($producto['nombre']) ?></h5>
                                    <p class="text-muted mb-0"><?= esc($producto['descripcion']) ?></p>
                                </div>
                                <div class="col-md-3 text-end">
                                    <?php if ($producto['precio_oferta'] > 0): ?>
                                        <div class="text-decoration-line-through text-muted">$<?= number_format($producto['precio'], 0, ',', '.') ?></div>
                                        <div class="h4 text-danger mb-0">$<?= number_format($producto['precio_oferta'], 0, ',', '.') ?></div>
                                    <?php else: ?>
                                        <div class="h4 text-dark mb-0">$<?= number_format($producto['precio'], 0, ',', '.') ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Formulario de compra -->
                    <form action="<?= base_url('compra/procesar') ?>" method="POST">
                        <input type="hidden" name="producto_id" value="<?= $producto['id'] ?>">
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Nombre completo *</label>
                                <input type="text" class="form-control" name="nombre" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Teléfono *</label>
                                <input type="tel" class="form-control" name="telefono" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Ciudad *</label>
                                <input type="text" class="form-control" name="ciudad" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Método de pago</label>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="card border-2 h-100">
                                        <div class="card-body text-center p-3">
                                            <input type="radio" name="metodo_pago" value="tarjeta" id="tarjeta" class="form-check-input mb-2" checked>
                                            <label for="tarjeta" class="form-check-label d-block">
                                                <i class="fas fa-credit-card fa-2x text-primary mb-2"></i>
                                                <div>Tarjeta de Crédito</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-2 h-100">
                                        <div class="card-body text-center p-3">
                                            <input type="radio" name="metodo_pago" value="pse" id="pse" class="form-check-input mb-2">
                                            <label for="pse" class="form-check-label d-block">
                                                <i class="fas fa-university fa-2x text-success mb-2"></i>
                                                <div>PSE</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-2 h-100">
                                        <div class="card-body text-center p-3">
                                            <input type="radio" name="metodo_pago" value="efectivo" id="efectivo" class="form-check-input mb-2">
                                            <label for="efectivo" class="form-check-label d-block">
                                                <i class="fas fa-money-bill fa-2x text-warning mb-2"></i>
                                                <div>Efectivo</div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Resumen de pago -->
                        <div class="card border-0 bg-light mb-4">
                            <div class="card-body">
                                <h6 class="mb-3">Resumen de pago</h6>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Subtotal:</span>
                                    <span>$<?= number_format($producto['precio_oferta'] > 0 ? $producto['precio_oferta'] : $producto['precio'], 0, ',', '.') ?></span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>IVA (19%):</span>
                                    <span>$<?= number_format(($producto['precio_oferta'] > 0 ? $producto['precio_oferta'] : $producto['precio']) * 0.19, 0, ',', '.') ?></span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between fw-bold">
                                    <span>Total:</span>
                                    <span class="text-danger">$<?= number_format(($producto['precio_oferta'] > 0 ? $producto['precio_oferta'] : $producto['precio']) * 1.19, 0, ',', '.') ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="<?= base_url('productos/detalle/' . $producto['id']) ?>" class="btn btn-outline-secondary me-md-2">
                                <i class="fas fa-arrow-left me-1"></i> Volver
                            </a>
                            <button type="submit" class="btn btn-danger btn-lg px-5">
                                <i class="fas fa-lock me-2"></i> Pagar Ahora
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer') ?>