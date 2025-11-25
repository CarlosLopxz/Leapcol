<?= $this->include('layouts/header') ?>

<!-- Hero Section -->
<section class="position-relative bg-white overflow-hidden img-pattern"
    style="background-image: url('<?= media_url() ?>euphoria-assets/elements/pattern-light.png')">
    <div class="position-absolute top-0 start-0 h-100 w-100"
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #ffffff 100%);"></div>
    <div class="container">
        <div class="pt-20 pb-16 position-relative">
            <div class="text-center mw-4xl mx-auto">
                <span
                    class="badge mb-4 bg-danger-dark text-danger shadow text-uppercase fs-13 fw-medium">Contacto</span>
                <h1 class="mb-6 font-heading fs-4" style="letter-spacing: -1px;">
                    ¿Tienes dudas? Estamos aquí para ayudarte
                </h1>
                <p class="mb-0 fs-9 fw-medium text-secondary">
                    Nuestro equipo está disponible 24/7 para resolver tus preguntas. Escríbenos por el medio que
                    prefieras
                    y te responderemos en menos de 1 hora.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Métodos de Contacto -->
<section class="position-relative py-20 bg-white overflow-hidden"
    style="background-image: url('euphoria-assets/elements/pattern-light.png')">
    <div class="position-absolute top-0 start-0 h-100 w-100"
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%);"></div>

    <div class="position-relative container" style="z-index:1;">
        <div class="row g-8 mb-16">
            <!-- WhatsApp -->
            <div class="col-12 col-md-4">
                <div class="text-center h-100 p-8 bg-white rounded-4 shadow-sm transition-all"
                    style="transition: all 0.3s ease; border: 1px solid #f1f3f5;">
                    <div class="mb-6 d-flex justify-content-center align-items-center mx-auto text-white bg-success rounded-circle"
                        style="width: 80px; height: 80px;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.04 2C6.57 2 2.04 6.53 2.04 12C2.04 14.03 2.67 15.9 3.75 17.4L2.5 22L7.23 20.78C8.68 21.73 10.39 22.24 12.04 22.24C17.51 22.24 22.04 17.71 22.04 12.24C22.04 6.77 17.51 2.24 12.04 2.24V2ZM17.25 15.83C17.03 16.49 15.98 17.02 15.41 17.11C14.84 17.2 14.14 17.18 13.37 16.89C12.6 16.6 11.57 16.18 10.59 15.53C8.58 14.18 7.27 12.08 7.16 11.91C7.05 11.74 6.26 10.62 6.26 9.45C6.26 8.28 6.84 7.71 7.05 7.48C7.26 7.25 7.53 7.19 7.72 7.19C7.91 7.19 8.1 7.19 8.27 7.2C8.44 7.21 8.67 7.14 8.89 7.66C9.11 8.18 9.64 9.35 9.7 9.48C9.76 9.61 9.81 9.77 9.72 9.94C9.63 10.11 9.58 10.22 9.47 10.35C9.36 10.48 9.24 10.64 9.14 10.74C9.03 10.84 8.91 10.95 9.04 11.18C9.17 11.41 9.64 12.18 10.33 12.79C11.22 13.58 11.96 13.83 12.19 13.94C12.42 14.05 12.58 14.03 12.71 13.88C12.84 13.73 13.3 13.18 13.45 12.95C13.6 12.72 13.75 12.76 13.96 12.84C14.17 12.92 15.33 13.49 15.56 13.6C15.79 13.71 15.94 13.77 16 13.88C16.06 13.99 16.06 14.51 15.84 15.11L17.25 15.83Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <h3 class="font-heading fs-8 mb-3">WhatsApp</h3>
                    <p class="mb-4 fw-medium text-secondary fs-9">
                        Respuesta inmediata por chat
                    </p>
                    <a href="https://wa.me/573001234567?text=¡Hola!%20Necesito%20información%20sobre%20Leapcol"
                        target="_blank"
                        class="btn btn-success px-6 py-3 fs-10 fw-medium rounded shadow text-white d-inline-flex align-items-center gap-2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                        </svg>
                        Abrir WhatsApp
                    </a>
                    <p class="mt-3 mb-0 text-secondary fs-11">+57 300 123 4567</p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-12 col-md-4">
                <div class="text-center h-100 p-8 bg-white rounded-4 shadow-sm transition-all"
                    style="transition: all 0.3s ease; border: 1px solid #f1f3f5;">
                    <div class="mb-6 d-flex justify-content-center align-items-center mx-auto text-white bg-danger rounded-circle"
                        style="width: 80px; height: 80px;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-heading fs-8 mb-3">Email</h3>
                    <p class="mb-4 fw-medium text-secondary fs-9">
                        Respuesta en menos de 2 horas
                    </p>
                    <a href="mailto:soporte@leapcol.com"
                        class="btn btn-danger px-6 py-3 fs-10 fw-medium rounded shadow text-white d-inline-flex align-items-center gap-2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                        Enviar Email
                    </a>
                    <p class="mt-3 mb-0 text-secondary fs-11">soporte@leapcol.com</p>
                </div>
            </div>

            <!-- Teléfono -->
            <div class="col-12 col-md-4">
                <div class="text-center h-100 p-8 bg-white rounded-4 shadow-sm transition-all"
                    style="transition: all 0.3s ease; border: 1px solid #f1f3f5;">
                    <div class="mb-6 d-flex justify-content-center align-items-center mx-auto text-white bg-primary rounded-circle"
                        style="width: 80px; height: 80px;">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 16.92V19.92C22 20.4696 21.5523 20.9173 21.0027 20.9201C18.0571 20.9483 15.1693 20.1134 12.6597 18.5084C10.3214 17.0289 8.39389 14.9885 7.04229 12.5644C5.49539 10.0432 4.70595 7.14477 4.75 4.2C4.75224 3.65023 5.19989 3.20258 5.75 3.20258H8.75C9.02614 3.20258 9.25 3.42644 9.25 3.70258C9.25 5.63258 9.61 7.48258 10.28 9.19258C10.36 9.40258 10.29 9.64258 10.11 9.78258L8.47 11.09C9.95 13.5 11.95 15.5 14.37 16.98L15.68 15.34C15.82 15.16 16.06 15.09 16.27 15.17C17.98 15.84 19.83 16.2 21.76 16.2C22.0361 16.2 22.26 16.4239 22.26 16.7V19.7C22.26 20.2496 21.8123 20.6973 21.2627 20.7001L22 16.92Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-heading fs-8 mb-3">Teléfono</h3>
                    <p class="mb-4 fw-medium text-secondary fs-9">
                        Llámanos de lunes a viernes
                    </p>
                    <a href="tel:+573001234567"
                        class="btn btn-primary px-6 py-3 fs-10 fw-medium rounded shadow text-white d-inline-flex align-items-center gap-2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        Llamar Ahora
                    </a>
                    <p class="mt-3 mb-0 text-secondary fs-11">+57 300 123 4567</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formulario de Contacto -->
<section class="position-relative py-20 bg-light overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="bg-white rounded-4 shadow-sm p-10">
                    <div class="text-center mb-10">
                        <h2 class="font-heading mb-4 fs-5" style="letter-spacing: -1px;">
                            Envíanos un mensaje
                        </h2>
                        <p class="mb-0 fs-9 fw-medium text-secondary">
                            Completa el formulario y nos pondremos en contacto contigo lo antes posible.
                        </p>
                    </div>

                    <form id="contactForm" action="<?= base_url('contacto/enviar') ?>" method="POST">
                        <div class="row g-6">
                            <!-- Nombre -->
                            <div class="col-12 col-md-6">
                                <label for="nombre" class="form-label fs-9 fw-medium text-dark">Nombre completo
                                    *</label>
                                <input type="text" class="form-control py-3 fs-9" id="nombre" name="nombre"
                                    placeholder="Tu nombre" required>
                            </div>

                            <!-- Email -->
                            <div class="col-12 col-md-6">
                                <label for="email" class="form-label fs-9 fw-medium text-dark">Email *</label>
                                <input type="email" class="form-control py-3 fs-9" id="email" name="email"
                                    placeholder="tu@email.com" required>
                            </div>

                            <!-- Teléfono -->
                            <div class="col-12 col-md-6">
                                <label for="telefono" class="form-label fs-9 fw-medium text-dark">Teléfono</label>
                                <input type="tel" class="form-control py-3 fs-9" id="telefono" name="telefono"
                                    placeholder="+57 300 123 4567">
                            </div>

                            <!-- Empresa -->
                            <div class="col-12 col-md-6">
                                <label for="empresa" class="form-label fs-9 fw-medium text-dark">Empresa</label>
                                <input type="text" class="form-control py-3 fs-9" id="empresa" name="empresa"
                                    placeholder="Nombre de tu empresa">
                            </div>

                            <!-- Asunto -->
                            <div class="col-12">
                                <label for="asunto" class="form-label fs-9 fw-medium text-dark">Asunto *</label>
                                <select class="form-select py-3 fs-9" id="asunto" name="asunto" required>
                                    <option value="">Selecciona un asunto</option>
                                    <option value="informacion">Solicitar información</option>
                                    <option value="demo">Solicitar demo</option>
                                    <option value="soporte">Soporte técnico</option>
                                    <option value="ventas">Consulta de ventas</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>

                            <!-- Mensaje -->
                            <div class="col-12">
                                <label for="mensaje" class="form-label fs-9 fw-medium text-dark">Mensaje *</label>
                                <textarea class="form-control fs-9" id="mensaje" name="mensaje" rows="5"
                                    placeholder="Cuéntanos cómo podemos ayudarte..." required></textarea>
                            </div>

                            <!-- Botón Submit -->
                            <div class="col-12">
                                <button type="submit"
                                    class="btn btn-danger w-100 py-4 fs-9 fw-medium rounded shadow text-white">
                                    Enviar mensaje
                                </button>
                            </div>

                            <div class="col-12">
                                <p class="mb-0 text-center text-secondary fs-11">
                                    * Campos obligatorios. Al enviar este formulario aceptas nuestra política de
                                    privacidad.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Información Adicional -->
<section class="position-relative py-20 bg-white overflow-hidden"
    style="background-image: url('euphoria-assets/elements/pattern-light.png')">
    <div class="position-absolute top-0 start-0 h-100 w-100"
        style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%);"></div>

    <div class="position-relative container" style="z-index:1;">
        <div class="row g-8">
            <!-- Horarios -->
            <div class="col-12 col-md-4">
                <div class="text-center p-6">
                    <div class="mb-4 d-flex justify-content-center align-items-center mx-auto text-white bg-danger rounded-circle"
                        style="width: 60px; height: 60px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                            <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3 class="font-heading fs-8 mb-3">Horarios de atención</h3>
                    <p class="mb-2 fs-9 fw-medium text-secondary">Lunes a Viernes: 8:00 AM - 6:00 PM</p>
                    <p class="mb-2 fs-9 fw-medium text-secondary">Sábados: 9:00 AM - 2:00 PM</p>
                    <p class="mb-0 fs-9 fw-medium text-danger">Soporte 24/7 por WhatsApp</p>
                </div>
            </div>

            <!-- Ubicación -->
            <div class="col-12 col-md-4">
                <div class="text-center p-6">
                    <div class="mb-4 d-flex justify-content-center align-items-center mx-auto text-white bg-danger rounded-circle"
                        style="width: 60px; height: 60px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z"
                                stroke="currentColor" stroke-width="2" />
                            <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="font-heading fs-8 mb-3">Ubicación</h3>
                    <p class="mb-0 fs-9 fw-medium text-secondary">
                        Bogotá, Colombia<br>
                        Calle 100 #10-20, Oficina 301<br>
                        Edificio Empresarial
                    </p>
                </div>
            </div>

            <!-- Redes Sociales -->
            <div class="col-12 col-md-4">
                <div class="text-center p-6">
                    <div class="mb-4 d-flex justify-content-center align-items-center mx-auto text-white bg-danger rounded-circle"
                        style="width: 60px; height: 60px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="font-heading fs-8 mb-3">Síguenos</h3>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#"
                            class="btn btn-outline-danger btn-sm rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 40px; height: 40px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M18 2h-3c-1.326 0-2.598.527-3.536 1.464C10.527 4.402 10 5.674 10 7v3H7v4h3v8h4v-8h3l1-4h-4V7c0-.265.105-.52.293-.707C14.48 6.105 14.735 6 15 6h3V2z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="btn btn-outline-danger btn-sm rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 40px; height: 40px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="btn btn-outline-danger btn-sm rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 40px; height: 40px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" fill="white" />
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="white" stroke-width="2" />
                            </svg>
                        </a>
                        <a href="#"
                            class="btn btn-outline-danger btn-sm rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 40px; height: 40px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                <rect x="2" y="9" width="4" height="12" />
                                <circle cx="4" cy="4" r="2" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mapa (Opcional - Placeholder) -->
<section class="py-0">
    <div class="w-100" style="height: 400px; background-color: #e9ecef;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6234567890123!2d-74.0567890!3d4.6782345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwNDAnNDEuNiJOIDc0wrAwMycyNC40Ilc!5e0!3m2!1ses!2sco!4v1234567890123!5m2!1ses!2sco"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<style>
    .transition-all:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08) !important;
        border-color: #dbeafe !important;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #ff6b6b;
        box-shadow: 0 0 0 0.2rem rgba(255, 107, 107, 0.25);
    }
</style>

<script>
    // Manejo del formulario de contacto
    document.getElementById('contactForm').addEventListener('submit', function (e) {
        e.preventDefault();

        // Aquí puedes agregar la lógica para enviar el formulario
        // Por ahora solo mostramos un mensaje de éxito
        Swal.fire({
            icon: 'success',
            title: '¡Mensaje enviado!',
            text: 'Gracias por contactarnos. Te responderemos pronto.',
            confirmButtonColor: '#ff6b6b',
            confirmButtonText: 'Aceptar'
        }).then(() => {
            this.reset();
        });
    });
</script>

<?= $this->include('layouts/footer') ?>