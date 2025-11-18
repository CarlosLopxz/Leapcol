<?= $this->include('layouts/header') ?>

<section class="py-20 bg-white">
  <div class="container">
    <div class="text-center mb-12">
      <h1 class="font-heading mb-4 text-dark fs-3">Sistema CRM Avanzado</h1>
      <p class="text-secondary fs-9 mx-auto" style="max-width: 600px;">Gestión completa de relaciones con clientes para maximizar tus ventas</p>
    </div>

    <div class="row g-6 mb-16">
      <div class="col-md-4">
        <div class="text-center p-4">
          <div class="text-danger mb-3">
            <i class="fas fa-user-friends fs-2"></i>
          </div>
          <h5 class="mb-2">Gestión de Clientes</h5>
          <p class="text-secondary fs-11">Base de datos completa con historial</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center p-4">
          <div class="text-danger mb-3">
            <i class="fas fa-chart-pie fs-2"></i>
          </div>
          <h5 class="mb-2">Pipeline de Ventas</h5>
          <p class="text-secondary fs-11">Seguimiento visual del proceso</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="text-center p-4">
          <div class="text-danger mb-3">
            <i class="fas fa-envelope fs-2"></i>
          </div>
          <h5 class="mb-2">Marketing Automation</h5>
          <p class="text-secondary fs-11">Campañas automatizadas</p>
        </div>
      </div>
    </div>

    <div class="row g-4 mb-16">
      <div class="col-md-6">
        <div class="bg-light rounded p-4 text-center" style="height: 200px; display: flex; align-items: center; justify-content: center;">
          <div>
            <i class="fas fa-funnel-dollar text-danger fs-1 mb-3"></i>
            <h6>Pipeline de Ventas</h6>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-light rounded p-4 text-center" style="height: 200px; display: flex; align-items: center; justify-content: center;">
          <div>
            <i class="fas fa-address-book text-danger fs-1 mb-3"></i>
            <h6>Gestión Clientes</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row g-4 justify-content-center">
      <div class="col-md-5">
        <div class="border rounded p-4">
          <h5 class="mb-3">Starter</h5>
          <div class="mb-3">
            <span class="fs-4 fw-bold text-danger">$199</span>
            <span class="text-muted">/mes</span>
          </div>
          <ul class="list-unstyled fs-11">
            <li class="mb-1">• Hasta 3 usuarios</li>
            <li class="mb-1">• 1,000 contactos</li>
            <li class="mb-1">• Pipeline básico</li>
          </ul>
          <a href="#" class="btn btn-danger btn-sm w-100 mt-3">Contratar</a>
        </div>
      </div>
      <div class="col-md-5">
        <div class="border border-danger rounded p-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Professional</h5>
            <span class="badge bg-danger">Popular</span>
          </div>
          <div class="mb-3">
            <span class="fs-4 fw-bold text-danger">$399</span>
            <span class="text-muted">/mes</span>
          </div>
          <ul class="list-unstyled fs-11">
            <li class="mb-1">• Hasta 15 usuarios</li>
            <li class="mb-1">• Contactos ilimitados</li>
            <li class="mb-1">• Automatización completa</li>
          </ul>
          <a href="#" class="btn btn-danger btn-sm w-100 mt-3">Contratar</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->include('layouts/footer') ?>