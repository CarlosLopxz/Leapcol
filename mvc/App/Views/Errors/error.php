<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - <?= NOMBRE_SISTEMA ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center mt-5">
                    <h1 class="display-1 text-danger">404</h1>
                    <h2>Página no encontrada</h2>
                    <p class="lead">La página que buscas no existe o ha sido movida.</p>
                    <a href="<?= base_url() ?>" class="btn btn-danger">Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>