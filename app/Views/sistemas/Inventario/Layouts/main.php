<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Sistema de Inventario' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #dc3545;
            --secondary-color: #6c757d;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --info-color: #17a2b8;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--primary-color), #c82333);
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        
        .sidebar .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 12px 20px;
            margin: 5px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: white;
            background-color: rgba(255,255,255,0.1);
            transform: translateX(5px);
        }
        
        .sidebar .nav-link i {
            width: 20px;
            margin-right: 10px;
        }
        
        .main-content {
            padding: 20px;
        }
        
        .navbar-brand {
            color: white !important;
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-color), #c82333);
            color: white;
            border-radius: 15px 15px 0 0 !important;
            border: none;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), #c82333);
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.4);
        }
        
        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
        }
        
        .stats-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 24px;
            color: white;
        }
        
        .stats-number {
            font-size: 2rem;
            font-weight: bold;
            color: var(--dark-color);
        }
        
        .stats-label {
            color: var(--secondary-color);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0">
                <div class="sidebar">
                    <div class="p-3">
                        <h4 class="navbar-brand mb-0">
                            <i class="fas fa-boxes me-2"></i>
                            Inventario
                        </h4>
                        <small class="text-white-50">Sistema de Gestión</small>
                    </div>
                    
                    <nav class="nav flex-column mt-3">
                        <a class="nav-link active" href="<?= base_url('inventario/dashboard') ?>">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                        <a class="nav-link" href="#productos">
                            <i class="fas fa-box"></i>
                            Productos
                        </a>
                        <a class="nav-link" href="#categorias">
                            <i class="fas fa-tags"></i>
                            Categorías
                        </a>
                        <a class="nav-link" href="#proveedores">
                            <i class="fas fa-truck"></i>
                            Proveedores
                        </a>
                        <a class="nav-link" href="#movimientos">
                            <i class="fas fa-exchange-alt"></i>
                            Movimientos
                        </a>
                        <a class="nav-link" href="#reportes">
                            <i class="fas fa-chart-bar"></i>
                            Reportes
                        </a>
                        <a class="nav-link" href="#configuracion">
                            <i class="fas fa-cog"></i>
                            Configuración
                        </a>
                        
                        <hr class="text-white-50 mx-3">
                        
                        <a class="nav-link" href="<?= base_url('inventario/logout') ?>">
                            <i class="fas fa-sign-out-alt"></i>
                            Cerrar Sesión
                        </a>
                    </nav>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10">
                <div class="main-content">
                    <!-- Header -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h2 class="mb-0"><?= $title ?? 'Dashboard' ?></h2>
                            <small class="text-muted">Bienvenido, <?= $cliente['nombre'] ?? 'Usuario' ?></small>
                        </div>
                        <div class="d-flex align-items-center">
                            <?php if ($prueba): ?>
                                <span class="badge bg-success me-2">
                                    <i class="fas fa-circle me-1"></i>
                                    Prueba Gratis: <?= $dias_restantes ?> días restantes
                                </span>
                            <?php else: ?>
                                <span class="badge bg-warning me-2">
                                    <i class="fas fa-exclamation-triangle me-1"></i>
                                    Sin prueba activa
                                </span>
                            <?php endif; ?>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-user me-1"></i>
                                    <?= $cliente['nombre'] ?? 'Usuario' ?>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#perfil"><i class="fas fa-user me-2"></i>Mi Perfil</a></li>
                                    <li><a class="dropdown-item" href="#configuracion"><i class="fas fa-cog me-2"></i>Configuración</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="<?= base_url('inventario/logout') ?>"><i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesión</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <?= $this->renderSection('scripts') ?>
</body>
</html>