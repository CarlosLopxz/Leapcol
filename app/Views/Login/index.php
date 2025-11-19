<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login - Leapcol</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit:400,500,600,700,800,900&subset=latin"/>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap/bootstrap.css') ?>"/>
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('public/assets/img/icono.png') ?>"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .swal2-shown .login-content {
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
    <section class="position-relative py-32 bg-white overflow-hidden login-content" style="background-image: url('<?= base_url('public/assets/euphoria-assets/elements/pattern-light.png') ?>')">
        <div class="position-absolute top-0 start-0 h-100 w-100" style="background: radial-gradient(50% 50% at 50% 50%, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%);"></div>
        <div class="position-relative container" style="z-index:1;">
            <div class="text-center mb-4">
                <img src="<?= base_url('public/assets/img/Logo.png') ?>" alt="Leapcol" width="200">
            </div>
            <div class="mb-7 text-center mw-md mx-auto">
                <h2 class="font-heading mb-4 fs-7">Iniciar Sesión</h2>
            </div>
            
            <form class="mw-sm mx-auto" method="post" action="<?= base_url('/login') ?>">
                <?= csrf_field() ?>
                <div class="mb-4 row g-6">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-1 fw-medium text-light-dark" for="email">Email</label>
                            <input class="form-control text-secondary-dark shadow" id="email" name="email" type="email" placeholder="Email" required/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-1 fw-medium text-light-dark" for="password">Contraseña</label>
                            <input class="form-control text-secondary-dark shadow" id="password" name="password" type="password" placeholder="Contraseña" required/>
                        </div>
                    </div>
                </div>
                <div class="mb-6 row align-items-center justify-content-between g-2">
                    <div class="col-auto">
                        <div class="form-check">
                            <input class="form-check-input shadow" id="remember" name="remember" type="checkbox"/>
                            <label class="form-check-label fs-13 fw-medium text-light-dark" for="remember">Recordarme</label>
                        </div>
                    </div>
                    <div class="col-auto"><a class="fs-13 fw-medium text-danger link-danger" href="#">¿Olvidaste tu contraseña?</a></div>
                </div>
                <div class="mb-6 row">
                    <div class="col-12">
                        <button class="btn btn-lg btn-danger fs-11 py-3 w-100 text-danger-light shadow" type="submit">Iniciar Sesión</button>
                    </div>
                </div>
                <p class="mb-3 fs-13 fw-medium text-light-dark text-center"><span>¿No tienes cuenta?</span> <a class="text-danger link-danger" href="#">Regístrate</a></p>
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
                window.location.reload();
            });
        <?php endif; ?>
    </script>
</body>
</html>