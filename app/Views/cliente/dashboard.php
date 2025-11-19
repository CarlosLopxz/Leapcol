<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dashboard Cliente - Leapcol</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3>Dashboard Cliente</h3>
                        <a href="<?= base_url('/logout') ?>" class="btn btn-danger btn-sm">Cerrar Sesión</a>
                    </div>
                    <div class="card-body">
                        <h4>Bienvenido, <?= session()->get('email') ?></h4>
                        <p>Rol: <span class="badge bg-primary"><?= ucfirst(session()->get('rol')) ?></span></p>
                        <p>Esta es tu área de cliente.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>