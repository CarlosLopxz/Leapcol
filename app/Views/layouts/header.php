<html lang="es">

<head>
    <title><?= isset($title) ? $title : 'Leapcol' ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit:400,500,600,700,800,900&amp;subset=latin" />
    <link rel="stylesheet" href="<?= media_url() ?>css/bootstrap/bootstrap.min.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= media_url() ?>img/icono.png" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div>
        <!-- navbar -->
        <div>
            <section class="overflow-hidden">
                <nav class="navbar navbar-dark navbar-expand-lg bg-white py-5 py-lg-1 container">
                    <div class="container-fluid"><a class="navbar-brand" href="index.html"><img class="img-fluid " src="<?= media_url() ?>img/Logo.png"
                                alt="logo leapcol" width="300px" /></a>
                        <div class="collapse navbar-collapse justify-content-center">
                            <ul class="navbar-nav">
                                 <li class="nav-item p-2">
                                    <a class="nav-link link-secondary" href="<?= base_url() ?>">Inicio</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="nav-link link-secondary" href="<?= base_url() ?>productos">Productos</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="nav-link link-secondary" href="<?= base_url() ?>sobre-nosotros">Sobre nosotros</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="nav-link link-secondary" href="<?= base_url() ?>contacto">Contacto</a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-none d-lg-block">
                            <div class="row align-items-center g-6">
                                <div class="col-auto"><a class="link-secondary fs-11 fw-medium" href="login.html">Registrase</a></div>
                                <div class="col-auto"><a class="btn btn-sm btn-danger shadow" href="<?= base_url() ?>login">Iniciar Sesión</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-lg-none"><a class="btn navbar-burger p-0" href="#">
                                <svg width="35" height="35" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="text-light-light" width="32" height="32" rx="6" fill="currentColor"></rect>
                                    <path class="text-secondary"
                                        d="M7 12H25C25.2652 12 25.5196 11.8946 25.7071 11.7071C25.8946 11.5196 26 11.2652 26 11C26 10.7348 25.8946 10.4804 25.7071 10.2929C25.5196 10.1054 25.2652 10 25 10H7C6.73478 10 6.48043 10.1054 6.29289 10.2929C6.10536 10.4804 6 10.7348 6 11C6 11.2652 6.10536 11.5196 6.29289 11.7071C6.48043 11.8946 6.73478 12 7 12ZM25 15H7C6.73478 15 6.48043 15.1054 6.29289 15.2929C6.10536 15.4804 6 15.7348 6 16C6 16.2652 6.10536 16.5196 6.29289 16.7071C6.48043 16.8946 6.73478 17 7 17H25C25.2652 17 25.5196 16.8946 25.7071 16.7071C25.8946 16.5196 26 16.2652 26 16C26 15.7348 25.8946 15.4804 25.7071 15.2929C25.5196 15.1054 25.2652 15 25 15ZM25 20H7C6.73478 20 6.48043 20.1054 6.29289 20.2929C6.10536 20.4804 6 20.7348 6 21C6 21.2652 6.10536 21.5196 6.29289 21.7071C6.48043 21.8946 6.73478 22 7 22H25C25.2652 22 25.5196 21.8946 25.7071 21.7071C25.8946 21.5196 26 21.2652 26 21C26 20.7348 25.8946 20.4804 25.7071 20.2929C25.5196 20.1054 25.2652 20 25 20Z"
                                        fill="currentColor"></path>
                                </svg></a></div>
                    </div>
                </nav>
                <div class="d-none navbar-menu position-fixed top-0 start-0 bottom-0 w-75 mw-xs" style="z-index: 9999;">
                    <div class="navbar-backdrop position-fixed top-0 start-0 end-0 bottom-0 bg-dark" style="opacity: 75%;"></div>
                    <nav
                        class="position-relative h-100 w-100 d-flex flex-column justify-content-between p-6 bg-white overflow-auto">
                        <div class="d-flex align-items-center"><a class="me-auto h4 mb-0 text-decoration-none" href="#"><img
                                    class="img-fluid" src="<?= media_url() ?>img/Logo.png" alt="" width="200" /></a> <a class="navbar-close text-secondary" href="#">
                                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg></a></div>
                        <div class="py-16">
                            <ul class="nav nav-pills flex-column">
                                 <li class="nav-item p-2">
                                    <a class="nav-link link-secondary" href="index.html">Inicio</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="nav-link link-secondary" href="servicios.html">Productos</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="nav-link link-secondary" href="about.html">Sobre nosotros</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a class="nav-link link-secondary" href="contacto.html">Contacto</a>
                                </li>
                            </ul>
                        </div>
                        <div class="row align-items-center g-6">
                            <div class="col-auto"><a class="link-secondary fs-11 fw-medium" href="login.html">Registrase</a></div>
                            <div class="col-auto"><a class="btn btn-sm btn-danger shadow" href="register.html">Iniciar Sesión</a>
                            </div>
                    </nav>
                </div>
            </section>
        </div>