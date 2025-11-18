<?= $this->include('layouts/header') ?>
<style>
    .catalog-header {
        text-align: center;
        color: #2d3748;
        margin-bottom: 3rem;
    }

    .catalog-header h1 {
        font-size: 2.5rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .catalog-header p {
        font-size: 1rem;
        color: #718096;
    }

    .product-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        box-shadow: 0 2px 4px rgba(0,0,0,0.08);
        border: 1px solid #e2e8f0;
    }

    .product-card:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    }

    .product-image {
        height: 180px;
        background: #2d3748;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .product-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        background: #2d3748;
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
        color: #718096;
        font-size: 0.8rem;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
    }

    .product-name {
        font-size: 1.4rem;
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 0.75rem;
    }

    .product-description {
        color: #718096;
        font-size: 0.9rem;
        margin-bottom: 1.25rem;
        line-height: 1.5;
    }

    .product-features {
        margin-bottom: 1.5rem;
    }

    .feature-tag {
        display: inline-block;
        background: #f7fafc;
        color: #4a5568;
        padding: 4px 10px;
        border-radius: 4px;
        font-size: 0.75rem;
        margin-right: 6px;
        margin-bottom: 6px;
    }

    .product-footer {
        padding-top: 1.25rem;
        border-top: 1px solid #e2e8f0;
    }

    .product-price {
        font-size: 2rem;
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 1.25rem;
    }

    .price-period {
        font-size: 0.85rem;
        color: #718096;
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
        border: 1px solid #e2e8f0;
    }

    .btn-details {
        background: white;
        color: #2d3748;
        border: 1px solid #2d3748;
    }

    .btn-details:hover {
        background: #2d3748;
        color: white;
    }

    .btn-advisor {
        background: white;
        color: #718096;
    }

    .btn-advisor:hover {
        background: #f7fafc;
        color: #2d3748;
    }

    /* Modal Styles */
    .modal-content {
        border-radius: 12px;
        border: none;
    }

    .modal-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 12px 12px 0 0;
        padding: 1.5rem;
    }

    .modal-title {
        font-weight: 700;
        font-size: 1.75rem;
    }

    .modal-subtitle {
        opacity: 0.9;
        font-size: 0.95rem;
    }

    .modal-image {
        height: 250px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .detail-section {
        margin-bottom: 2rem;
    }

    .detail-section h5 {
        color: #2d3748;
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
        border-bottom: 1px solid #e2e8f0;
        color: #4a5568;
    }

    .feature-list li:last-child {
        border-bottom: none;
    }

    .feature-list i {
        color: #48bb78;
        margin-right: 10px;
    }

    .spec-badge {
        background: #edf2f7;
        padding: 8px 16px;
        border-radius: 6px;
        display: inline-block;
        margin: 5px;
        font-size: 0.9rem;
        color: #2d3748;
    }

    .btn-primary-custom {
        background: #667eea;
        border: none;
        padding: 12px 32px;
        font-weight: 600;
    }

    .btn-primary-custom:hover {
        background: #5568d3;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="catalog-header">
            <h1>Catálogo de Software</h1>
            <p>Descubre las mejores soluciones para tu negocio</p>
        </div>

        <div class="row g-4 mb-5">
            <!-- Producto 1: Software Básico -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-chart-line fa-5x text-white opacity-75"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Software de Gestión</div>
                        <h3 class="product-name">Business Starter</h3>
                        <p class="product-description">
                            Solución ideal para pequeñas empresas que buscan optimizar sus procesos básicos de gestión.
                        </p>
                        <div class="product-features">
                            <span class="feature-tag"><i class="fas fa-users"></i> 5 usuarios</span>
                            <span class="feature-tag"><i class="fas fa-cloud"></i> 10GB</span>
                            <span class="feature-tag"><i class="fas fa-headset"></i> Email</span>
                        </div>
                        <div class="product-footer">
                            <div class="product-price">
                                $29<span class="price-period">/mes</span>
                            </div>
                            <button class="btn btn-view-details" onclick="openModal('basico')">
                                Ver Detalles
                            </button>
                              <button class="btn btn-view-details">
                                Ver Detalles
                            </button>
                            <button class="btn btn-view-details" >
                                Ver Detalles
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Producto 2: Software Profesional -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-image">
                        <span class="product-badge">Más Vendido</span>
                        <i class="fas fa-chart-bar fa-5x text-white opacity-75"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Software de Gestión</div>
                        <h3 class="product-name">Business Pro</h3>
                        <p class="product-description">
                            Herramienta profesional con características avanzadas para empresas en crecimiento.
                        </p>
                        <div class="product-features">
                            <span class="feature-tag"><i class="fas fa-users"></i> 25 usuarios</span>
                            <span class="feature-tag"><i class="fas fa-cloud"></i> 100GB</span>
                            <span class="feature-tag"><i class="fas fa-headset"></i> 24/7</span>
                        </div>
                        <div class="product-footer">
                            <div class="product-price">
                                $79<span class="price-period">/mes</span>
                            </div>
                            <button class="btn btn-view-details" onclick="openModal('profesional')">
                                Ver Detalles
                            </button>
                             <button class="btn btn-view-details">
                                Ver Detalles
                            </button>
                            <button class="btn btn-view-details" >
                                Ver Detalles
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Producto 3: Software Empresarial -->
            <div class="col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-chart-area fa-5x text-white opacity-75"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Software de Gestión</div>
                        <h3 class="product-name">Enterprise Suite</h3>
                        <p class="product-description">
                            Solución empresarial completa con capacidades ilimitadas y soporte premium.
                        </p>
                        <div class="product-features">
                            <span class="feature-tag"><i class="fas fa-infinity"></i> Ilimitado</span>
                            <span class="feature-tag"><i class="fas fa-shield-alt"></i> Premium</span>
                            <span class="feature-tag"><i class="fas fa-cog"></i> Custom</span>
                        </div>
                        <div class="product-footer">
                            <div class="product-price">
                                $199<span class="price-period">/mes</span>
                            </div>
                            <button class="btn btn-view-details" onclick="openModal('empresarial')">
                                Ver Detalles
                            </button>
                              <button class="btn btn-view-details">
                                Ver Detalles
                            </button>
                            <button class="btn btn-view-details" >
                                Ver Detalles
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Software Básico -->
    <div class="modal fade" id="modalBasico" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title">Business Starter</h5>
                        <p class="modal-subtitle mb-0">Software de Gestión para Pequeñas Empresas</p>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image mb-4">
                        <i class="fas fa-chart-line fa-5x text-white opacity-75"></i>
                    </div>
                    
                    <div class="text-center mb-4">
                        <span class="product-price">$29<span class="price-period">/mes</span></span>
                    </div>

                    <div class="detail-section">
                        <h5>Descripción del Producto</h5>
                        <p class="text-muted">
                            Business Starter es la solución perfecta para pequeñas empresas y startups que necesitan 
                            una herramienta confiable y fácil de usar para gestionar sus operaciones diarias. 
                            Incluye todas las funciones esenciales sin complejidades innecesarias.
                        </p>
                    </div>

                    <div class="detail-section">
                        <h5>Características Principales</h5>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Hasta 5 usuarios simultáneos</li>
                            <li><i class="fas fa-check-circle"></i> 10GB de almacenamiento en la nube</li>
                            <li><i class="fas fa-check-circle"></i> Soporte técnico por email</li>
                            <li><i class="fas fa-check-circle"></i> Actualizaciones automáticas</li>
                            <li><i class="fas fa-check-circle"></i> Panel de control básico</li>
                            <li><i class="fas fa-check-circle"></i> Reportes mensuales</li>
                        </ul>
                    </div>

                    <div class="detail-section">
                        <h5>Especificaciones Técnicas</h5>
                        <div>
                            <span class="spec-badge">Tiempo de respuesta: 24-48h</span>
                            <span class="spec-badge">Uptime: 99.5%</span>
                            <span class="spec-badge">Backup semanal</span>
                            <span class="spec-badge">SSL/TLS</span>
                            <span class="spec-badge">Multi-dispositivo</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Software Profesional -->
    <div class="modal fade" id="modalProfesional" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title">Business Pro</h5>
                        <p class="modal-subtitle mb-0">Software de Gestión Profesional</p>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image mb-4">
                        <i class="fas fa-chart-bar fa-5x text-white opacity-75"></i>
                    </div>
                    
                    <div class="text-center mb-4">
                        <span class="product-price">$79<span class="price-period">/mes</span></span>
                    </div>

                    <div class="detail-section">
                        <h5>Descripción del Producto</h5>
                        <p class="text-muted">
                            Business Pro es la herramienta profesional diseñada para empresas en expansión que 
                            requieren funcionalidades avanzadas, mayor capacidad y soporte prioritario. 
                            Incluye todas las características del plan Starter más integraciones ilimitadas y análisis detallados.
                        </p>
                    </div>

                    <div class="detail-section">
                        <h5>Características Principales</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="fas fa-check-circle"></i> Hasta 25 usuarios</li>
                                    <li><i class="fas fa-check-circle"></i> 100GB almacenamiento</li>
                                    <li><i class="fas fa-check-circle"></i> Soporte prioritario 24/7</li>
                                    <li><i class="fas fa-check-circle"></i> Panel avanzado</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="fas fa-check-circle"></i> API completa</li>
                                    <li><i class="fas fa-check-circle"></i> Integraciones ilimitadas</li>
                                    <li><i class="fas fa-check-circle"></i> Análisis y reportes</li>
                                    <li><i class="fas fa-check-circle"></i> Actualizaciones automáticas</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="detail-section">
                        <h5>Especificaciones Técnicas</h5>
                        <div>
                            <span class="spec-badge">Respuesta inmediata</span>
                            <span class="spec-badge">Uptime: 99.9%</span>
                            <span class="spec-badge">Backup cada 6h</span>
                            <span class="spec-badge">SSL/TLS</span>
                            <span class="spec-badge">2FA</span>
                            <span class="spec-badge">Multi-plataforma</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Software Empresarial -->
    <div class="modal fade" id="modalEmpresarial" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title">Enterprise Suite</h5>
                        <p class="modal-subtitle mb-0">Solución Empresarial Completa</p>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image mb-4">
                        <i class="fas fa-chart-area fa-5x text-white opacity-75"></i>
                    </div>
                    
                    <div class="text-center mb-4">
                        <span class="product-price">$199<span class="price-period">/mes</span></span>
                    </div>

                    <div class="detail-section">
                        <h5>Descripción del Producto</h5>
                        <p class="text-muted">
                            Enterprise Suite es la solución empresarial definitiva para grandes organizaciones 
                            que demandan el máximo nivel de servicio, seguridad y personalización. 
                            Incluye capacidades ilimitadas, soporte dedicado y todas las características premium.
                        </p>
                    </div>

                    <div class="detail-section">
                        <h5>Características Principales</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="fas fa-check-circle"></i> Usuarios ilimitados</li>
                                    <li><i class="fas fa-check-circle"></i> Almacenamiento ilimitado</li>
                                    <li><i class="fas fa-check-circle"></i> Gerente dedicado 24/7</li>
                                    <li><i class="fas fa-check-circle"></i> Panel empresarial</li>
                                    <li><i class="fas fa-check-circle"></i> Consultoría incluida</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="fas fa-check-circle"></i> API personalizada</li>
                                    <li><i class="fas fa-check-circle"></i> Integraciones custom</li>
                                    <li><i class="fas fa-check-circle"></i> Análisis avanzados</li>
                                    <li><i class="fas fa-check-circle"></i> SLA garantizado</li>
                                    <li><i class="fas fa-check-circle"></i> Servidor dedicado</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="detail-section">
                        <h5>Especificaciones Técnicas</h5>
                        <div>
                            <span class="spec-badge">Soporte inmediato</span>
                            <span class="spec-badge">Uptime: 99.99%</span>
                            <span class="spec-badge">Backup en tiempo real</span>
                            <span class="spec-badge">Encriptación avanzada</span>
                            <span class="spec-badge">Autenticación multifactor</span>
                            <span class="spec-badge">Auditoría de seguridad</span>
                            <span class="spec-badge">Infraestructura dedicada</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function openModal(plan) {
            const modalId = 'modal' + plan.charAt(0).toUpperCase() + plan.slice(1);
            const modal = new bootstrap.Modal(document.getElementById(modalId));
            modal.show();
        }
    </script>
</body>
</html>
<?= $this->include('layouts/footer') ?>