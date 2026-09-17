<!--begin::App Main-->
<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6">
          <h1 class="mb-0 fs-3">Banners</h1>
        </div>
        <div class="col-sm-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Banners</li>
            </ol>
          </nav>
        </div>
      </div>
      <!--end::Row-->
      {{-- ALERTAS SUCESSO --}}
       @if (session('sucesso'))
          <div class="alert alert-success" role="alert">
              <i class="bi bi-check-circle-fill"></i>
              {{ session('sucesso') }}
          </div>
      @endif

      {{-- ALERTAS ERRO --}}
      @if (session('erro'))
          <div class="alert alert-danger" role="alert">
              <i class="bi bi-exclamation-circle-fill"></i>
              {{ session('erro') }}
          </div>
      @endif
    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content Header-->

  <!--begin::App Content-->
  <div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-12">
          <!--begin::Card-->
          <div class="card mb-4">
            <!--begin::Card Header-->
            <div class="card-header">
              <div class="row g-2 align-items-center">
                <div class="col-12 col-md-4">
                  <h3 class="card-title">Tabela</h3>
                </div>
                <div class="col-12 col-md-8">
                  <div class="d-flex flex-wrap justify-content-md-end gap-2">
                    <div class="input-group input-group-sm w-auto">
                      <span class="input-group-text">
                        <i class="bi bi-search" aria-hidden="true"></i>
                      </span>
                      <input
                        type="search"
                        id="banner-search"
                        class="form-control"
                        placeholder="Pesquisar banner"
                        aria-label="Pesquisar banners"
                        style="width: 180px"
                      />
                    </div>
                    <select
                      id="banner-status-filter"
                      class="form-select form-select-sm w-auto"
                      aria-label="Filtrar por status"
                    >
                      <option value="all" selected>Todos</option>
                      <option value="ativo">Ativo</option>
                      <option value="inativo">Inativo</option>
                    </select>
                    <button
                      type="button"
                      class="btn btn-sm btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#modal-add-banner"
                    >
                      <i class="bi bi-plus-lg me-1" aria-hidden="true"></i>
                      Inserir novo banner
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!--end::Card Header-->

            <!--begin::Card Body-->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-hover align-middle m-0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>IMAGEM</th>
                      <th>DESCRIÇÃO</th>
                      <th>STATUS</th>
                      <th class="text-end">AÇÕES</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($listaBanner as $banner)
                    <tr>
                      {{-- ID --}}
                      <td>{{ $banner->id_banner }}</td>

                      {{-- Imagem --}}
                      <td>
                        @if($banner->imagem_banner)
                          <img
                            src="{{ asset('barista/assets/' . $banner->imagem_banner) }}"
                            alt="{{ $banner->titulo_banner }}"
                            class="rounded"
                            style="width: 100px; height: 60px; object-fit: cover;"
                          >
                        @else
                          <span class="text-muted">Sem imagem</span>
                        @endif
                      </td>

                      {{-- Título / Descrição --}}
                      <td>
                        <span>{{ $banner->titulo_banner }}</span>
                      </td>

                      {{-- Status --}}
                      <td>
                        @if($banner->status_banner === 'ATIVO')
                          <span class="badge text-bg-success">Ativo</span>
                        @else
                          <span class="badge text-bg-warning">Inativo</span>
                        @endif
                      </td>

                      {{-- Ações --}}
                      <td class="text-end">
                        <div class="btn-group btn-group-sm">
                          <button
                            type="button"
                            class="btn btn-outline-secondary"
                            data-bs-toggle="modal"
                            data-bs-target="#modal-edit-banner"
                            data-id="{{ $banner->id_banner }}"
                            data-titulo="{{ $banner->titulo_banner }}"
                            data-status="{{ $banner->status_banner }}"
                            data-image="{{ asset('barista/assets/' . $banner->imagem_banner) }}"
                            data-url="{{ route('admin.banner.update', $banner->id_banner) }}"
                            aria-label="Editar">
                            <i class="bi bi-pencil" aria-hidden="true"></i>
                          </button>

                          {{-- Deletar --}}
                          <form action="{{route('admin.banner.status', $banner->id_banner) }}"
                            method="POST" class="d-inline">
                          @csrf
                          @method('PATCH')

                          @if ($banner->status_banner === 'ATIVO')
                            <button
                            type="submit"
                            class="btn btn-outline-danger"
                            data-bs-toggle="modal"
                            data-bs-target="#modal-status-banner"
                            title="Desativar banner"
                            data-url="{{route('admin.banner.status', $banner->id_banner) }}"
                            data-status="ATIVO"
                            aria-label="Deletar">
                            <i class="bi bi-eye-fill" aria-hidden="true"></i>
                            </button>

                          @else
                            <button
                            type="submit"
                            class="btn btn-outline-success"
                            data-bs-toggle="modal"
                            data-bs-target="#modal-status-banner"
                            title="Desativar banner"
                            data-url="{{route('admin.banner.status', $banner->id_banner) }}"
                            data-status="INATIVO"
                            aria-label="Deletar">
                            <i class="bi bi-eye-slash" aria-hidden="true"></i>
                            </button>

                          @endif

                          </form>

                        </div>
                      </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="5" class="text-center py-4 text-muted">
                        Nenhum banner cadastrado.
                      </td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
            <!--end::Card Body-->

            <!--begin::Card Footer-->
            <div class="card-footer clearfix">
              <div class="float-start pt-1 fs-7 text-body-secondary">
                Total de banners:
                <strong>{{ $listaBanner->count() }}</strong>
              </div>
              <ul class="pagination pagination-sm m-0 float-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">&laquo;</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">&raquo;</a>
                </li>
              </ul>
            </div>
            <!--end::Card Footer-->
          </div>
          <!--end::Card-->
        </div>
      </div>
      <!--end::Row-->

      <!--begin::Add Banner Modal-->
      <div
        class="modal fade"
        id="modal-add-banner"
        tabindex="-1"
        aria-labelledby="modal-add-banner-label"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <form
              action="{{ route('admin.banner.store') }}"
              method="POST"
              enctype="multipart/form-data"
            >
              @csrf

              <div class="modal-header">
                <h5 class="modal-title" id="modal-add-banner-label">Adicionar Banner</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>

              <div class="modal-body">
                <div class="mb-3">
                  <label for="new-banner-title" class="form-label">Título Banner</label>
                  <input
                    type="text"
                    class="form-control"
                    id="new-banner-title"
                    name="titulo_banner"
                    placeholder="Promoção de Verão"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="img-banner" class="form-label">Selecione uma imagem</label>
                  <input
                    type="file"
                    class="form-control"
                    id="img-banner"
                    name="imagem_banner"
                    accept="image/*"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="new-banner-status" class="form-label">Status</label>
                  <select
                    id="new-banner-status"
                    name="status_banner"
                    class="form-select"
                  >
                    <option value="ATIVO" selected>Ativo</option>
                    <option value="INATIVO">Inativo</option>
                  </select>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Cancelar
                </button>
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--end::Add Banner Modal-->

      {{-- Início - Modal Editar banner --}}
      <div
        class="modal fade"
        id="modal-edit-banner"
        tabindex="-1"
        aria-labelledby="modal-edit-banner-label"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">

            <form id="form-edit-banner"
              method="POST"
              enctype="multipart/form-data"
            >
              @csrf
              @method('PUT')

              <div class="modal-header">
                <h5 class="modal-title" id="modal-edit-banner-label">Editar Banner</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>

              <div class="modal-body">
                <div class="mb-3">
                  <label for="edit-banner-titulo" class="form-label">Título Banner</label>
                  <input
                    type="text"
                    class="form-control"
                    id="edit-banner-titulo"
                    name="titulo_banner"
                    placeholder="Promoção de Verão"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="edit-banner-imagem" class="form-label">Selecione uma imagem</label>
                  <input
                    type="file"
                    class="form-control"
                    id="edit-banner-imagem"
                    name="imagem_banner"
                    accept="image/*"
                  />
                  <div class="banner-upload mt-2">
                    <img
                      id="edit-banner-mostrar"
                      src=""
                      alt="Pré-visualização do banner"
                      class="img-fluid rounded"
                      style="max-height: 150px; object-fit: cover;"
                    />
                  </div>
                </div>

                <div class="mb-3">
                  <label for="edit-banner-status" class="form-label">Status</label>
                  <select
                    id="edit-banner-status"
                    name="status_banner"
                    class="form-select"
                  >
                    <option value="ATIVO">Ativo</option>
                    <option value="INATIVO">Inativo</option>
                  </select>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Cancelar
                </button>
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      {{-- Fim - Modal Editar banner --}}

      <!--begin::Delete Banner Modal-->
      <div
        class="modal fade"
        id="modal-status-banner"
        tabindex="-1"
        aria-labelledby="modal-status-banner-label"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">

            <form id="form-status-banner"  method="POST">
              
              @csrf
              @method('PATCH')

              <div class="modal-header">
                <h5 class="modal-title" id="modal-status-banner-titulo">Alterar status do Banner</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>

              <div class="modal-body">
                <p class="mb-0" id="modal-status-banner-txt">
                  
                </p>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Cancelar
                </button>

                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btn-status-banner">
                  Confirmar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--end::Delete Banner Modal-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content-->
</main>
<!--end::App Main-->

{{-- Editar Banner --}}
<script>
    const modalEditarBanner = document.getElementById('modal-edit-banner');
    const formEditBanner    = document.getElementById('form-edit-banner');
    const editTitulo        = document.getElementById('edit-banner-titulo');
    const editStatus        = document.getElementById('edit-banner-status');
    const editImagem        = document.getElementById('edit-banner-imagem');
    const editMostrar       = document.getElementById('edit-banner-mostrar');

    // Carregar as informações no modal ao abrir
    modalEditarBanner.addEventListener('show.bs.modal', function(event) {
        const botao = event.relatedTarget;

        const titulo = botao.getAttribute('data-titulo');
        const status = botao.getAttribute('data-status');
        const image  = botao.getAttribute('data-image');
        const url    = botao.getAttribute('data-url');

        // Definir a action do formulário para a rota de update correta
        formEditBanner.action = url;

        // Preencher os campos do formulário
        editTitulo.value  = titulo;
        editStatus.value  = status;
        editMostrar.src   = image;

        // Limpar o input de arquivo para não obrigar o usuário a re-enviar a foto
        editImagem.value  = '';
    });

    // Pré-visualizar nova foto selecionada
    editImagem.addEventListener('change', function() {
        const arquivo = this.files[0];
        if (arquivo) {
            editMostrar.src = URL.createObjectURL(arquivo);
        }
    });
</script>

{{-- Ativar e Desativar Banner --}}
<script>

    const modalStatusBanner   = document.getElementById('modal-status-banner')
    const formStatusBanner    = document.getElementById('form-status-banner') 
    const tituloStatusBanner  = document.getElementById('modal-status-banner-titulo')
    const txtStatusBanner     = document.getElementById('modal-status-banner-txt')
    const btnStatusBanner     = document.getElementById('btn-status-banner')

    modalStatusBanner.addEventListener('show.bs.modal', function(event) {

      

      const botao = event.relatedTarget;

      const url       = botao.getAttribute('data-url');
      const titulo    = botao.getAttribute('data-titulo');
      const status    = botao.getAttribute('data-status');

      formStatusBanner.action = url;
      

      if(status === 'ATIVO'){

        tituloStatusBanner.textContent  = 'Desativar Status Banner';
        txtStatusBanner.textContent     = 'Tem certeza de que deseja desativar o status deste banner?';
        btnStatusBanner.textContent     = 'Desativar'; 

        btnStatusBanner.className = 'btn btn-danger'
      }else{
        tituloStatusBanner.textContent  = 'Ativar Status Banner';
        txtStatusBanner.textContent     = 'Tem certeza de que deseja ativar o status deste banner?';
        btnStatusBanner.textContent     = 'ativar';

        btnStatusBanner.className       = 'btn btn-success'
      }

    })

</script>

{{-- Time para alerta --}}
<script>

    setTimeout(() => {

      const alertas   = document.querySelectorAll('.alert')

      alertas.forEach(function(alerta){
        const instancia = bootstrap.Alert.getOrCreateInstance(alerta)

        instancia.close()
      })
      
    }, 5000);
</script>