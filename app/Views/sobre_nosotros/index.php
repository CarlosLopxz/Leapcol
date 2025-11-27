<?= $this->include('layouts/header') ?>

<!-- Hero Section -->
<section class="position-relative bg-white overflow-hidden img-pattern"
    style="background-image: url('<?= media_url() ?>euphoria-assets/elements/pattern-light.png')">
    <div class="position-absolute top-0 start-0 h-100 w-100"
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #ffffff 100%);"></div>
    <div class="container">
        <div class="pt-20 pb-16 position-relative">
            <div class="text-center mw-4xl mx-auto">
                <span class="badge mb-4 bg-danger-dark text-danger shadow text-uppercase fs-13 fw-medium">Sobre
                    nosotros</span>
                <h1 class="mb-6 font-heading fs-4" style="letter-spacing: -1px;">
                    Transformamos negocios con tecnología simple y efectiva
                </h1>
                <p class="mb-0 fs-9 fw-medium text-secondary">
                    Somos Leapcol, una empresa colombiana dedicada al desarrollo de software y microservicios.
                    Creamos herramientas digitales que hacen más fácil tu trabajo diario y ayudan a crecer tu negocio.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Nuestra Historia -->
<section class="position-relative py-20 bg-white overflow-hidden"
    style="background-image: url('euphoria-assets/elements/pattern-light.png')">
    <div class="position-absolute top-0 start-0 h-100 w-100"
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%);"></div>

    <div class="position-relative container" style="z-index:1;">
        <div class="row align-items-center g-16">
            <div class="col-12 col-md-6">
                <div class="mw-md-lg">
                    <span class="badge mb-4 bg-danger-dark text-danger text-uppercase shadow">Nuestra historia</span>
                    <h2 class="font-heading mb-4 fs-5" style="letter-spacing: -1px;">
                        Nacimos para simplificar la gestión empresarial
                    </h2>
                    <p class="mb-6 fs-9 fw-medium text-secondary">
                        Leapcol nació de la necesidad de ofrecer soluciones tecnológicas accesibles para pequeñas y
                        medianas
                        empresas en Colombia. Vimos que muchos negocios luchaban con sistemas complicados y costosos.
                    </p>
                    <p class="mb-6 fs-9 fw-medium text-secondary">
                        Decidimos crear una plataforma en la nube que cualquier emprendedor pudiera usar sin
                        complicaciones:
                        sin instalaciones, sin mantenimiento técnico, solo resultados.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-4 d-flex align-items-start">
                            <img class="mt-1 me-3" src="<?= media_url() ?>euphoria-assets/elements/checkbox-green.svg"
                                alt="Check">
                            <p class="mb-0 fs-9 fw-medium text-secondary">
                                <strong>Misión:</strong> Democratizar la tecnología empresarial para que cualquier
                                negocio pueda crecer.
                            </p>
                        </li>
                        <li class="mb-4 d-flex align-items-start">
                            <img class="mt-1 me-3" src="<?= media_url() ?>euphoria-assets/elements/checkbox-green.svg"
                                alt="Check">
                            <p class="mb-0 fs-9 fw-medium text-secondary">
                                <strong>Visión:</strong> Ser la plataforma líder en Colombia para la gestión integral de
                                negocios.
                            </p>
                        </li>
                        <li class="d-flex align-items-start">
                            <img class="mt-1 me-3" src="<?= media_url() ?>euphoria-assets/elements/checkbox-green.svg"
                                alt="Check">
                            <p class="mb-0 fs-9 fw-medium text-secondary">
                                <strong>Valores:</strong> Simplicidad, innovación, accesibilidad y soporte excepcional.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="position-relative mw-xl mx-auto">
                    <img class="img-fluid rounded-4 shadow-sm"
                        src="<?= media_url() ?>euphoria-assets/images/applications/mockup-left.png"
                        alt="Leapcol Platform" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nuestros Valores -->
<section class="position-relative py-24 bg-white overflow-hidden"
    style="background-image: url('euphoria-assets/elements/pattern-light.png')">
    <div class="position-absolute top-0 start-0 h-100 w-100"
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%);"></div>

    <div class="position-relative container" style="z-index:1;">
        <div class="mb-16 text-center mw-md-5xl mx-auto">
            <span class="badge mb-4 bg-danger-dark text-danger shadow text-uppercase fs-13 fw-medium">Nuestros
                valores</span>
            <h2 class="font-heading mb-4 fs-5 text-dark" style="letter-spacing: -0.5px;">
                Lo que nos hace diferentes
            </h2>
            <p class="mb-0 fs-9 fw-medium text-secondary">
                Trabajamos cada día con estos principios para ofrecerte el mejor servicio.
            </p>
        </div>

        <div class="row g-8">
            <!-- Valor 1: Simplicidad -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="text-center h-100 p-6 bg-white rounded-4 shadow-sm transition-all"
                    style="transition: all 0.3s ease; border: 1px solid #f1f3f5;">
                    <div class="mb-6 d-flex justify-content-center align-items-center mx-auto text-white bg-danger rounded"
                        style="width: 64px; height: 64px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-heading fs-8 mb-4">Simplicidad</h3>
                    <p class="mb-0 fw-medium text-secondary fs-9">
                        Software fácil de usar. Sin complicaciones técnicas. Todo intuitivo.
                    </p>
                </div>
            </div>

            <!-- Valor 2: Innovación -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="text-center h-100 p-6 bg-white rounded-4 shadow-sm transition-all"
                    style="transition: all 0.3s ease; border: 1px solid #f1f3f5;">
                    <div class="mb-6 d-flex justify-content-center align-items-center mx-auto text-white bg-danger rounded"
                        style="width: 64px; height: 64px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-heading fs-8 mb-4">Innovación</h3>
                    <p class="mb-0 fw-medium text-secondary fs-9">
                        Tecnología de punta adaptada a las necesidades del mercado colombiano.
                    </p>
                </div>
            </div>

            <!-- Valor 3: Accesibilidad -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="text-center h-100 p-6 bg-white rounded-4 shadow-sm transition-all"
                    style="transition: all 0.3s ease; border: 1px solid #f1f3f5;">
                    <div class="mb-6 d-flex justify-content-center align-items-center mx-auto text-white bg-danger rounded"
                        style="width: 64px; height: 64px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-heading fs-8 mb-4">Accesibilidad</h3>
                    <p class="mb-0 fw-medium text-secondary fs-9">
                        Precios justos. Planes flexibles. Tecnología para todos los negocios.
                    </p>
                </div>
            </div>

            <!-- Valor 4: Soporte -->
            <div class="col-12 col-md-6 col-lg-3">
                <div class="text-center h-100 p-6 bg-white rounded-4 shadow-sm transition-all"
                    style="transition: all 0.3s ease; border: 1px solid #f1f3f5;">
                    <div class="mb-6 d-flex justify-content-center align-items-center mx-auto text-white bg-danger rounded"
                        style="width: 64px; height: 64px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-heading fs-8 mb-4">Soporte 24/7</h3>
                    <p class="mb-0 fw-medium text-secondary fs-9">
                        Siempre disponibles para ayudarte. Por chat, email o llamada.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Estadísticas -->
<section class="position-relative py-20 bg-light overflow-hidden">
    <div class="container">
        <div class="row g-8 text-center">
            <div class="col-12 col-md-3">
                <div class="p-6">
                    <h3 class="font-heading fs-3 text-danger mb-2">100+</h3>
                    <p class="mb-0 fs-9 fw-medium text-secondary">Clientes activos</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="p-6">
                    <h3 class="font-heading fs-3 text-danger mb-2">90%</h3>
                    <p class="mb-0 fs-9 fw-medium text-secondary">Tiempo de actividad</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="p-6">
                    <h3 class="font-heading fs-3 text-danger mb-2">24/7</h3>
                    <p class="mb-0 fs-9 fw-medium text-secondary">Soporte disponible</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="p-6">
                    <h3 class="font-heading fs-3 text-danger mb-2">3 años</h3>
                    <p class="mb-0 fs-9 fw-medium text-secondary">En el mercado</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="position-relative py-28 bg-white overflow-hidden"
    style="background-image: url('euphoria-assets/elements/pattern-light.png')">
    <div class="position-absolute top-0 start-0 h-100 w-100"
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%);"></div>

    <div class="container">
        <div class="position-relative mw-4xl mx-auto text-center" style="z-index: 10;">
            <h2 class="mb-4 fs-6 font-heading" style="letter-spacing: -1px;">
                ¿Listo para transformar tu negocio?
            </h2>
            <p class="mb-6 fs-9 fw-medium text-secondary">
                Únete a cientos de empresas que ya confían en Leapcol para gestionar sus negocios.
            </p>
            <div class="row justify-content-center g-4">
                <div class="col-auto">
                    <a href="<?= base_url('register') ?>"
                        class="btn btn-danger px-7 py-4 fs-10 fw-medium rounded shadow text-white d-inline-flex align-items-center justify-content-center gap-2">
                        Prueba gratis 14 días
                    </a>
                </div>
                <div class="col-auto">
                    <a href="<?= base_url('contacto') ?>"
                        class="btn btn-outline-danger px-7 py-4 fs-10 fw-medium rounded d-inline-flex align-items-center justify-content-center gap-2">
                        Contáctanos
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .transition-all:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08) !important;
        border-color: #dbeafe !important;
    }

    .grayscale {
        filter: grayscale(100%);
        opacity: 0.6;
        transition: all 0.3s ease;
    }

    .grayscale:hover {
        filter: grayscale(0%);
        opacity: 1;
    }
</style>

<?= $this->include('layouts/footer') ?>