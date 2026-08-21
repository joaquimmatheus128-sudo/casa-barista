<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <a href="{{ asset('admin/index.html') }}" class="brand-link text-center w-100">
      <img
        src="{{ asset('barista/assets/logo-casa-do-barista.svg') }}"
        alt="Casa do Barista"
        class="brand-image-custom"
      />
    </a>
  </div>
  <!--end::Sidebar Brand-->

  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2" aria-label="Main navigation">
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        data-accordion="false"
        id="navigation"
      >
        <!-- DASHBOARD -->
        <li class="nav-item">
          <a href="{{ asset('admin/index.html') }}" class="nav-link active-custom">
            <i class="nav-icon bi bi-speedometer2"></i>
            <p>DASHBOARD</p>
          </a>
        </li>

        <!-- SEÇÃO: PRODUTOS -->
        <li class="nav-header">PRODUTOS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-bullet"></i>
            <p>PRODUTOS</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-bullet"></i>
            <p>CATEGORIAS</p>
          </a>
        </li>

        <!-- SEÇÃO: VENDAS -->
        <li class="nav-header">VENDAS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-bullet"></i>
            <p>VENDAS</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-bullet"></i>
            <p>CLIENTES</p>
          </a>
        </li>

        <!-- SEÇÃO: SITE -->
        <li class="nav-header">SITE</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-bullet"></i>
            <p>BANNER</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-bullet"></i>
            <p>GALERIA</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-bullet"></i>
            <p>DEPOIMENTOS</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-bullet"></i>
            <p>LINHA DO TEMPO</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-bullet"></i>
            <p>NEWSLETTER</p>
          </a>
        </li>
      </ul>

      <!-- Botão de Rodapé da Sidebar -->
      <div class="sidebar-footer-btn p-3 mt-4">
        <a href="{{ asset('admin/docs/introduction.html') }}" class="btn btn-docs w-100">
          <i class="bi bi-book"></i>
          View documentation
        </a>
      </div>
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->