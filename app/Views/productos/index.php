<?= $this->include('layouts/header') ?>
<style>
    .catalog-header {
        text-align: center;
        color: #2d3748;
        margin-bottom: 2rem;
    }

    .catalog-header h1 {
        font-size: 2.5rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .catalog-header p {
        font-size: 1rem;
        color: #6c757d;
    }

    /* Category Filter Styles */
    .category-filters {
        background: white;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
        border: 1px solid #e9ecef;
    }

    .filter-title {
        font-size: 1rem;
        font-weight: 600;
        color: #495057;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .filter-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .filter-btn {
        padding: 8px 18px;
        border: 1px solid #dee2e6;
        background: white;
        color: #495057;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .filter-btn:hover {
        border-color: #dc3545;
        color: #dc3545;
        background: #fff5f5;
    }

    .filter-btn.active {
        background: #dc3545;
        color: white;
        border-color: #dc3545;
    }

    .product-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        transition: box-shadow 0.2s ease;
        height: 100%;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        border: 1px solid #e9ecef;
    }

    .product-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .product-image {
        height: 180px;
        background: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .product-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        background: #dc3545;
        color: white;
        padding: 4px 12px;
        border-radius: 4px;
        font-size: 0.75rem;
        font-weight: 500;
    }

    .product-info {
        padding: 1.5rem;
    }

    .product-category {
        color: #dc3545;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
    }

    .product-name {
        font-size: 1.3rem;
        font-weight: 600;
        color: #212529;
        margin-bottom: 0.75rem;
    }

    .product-description {
        color: #6c757d;
        font-size: 0.9rem;
        margin-bottom: 1.25rem;
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-features {
        margin-bottom: 1.5rem;
    }

    .feature-tag {
        display: inline-block;
        background: #f8f9fa;
        color: #495057;
        padding: 4px 10px;
        border-radius: 4px;
        font-size: 0.75rem;
        margin-right: 6px;
        margin-bottom: 6px;
        border: 1px solid #e9ecef;
    }

    .product-footer {
        padding-top: 1.25rem;
        border-top: 1px solid #e9ecef;
    }

    .product-price {
        font-size: 1.8rem;
        font-weight: 600;
        color: #212529;
        margin-bottom: 1.25rem;
    }

    .price-period {
        font-size: 0.85rem;
        color: #6c757d;
        font-weight: 400;
    }

    .btn-group-actions {
        display: flex;
        gap: 8px;
    }

    .btn-minimal {
        flex: 1;
        padding: 10px 16px;
        border-radius: 6px;
        font-weight: 500;
        font-size: 0.9rem;
        transition: all 0.2s ease;
        cursor: pointer;
    }

    .btn-buy {
        background: #dc3545;
        color: white;
        border: none;
    }

    .btn-buy:hover {
        background: #c82333;
    }

    .btn-details {
        background: white;
        color: #495057;
        border: 1px solid #dee2e6;
    }

    .btn-details:hover {
        background: #f8f9fa;
        border-color: #adb5bd;
    }

    /* Modal Styles */
    .modal-content {
        border-radius: 8px;
        border: none;
    }

    .modal-header {
        background: #dc3545;
        color: white;
        border-radius: 8px 8px 0 0;
        padding: 1.5rem;
    }

    .modal-title {
        font-weight: 700;
        font-size: 1.5rem;
    }

    .modal-subtitle {
        opacity: 0.9;
        font-size: 0.9rem;
    }

    .modal-image {
        height: 250px;
        background: #f8f9fa;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border: 1px solid #e9ecef;
    }

    .modal-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .detail-section {
        margin-bottom: 2rem;
    }

    .detail-section h5 {
        color: #212529;
        font-weight: 700;
        margin-bottom: 1rem;
        font-size: 1.1rem;
    }

    .feature-list {
        list-style: none;
        padding: 0;
    }

    .feature-list li {
        padding: 10px 0;
        border-bottom: 1px solid #e9ecef;
        color: #495057;
    }

    .feature-list li:last-child {
        border-bottom: none;
    }

    .feature-list i {
        color: #28a745;
        margin-right: 10px;
    }

    .spec-badge {
        background: #f8f9fa;
        padding: 8px 16px;
        border-radius: 6px;
        display: inline-block;
        margin: 5px;
        font-size: 0.9rem;
        color: #495057;
        border: 1px solid #e9ecef;
    }

    .btn-primary-custom {
        background: #dc3545;
        border: none;
        padding: 12px 32px;
        font-weight: 600;
    }

    .btn-primary-custom:hover {
        background: #c82333;
    }

    .product-item {
        transition: opacity 0.2s ease;
    }
</style>
</head>

<div class="container">
    <div class="catalog-header">
        <h1>Catálogo de Software</h1>
        <p>Descubre las mejores soluciones para tu negocio</p>
    </div>

    <!-- Category Filters -->
    <div class="category-filters">
        <div class="filter-title">
            <i class="fas fa-filter"></i>
            Filtrar por Categoría
        </div>
        <div class="filter-buttons">
            <button class="filter-btn active" data-category="all">
                <i class="fas fa-th"></i> Todos
            </button>
            <?php if (!empty($categorias)): ?>
                <?php foreach ($categorias as $categoria): ?>
                    <button class="filter-btn" data-category="<?= $categoria['id'] ?>">
                        <?= $categoria['nombre'] ?>
                    </button>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="row g-4 mb-5" id="productos-container" style="min-height: 500px;">
        <?php if (!empty($productos)): ?>
            <?php foreach ($productos as $producto): ?>
                <div class="col-lg-4 col-md-6 product-item" data-category="<?= $producto['categoria_id'] ?>">
                    <div class="product-card">
                        <div class="product-image">
                            <?php if (!empty($producto['imagen_principal'])): ?>
                                <img src="<?= base_url('public/assets/img/productos/' . $producto['imagen_principal']) ?>"
                                    alt="<?= $producto['nombre'] ?>" style="width: 100%; height: 100%; object-fit: cover;">
                            <?php else: ?>
                                <i class="fas fa-box fa-5x text-secondary opacity-50"></i>
                            <?php endif; ?>
                            <?php if ($producto['mas_vendido']): ?>
                                <span class="product-badge">Más Vendido</span>
                            <?php endif; ?>
                        </div>
                        <div class="product-info">
                            <div class="product-category"><?= $producto['categoria_nombre'] ?? 'Sin categoría' ?></div>
                            <h3 class="product-name"><?= $producto['nombre'] ?></h3>
                            <p class="product-description">
                                <?= $producto['descripcion'] ?>
                            </p>
                            <div class="product-features">
                                <span class="feature-tag"><i class="fas fa-box"></i> Stock: <?= $producto['stock'] ?></span>
                                <?php if ($producto['precio_oferta']): ?>
                                    <span class="feature-tag"><i class="fas fa-tag"></i> Oferta</span>
                                <?php endif; ?>
                            </div>
                            <div class="product-footer">
                                <div class="product-price">
                                    <?php if ($producto['precio_oferta']): ?>
                                        <span
                                            style="text-decoration: line-through; color: #999; font-size: 1.2rem;">$<?= number_format($producto['precio'], 2) ?></span>
                                        $<?= number_format($producto['precio_oferta'], 2) ?>
                                    <?php else: ?>
                                        $<?= number_format($producto['precio'], 2) ?>
                                    <?php endif; ?>
                                </div>
                                <div class="d-grid gap-2">
                                    <a href="<?= base_url('prueba-gratis') ?>"
                                        class="btn-minimal btn-buy text-decoration-none d-flex align-items-center justify-content-center">
                                        <i class="fas fa-rocket me-2"></i> Prueba Gratis
                                    </a>
                                    <div class="btn-group-actions">
                                        <button class="btn-minimal btn-details">
                                            <i class="fas fa-shopping-cart me-2"></i> Comprar
                                        </button>
                                        <a href="<?= base_url('productos/detalle/' . $producto['id']) ?>"
                                            class="btn-minimal btn-details text-decoration-none d-flex align-items-center justify-content-center">
                                            <i class="fas fa-info-circle me-2"></i> Detalles
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center">
                <p>No hay productos disponibles</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script>
    // Category Filter Functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const category = this.getAttribute('data-category');

            // Filter products without delay to prevent layout jumps
            productItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                    }, 10);
                } else {
                    item.style.display = 'none';
                    item.style.opacity = '0';
                }
            });
        });
    });
</script>
<?= $this->include('layouts/footer') ?>