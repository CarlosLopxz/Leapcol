<!DOCTYPE html>
<html lang="es">
<head>
    <title>Creando cuenta - Leapcol</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap/bootstrap.css') ?>"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .loading-spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #dc3545;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <script>
        Swal.fire({
            title: 'Creando tu cuenta',
            html: '<div class="loading-spinner"></div><p>Por favor espera unos momentos...</p>',
            allowOutsideClick: false,
            allowEscapeKey: false,
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading();
            }
        }).then(() => {
            window.location.href = '<?= $redirectUrl ?>';
        });
    </script>
</body>
</html>