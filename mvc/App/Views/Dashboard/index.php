<?php headerAdmin($data); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body text-center p-5">
                    <h1 class="display-4 text-danger mb-4"><?= NOMBRE_SISTEMA ?></h1>
                    <p class="lead mb-4">¡Bienvenido al sistema MVC!</p>
                    <p class="text-muted">Framework MVC creado exitosamente</p>
                    
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">Modelos</h5>
                                    <p class="card-text">Manejo de datos y lógica de negocio</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">Vistas</h5>
                                    <p class="card-text">Presentación e interfaz de usuario</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">Controladores</h5>
                                    <p class="card-text">Lógica de control y coordinación</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php footerAdmin($data); ?>