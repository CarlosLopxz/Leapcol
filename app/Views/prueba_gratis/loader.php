<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activando Sistema - Leapcol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .loader-container {
            text-align: center;
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 90%;
            border: 2px solid #dc3545;
        }
        
        .spinner {
            width: 80px;
            height: 80px;
            border: 8px solid #f3f3f3;
            border-top: 8px solid #dc3545;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 2rem;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .progress-bar-custom {
            width: 100%;
            height: 8px;
            background: #f3f3f3;
            border-radius: 10px;
            overflow: hidden;
            margin: 2rem 0;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #dc3545, #ff6b6b);
            border-radius: 10px;
            width: 0%;
            animation: fillProgress 20s linear forwards;
        }
        
        @keyframes fillProgress {
            0% { width: 0%; }
            100% { width: 100%; }
        }
        
        .loading-text {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .loading-subtitle {
            color: #666;
            margin-bottom: 2rem;
        }
        
        .steps {
            text-align: left;
            margin-top: 2rem;
        }
        
        .step {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            opacity: 0.3;
            transition: opacity 0.5s ease;
        }
        
        .step.active {
            opacity: 1;
        }
        
        .step-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #dc3545;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 0.8rem;
        }
        
        .step.completed .step-icon {
            background: #28a745;
        }
    </style>
</head>
<body>
    <div class="loader-container">
        <div class="spinner"></div>
        <h2 class="loading-text">Activando Sistema</h2>
        <p class="loading-subtitle">Configurando tu prueba gratis de <?= esc($producto['nombre']) ?></p>
        
        <div class="progress-bar-custom">
            <div class="progress-fill"></div>
        </div>
        
        <div class="steps">
            <div class="step" id="step1">
                <div class="step-icon"><i class="fas fa-check"></i></div>
                <span>Verificando licencia...</span>
            </div>
            <div class="step" id="step2">
                <div class="step-icon"><i class="fas fa-check"></i></div>
                <span>Configurando base de datos...</span>
            </div>
            <div class="step" id="step3">
                <div class="step-icon"><i class="fas fa-check"></i></div>
                <span>Instalando módulos...</span>
            </div>
            <div class="step" id="step4">
                <div class="step-icon"><i class="fas fa-check"></i></div>
                <span>Preparando interfaz...</span>
            </div>
            <div class="step" id="step5">
                <div class="step-icon"><i class="fas fa-check"></i></div>
                <span>Finalizando configuración...</span>
            </div>
        </div>
    </div>

    <script>
        // Activar pasos progresivamente
        const steps = ['step1', 'step2', 'step3', 'step4', 'step5'];
        let currentStep = 0;
        
        function activateNextStep() {
            if (currentStep < steps.length) {
                const step = document.getElementById(steps[currentStep]);
                step.classList.add('active');
                
                setTimeout(() => {
                    step.classList.add('completed');
                }, 1000);
                
                currentStep++;
                
                if (currentStep < steps.length) {
                    setTimeout(activateNextStep, 4000);
                }
            }
        }
        
        // Iniciar la secuencia
        setTimeout(activateNextStep, 1000);
        
        // Redirigir después de 20 segundos
        setTimeout(() => {
            <?php 
            $sistemaModel = new \App\Models\SistemaModel();
            $sistema = $sistemaModel->getSistemaPorProducto($producto['id']);
            ?>
            <?php if ($sistema): ?>
                window.location.href = '<?= base_url($sistema['ruta_login']) ?>';
            <?php else: ?>
                window.location.href = '<?= base_url('sistema/' . $producto['id']) ?>';
            <?php endif; ?>
        }, 20000);
    </script>
</body>
</html>