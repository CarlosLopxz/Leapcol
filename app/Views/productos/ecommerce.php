<?= $this->include('layouts/header') ?>

<section class="py-20 bg-white">
  <div class="container">
    <div class="text-center mb-12">
      <h1 class="font-heading mb-4 text-dark fs-3">Plataforma E-commerce</h1>
      <p class="text-secondary fs-9 mx-auto" style="max-width: 600px;">Tienda online completa para vender tus productos en internet</p>
    </div>

    <div class="row g-6 mb-16">
      <div class="col-md-4">
        <div class="text-center p-4">
          <div class="text-danger mb-3">
            <i class="fas fa-shopping-cart fs-2"></i>
          </div>
          <h5 class="mb-2">Carrito de Compras</h5>
          <p class="text-secondary fs-11">Proceso de checkout optimizado</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center p-4">
          <div class="text-danger mb-3">
            <i class="fas fa-credit-card fs-2"></i>
          </div>
          <h5 class="mb-2">Pasarelas de Pago</h5>
          <p class="text-secondary fs-11">PayPal, Stripe, PSE integrados</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center p-4">
          <div class="text-danger mb-3">
            <i class="fas fa-mobile-alt fs-2"></i>
          </div>
          <h5 class="mb-2">Responsive</h5>
          <p class="text-secondary fs-11">Optimizado para todos los dispositivos</p>
        </div>
      </div>
    </div>

    <div class="row g-4 mb-16">
      <div class="col-md-6">
        <div class="bg-light rounded p-4 text-center" style="height: 200px; display: flex; align-items: center; justify-content: center;">
          <div>
            <i class="fas fa-store text-danger fs-1 mb-3"></i>
            <h6>Tienda Online</h6>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-light rounded p-4 text-center" style="height: 200px; display: flex; align-items: center; justify-content: center;">
          <div>
            <i class="fas fa-chart-bar text-danger fs-1 mb-3"></i>
            <h6>Panel Admin</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row g-4 justify-content-center">
      <div class="col-md-5">
        <div class="border rounded p-4">
          <h5 class="mb-3">Starter</h5>
          <div class="mb-3">
            <span class="fs-4 fw-bold text-danger">$149</span>
            <span class="text-muted">/mes</span>
          </div>
          <ul class="list-unstyled fs-11">
            <li class="mb-1">• Hasta 100 productos</li>
            <li class="mb-1">• SSL incluido</li>
            <li class="mb-1">• Soporte básico</li>
          </ul>
          <a href="#" class="btn btn-danger btn-sm w-100 mt-3">Contratar</a>
        </div>
      </div>
      <div class="col-md-5">
        <div class="border border-danger rounded p-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Business</h5>
            <span class="badge bg-danger">Popular</span>
          </div>
          <div class="mb-3">
            <span class="fs-4 fw-bold text-danger">$299</span>
            <span class="text-muted">/mes</span>
          </div>
          <ul class="list-unstyled fs-11">
            <li class="mb-1">• Productos ilimitados</li>
            <li class="mb-1">• Marketing automation</li>
            <li class="mb-1">• Soporte prioritario</li>
          </ul>
          <a href="#" class="btn btn-danger btn-sm w-100 mt-3">Contratar</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->include('layouts/footer') ?>