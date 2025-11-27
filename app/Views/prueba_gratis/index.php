<?= $this->include('layouts/header') ?>

<section class="position-relative py-20 bg-white overflow-hidden" style="background-image: url('<?= media_url() ?>euphoria-assets/elements/pattern-light.png')">
    <div class="position-absolute top-0 start-0 h-100 w-100" style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #ffffff 100%);"></div>
    
    <div class="container position-relative" style="z-index: 1;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="bg-white rounded-4 shadow-lg p-8 p-lg-12">
                    
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <span class="badge bg-danger-dark text-danger shadow text-uppercase fs-13 fw-medium mb-4">Prueba Gratis</span>
                        <h1 class="font-heading fs-4 mb-4" style="letter-spacing: -1px;">
                            ¡Prueba nuestro sistema <span class="text-danger">GRATIS</span> por 14 días!
                        </h1>
                        <p class="fs-9 fw-medium text-secondary mb-0">
                            Sin tarjeta de crédito • Cancela cuando quieras • Acceso completo
                        </p>
                    </div>

                    <!-- Formulario -->
                    <form id="pruebaGratisForm" class="row g-6">
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-medium text-dark">Nombre completo *</label>
                            <input type="text" class="form-control form-control-lg" name="nombre" required>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-medium text-dark">Email *</label>
                            <input type="email" class="form-control form-control-lg" name="email" required>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-medium text-dark">Teléfono *</label>
                            <input type="tel" class="form-control form-control-lg" name="telefono" required>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <label class="form-label fw-medium text-dark">Empresa</label>
                            <input type="text" class="form-control form-control-lg" name="empresa">
                        </div>
                        
                        <div class="col-12">
                            <label class="form-label fw-medium text-dark">¿Qué sistema te interesa? *</label>
                            <select class="form-select form-select-lg" name="sistema" required>
                                <option value="">Selecciona un sistema</option>
                                <option value="erp">Sistema ERP - Gestión empresarial</option>
                                <option value="pos">Sistema POS - Punto de venta</option>
                                <option value="crm">Sistema CRM - Gestión de clientes</option>
                                <option value="ecommerce">E-commerce - Tienda online</option>
                                <option value="todos">Todos los sistemas</option>
                            </select>
                        </div>
                        
                        <div class="col-12">
                            <label class="form-label fw-medium text-dark">Cuéntanos sobre tu negocio</label>
                            <textarea class="form-control" name="descripcion" rows="4" placeholder="Describe brevemente tu negocio y qué necesitas..."></textarea>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terminos" name="terminos" required>
                                <label class="form-check-label fs-10 text-secondary" for="terminos">
                                    Acepto los <a href="#" class="text-danger">términos y condiciones</a> y autorizo el tratamiento de mis datos personales
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-danger btn-lg px-8 py-3 fs-9 fw-bold shadow-lg">
                                <i class="fas fa-rocket me-2"></i>
                                Comenzar mi prueba gratis
                            </button>
                        </div>
                    </form>
                    
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

<script>
document.getElementById('pruebaGratisForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const data = Object.fromEntries(formData);
    
    // Enviar por Telegram
    const message = `🚀 *Nueva solicitud de prueba gratis*\n\n` +
                   `👤 *Nombre:* ${data.nombre}\n` +
                   `📧 *Email:* ${data.email}\n` +
                   `📱 *Teléfono:* ${data.telefono}\n` +
                   `🏢 *Empresa:* ${data.empresa || 'No especificada'}\n` +
                   `💻 *Sistema:* ${data.sistema}\n` +
                   `📝 *Descripción:* ${data.descripcion || 'No especificada'}`;
    
    fetch('<?= base_url('telegram/send') ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `message=${encodeURIComponent(message)}&contact=${encodeURIComponent(data.nombre)}`
    })
    .then(response => response.json())
    .then(result => {
        if (result.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: '¡Solicitud enviada!',
                text: 'Te contactaremos en las próximas horas para activar tu prueba gratis.',
                confirmButtonColor: '#dc3545'
            });
            this.reset();
        } else {
            throw new Error(result.message);
        }
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hubo un problema al enviar tu solicitud. Por favor intenta de nuevo.',
            confirmButtonColor: '#dc3545'
        });
    });
});
</script>

<?= $this->include('layouts/footer') ?>