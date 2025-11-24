<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro - Leapcol</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit:400,500,600,700,800,900&subset=latin"/>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap/bootstrap.css') ?>"/>
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('public/assets/img/icono.png') ?>"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .swal2-shown .register-content {
            filter: blur(5px);
            pointer-events: none;
        }
        .volver-inicio {
            text-decoration: none;
            color: #6c757d;
            font-size: 14px;
            transition: color 0.3s ease;
        }
        .volver-inicio:hover {
            color: #dc3545;
            text-decoration: underline;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">
    <section class="position-relative py-32 bg-white overflow-hidden register-content" style="background-image: url('<?= base_url('public/assets/euphoria-assets/elements/pattern-light.png') ?>')">
        <div class="position-absolute top-0 start-0 h-100 w-100" style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%);"></div>
        <div class="position-relative container" style="z-index:1;">
            <div class="text-center mb-4">
                <img src="<?= base_url('public/assets/img/Logo.png') ?>" alt="Leapcol" width="200">
            </div>
            <div class="mb-7 text-center mw-md mx-auto">
                <h2 class="font-heading mb-4 fs-7">Crear Cuenta</h2>
                <p class="mb-0 fs-9 fw-medium text-secondary">Comienza tu experiencia con nosotros</p>
            </div>
            
            <form class="mw-sm mx-auto" method="post" action="<?= base_url('/register') ?>">
                <?= csrf_field() ?>
                <div class="mb-4 row g-6">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-1 fw-medium text-light-dark" for="name">Nombre*</label>
                            <input class="form-control text-secondary-dark shadow" id="name" name="name" type="text" placeholder="Ingresa tu nombre" required/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-1 fw-medium text-light-dark" for="email">Correo Electrónico*</label>
                            <input class="form-control text-secondary-dark shadow" id="email" name="email" type="email" placeholder="correo@ejemplo.com" required/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-1 fw-medium text-light-dark" for="password">Contraseña*</label>
                            <input class="form-control text-secondary-dark shadow" id="password" name="password" type="password" placeholder="Mínimo 6 caracteres" minlength="6" required/>
                        </div>
                    </div>
                </div>
                <div class="mb-6 row g-4">
                    <div class="col-12">
                        <button class="btn btn-lg btn-danger fs-11 py-3 w-100 text-danger-light shadow" type="submit">Registrarse</button>
                    </div>
                    <div class="col-12">
                        <a href="<?= base_url('/auth/google') ?>" class="btn btn-lg btn-outline-secondary d-flex align-items-center justify-content-center fs-11 py-3 w-100 shadow">
                            <svg class="me-2" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                            Continuar con Google
                        </a>
                    </div>
                </div>
                <p class="mb-3 fs-13 fw-medium text-light-dark text-center"><span>¿Ya tienes una cuenta?</span> <a class="text-danger link-danger" href="<?= base_url('/login') ?>">Iniciar Sesión</a></p>
                <div class="text-center">
                    <a href="<?= base_url() ?>" class="volver-inicio">
                        ← Volver al Inicio
                    </a>
                </div>
            </form>
        </div>
    </section>

    <script>
        <?php if (session()->getFlashdata('swal_error')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '<?= session()->getFlashdata('swal_error') ?>',
                confirmButtonColor: '#d33'
            });
        <?php endif; ?>

        <?php if (session()->getFlashdata('swal_success')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: '<?= session()->getFlashdata('swal_success') ?>',
                timer: 2000,
                showConfirmButton: false,
                allowOutsideClick: false
            }).then(() => {
                window.location.href = '<?= base_url('/login') ?>';
            });
        <?php endif; ?>
    </script>
</body>
</html>