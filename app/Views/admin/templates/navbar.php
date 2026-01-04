 <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item nav-category">Inicio</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Administracion</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/productos') ?>">Productos</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/categorias') ?>">Categoria</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/usuarios') ?>">Usuarios</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/pruebas-gratis') ?>">Pruebas Gratis</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('admin/ventas') ?>">Ventas</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/logout') ?>">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title"> Cerrar Sesión</span>
              </a>
            </li>
          </ul>
        </nav>