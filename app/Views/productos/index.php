<?= $this->include('layouts/header') ?>
<style>
     
    </style>
</head>
<body>
    <div class="container">
        <div class="hero-section">
            <h1>Catálogo de Software</h1>
            <p>Explora nuestros planes y encuentra el perfecto para ti</p>
        </div>

        <div class="row g-4 mb-5">
            <!-- Software Básico -->
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="card-image">
                        <i class="fas fa-chart-line fa-4x text-white opacity-50"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="plan-title">Software Básico</h3>
                        <p class="plan-subtitle">Ideal para pequeñas empresas y startups</p>
                        <div class="mb-3">
                            <span class="price">$29</span>
                            <span class="price-period">/mes</span>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> Hasta 5 usuarios</li>
                            <li><i class="fas fa-check"></i> Almacenamiento de 10GB</li>
                            <li><i class="fas fa-check"></i> Soporte por email</li>
                            <li><i class="fas fa-check"></i> Actualizaciones automáticas</li>
                        </ul>
                        <span class="more-features">+ 1 características más</span>
                        <div class="d-grid mt-3">
                            <button class="btn btn-outline-dark" onclick="openModal('basico')">Alquilar Ahora</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Software Profesional -->
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card position-relative">
                    <span class="popular-badge">Más Popular</span>
                    <div class="card-image">
                        <i class="fas fa-chart-bar fa-4x text-white opacity-50"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="plan-title">Software Profesional</h3>
                        <p class="plan-subtitle">Para empresas en crecimiento</p>
                        <div class="mb-3">
                            <span class="price">$79</span>
                            <span class="price-period">/mes</span>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> Hasta 25 usuarios</li>
                            <li><i class="fas fa-check"></i> Almacenamiento de 100GB</li>
                            <li><i class="fas fa-check"></i> Soporte prioritario 24/7</li>
                            <li><i class="fas fa-check"></i> Actualizaciones automáticas</li>
                        </ul>
                        <span class="more-features">+ 4 características más</span>
                        <div class="d-grid mt-3">
                            <button class="btn btn-primary-custom" onclick="openModal('profesional')">Alquilar Ahora</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Software Empresarial -->
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="card-image">
                        <i class="fas fa-chart-area fa-4x text-white opacity-50"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="plan-title">Software Empresarial</h3>
                        <p class="plan-subtitle">Solución completa para grandes organizaciones</p>
                        <div class="mb-3">
                            <span class="price">$199</span>
                            <span class="price-period">/mes</span>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check"></i> Usuarios ilimitados</li>
                            <li><i class="fas fa-check"></i> Almacenamiento ilimitado</li>
                            <li><i class="fas fa-check"></i> Soporte dedicado 24/7</li>
                            <li><i class="fas fa-check"></i> Actualizaciones automáticas</li>
                        </ul>
                        <span class="more-features">+ 6 características más</span>
                        <div class="d-grid mt-3">
                            <button class="btn btn-outline-dark" onclick="openModal('empresarial')">Alquilar Ahora</button>
                        </div>
                    </div>
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
                        <h5 class="modal-title">Software Profesional</h5>
                        <p class="modal-subtitle mb-0">Para empresas en crecimiento</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image mb-4">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <i class="fas fa-chart-bar fa-5x text-white opacity-50"></i>
                        </div>
                    </div>
                    
                    <div class="modal-price">
                        <h2 class="price mb-0">$79 <span class="price-period">/mes</span></h2>
                    </div>

                    <h5 class="mt-4 mb-3">Descripción Completa</h5>
                    <p class="text-muted">
                        El plan profesional es perfecto para empresas en expansión que necesitan herramientas avanzadas y soporte 
                        dedicado. Incluye todas las características del plan básico más integraciones ilimitadas, análisis detallados y 
                        soporte prioritario las 24 horas.
                    </p>

                    <h5 class="mt-4 mb-3">Características Incluidas</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="features-list">
                                <li><i class="fas fa-check feature-check"></i> Hasta 25 usuarios</li>
                                <li><i class="fas fa-check feature-check"></i> Soporte prioritario 24/7</li>
                                <li><i class="fas fa-check feature-check"></i> Panel de control avanzado</li>
                                <li><i class="fas fa-check feature-check"></i> API completa</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="features-list">
                                <li><i class="fas fa-check feature-check"></i> Almacenamiento de 100GB</li>
                                <li><i class="fas fa-check feature-check"></i> Actualizaciones automáticas</li>
                                <li><i class="fas fa-check feature-check"></i> Integraciones ilimitadas</li>
                                <li><i class="fas fa-check feature-check"></i> Análisis y reportes</li>
                            </ul>
                        </div>
                    </div>

                    <h5 class="mt-4 mb-3">Especificaciones Técnicas</h5>
                    <ul class="specs-list">
                        <li>Tiempo de respuesta del soporte: Inmediato</li>
                        <li>Disponibilidad garantizada: 99.9%</li>
                        <li>Copias de seguridad cada 6 horas</li>
                        <li>Acceso desde cualquier dispositivo</li>
                        <li>SSL/TLS encryption</li>
                        <li>Autenticación de dos factores</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary-custom">Alquilar Ahora</button>
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
                        <h5 class="modal-title">Software Básico</h5>
                        <p class="modal-subtitle mb-0">Ideal para pequeñas empresas y startups</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image mb-4">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <i class="fas fa-chart-line fa-5x text-white opacity-50"></i>
                        </div>
                    </div>
                    
                    <div class="modal-price">
                        <h2 class="price mb-0">$29 <span class="price-period">/mes</span></h2>
                    </div>

                    <h5 class="mt-4 mb-3">Descripción Completa</h5>
                    <p class="text-muted">
                        El plan básico es ideal para pequeñas empresas y startups que están comenzando. Incluye todas las características 
                        esenciales para gestionar tu negocio de manera eficiente con un presupuesto ajustado.
                    </p>

                    <h5 class="mt-4 mb-3">Características Incluidas</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="features-list">
                                <li><i class="fas fa-check feature-check"></i> Hasta 5 usuarios</li>
                                <li><i class="fas fa-check feature-check"></i> Soporte por email</li>
                                <li><i class="fas fa-check feature-check"></i> Panel básico</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="features-list">
                                <li><i class="fas fa-check feature-check"></i> Almacenamiento de 10GB</li>
                                <li><i class="fas fa-check feature-check"></i> Actualizaciones automáticas</li>
                                <li><i class="fas fa-check feature-check"></i> Reportes básicos</li>
                            </ul>
                        </div>
                    </div>

                    <h5 class="mt-4 mb-3">Especificaciones Técnicas</h5>
                    <ul class="specs-list">
                        <li>Tiempo de respuesta del soporte: 24-48 horas</li>
                        <li>Disponibilidad garantizada: 99.5%</li>
                        <li>Copias de seguridad semanales</li>
                        <li>Acceso desde cualquier dispositivo</li>
                        <li>SSL/TLS encryption</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary-custom">Alquilar Ahora</button>
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
                        <h5 class="modal-title">Software Empresarial</h5>
                        <p class="modal-subtitle mb-0">Solución completa para grandes organizaciones</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image mb-4">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <i class="fas fa-chart-area fa-5x text-white opacity-50"></i>
                        </div>
                    </div>
                    
                    <div class="modal-price">
                        <h2 class="price mb-0">$199 <span class="price-period">/mes</span></h2>
                    </div>

                    <h5 class="mt-4 mb-3">Descripción Completa</h5>
                    <p class="text-muted">
                        El plan empresarial es la solución completa para grandes organizaciones que requieren el máximo nivel de servicio, 
                        seguridad y personalización. Incluye usuarios y almacenamiento ilimitados, soporte dedicado y todas las 
                        características premium.
                    </p>

                    <h5 class="mt-4 mb-3">Características Incluidas</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="features-list">
                                <li><i class="fas fa-check feature-check"></i> Usuarios ilimitados</li>
                                <li><i class="fas fa-check feature-check"></i> Soporte dedicado 24/7</li>
                                <li><i class="fas fa-check feature-check"></i> Panel empresarial avanzado</li>
                                <li><i class="fas fa-check feature-check"></i> API completa personalizada</li>
                                <li><i class="fas fa-check feature-check"></i> Consultoría incluida</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="features-list">
                                <li><i class="fas fa-check feature-check"></i> Almacenamiento ilimitado</li>
                                <li><i class="fas fa-check feature-check"></i> Actualizaciones automáticas</li>
                                <li><i class="fas fa-check feature-check"></i> Integraciones personalizadas</li>
                                <li><i class="fas fa-check feature-check"></i> Análisis avanzados</li>
                                <li><i class="fas fa-check feature-check"></i> SLA garantizado</li>
                            </ul>
                        </div>
                    </div>

                    <h5 class="mt-4 mb-3">Especificaciones Técnicas</h5>
                    <ul class="specs-list">
                        <li>Tiempo de respuesta del soporte: Inmediato con gerente dedicado</li>
                        <li>Disponibilidad garantizada: 99.99%</li>
                        <li>Copias de seguridad en tiempo real</li>
                        <li>Acceso desde cualquier dispositivo</li>
                        <li>SSL/TLS encryption avanzado</li>
                        <li>Autenticación multifactor</li>
                        <li>Auditoría de seguridad incluida</li>
                        <li>Servidor dedicado opcional</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary-custom">Alquilar Ahora</button>
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