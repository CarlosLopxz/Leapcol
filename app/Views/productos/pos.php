<?= $this->include('layouts/header') ?>

<section class="py-20 bg-white">
  <div class="container">
    <div class="text-center mb-12">
      <h1 class="font-heading mb-4 text-dark fs-3">Sistema POS Inteligente</h1>
      <p class="text-secondary fs-9 mx-auto" style="max-width: 600px;">Punto de venta moderno con facturación electrónica y control total</p>
    </div>

    <div class="row g-6 mb-16">
      <div class="col-md-4">
        <div class="text-center p-4">
          <div class="text-danger mb-3">
            <i class="fas fa-receipt fs-2"></i>
          </div>
          <h5 class="mb-2">Facturación Electrónica</h5>
          <p class="text-secondary fs-11">Cumple normativa DIAN</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center p-4">
          <div class="text-danger mb-3">
            <i class="fas fa-barcode fs-2"></i>
          </div>
          <h5 class="mb-2">Código de Barras</h5>
          <p class="text-secondary fs-11">Lectura rápida de productos</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center p-4">
          <div class="text-danger mb-3">
            <i class="fas fa-credit-card fs-2"></i>
          </div>
          <h5 class="mb-2">Múltiples Pagos</h5>
          <p class="text-secondary fs-11">Efectivo, tarjetas, digitales</p>
        </div>
      </div>
    </div>

    <div class="row g-4 mb-16">
      <div class="col-md-6">
        <div class="bg-light rounded p-4 text-center" style="height: 200px; display: flex; align-items: center; justify-content: center;">
          <div>
            <i class="fas fa-cash-register text-danger fs-1 mb-3"></i>
            <h6>Pantalla de Venta</h6>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-light rounded p-4 text-center" style="height: 200px; display: flex; align-items: center; justify-content: center;">
          <div>
            <i class="fas fa-chart-line text-danger fs-1 mb-3"></i>
            <h6>Reportes Tiempo Real</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row g-4 justify-content-center">
      <div class="col-md-5">
        <div class="border rounded p-4">
          <h5 class="mb-3">Básico</h5>
          <div class="mb-3">
            <span class="fs-4 fw-bold text-danger">$99</span>
            <span class="text-muted">/mes</span>
          </div>
          <ul class="list-unstyled fs-11">
            <li class="mb-1">• 1 punto de venta</li>
            <li class="mb-1">• Facturación electrónica</li>
            <li class="mb-1">• Inventario básico</li>
          </ul>
          <a href="#" class="btn btn-danger btn-sm w-100 mt-3">Contratar</a>
        </div>
      </div>
      <div class="col-md-5">
        <div class="border border-danger rounded p-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Multi-tienda</h5>
            <span class="badge bg-danger">Popular</span>
          </div>
          <div class="mb-3">
            <span class="fs-4 fw-bold text-danger">$199</span>
            <span class="text-muted">/mes</span>
          </div>
          <ul class="list-unstyled fs-11">
            <li class="mb-1">• Hasta 5 puntos venta</li>
            <li class="mb-1">• Multi-sucursal</li>
            <li class="mb-1">• Inventario centralizado</li>
          </ul>
          <a href="#" class="btn btn-danger btn-sm w-100 mt-3">Contratar</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->include('layouts/footer') ?>