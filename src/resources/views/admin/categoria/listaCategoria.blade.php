<!--begin::App Main-->
<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="mb-0 fs-3">Categorias</h1>
        </div>
        <div class="col-sm-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Categorias</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--end::App Content Header-->

  <!--begin::App Content-->
  <div class="app-content">
    <div class="container-fluid">
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
                        id="pesquisar-categoria"
                        class="form-control"
                        placeholder="Pesquisar categoria"
                        aria-label="Pesquisar categoria"
                        style="width: 180px"
                      />
                    </div>
                    <select
                      id="categoria-status-filter"
                      class="form-select form-select-sm w-auto"
                      aria-label="Filtrar por status"
                    >
                      <option value="all" selected>Todas as categorias</option>
                      <option value="ativo">Ativo</option>
                      <option value="inativo">Inativo</option>
                    </select>
                    <!-- CORRIGIDO: data-bs-target ajustado para #modal-add-categoria -->
                    <button
                      type="button"
                      class="btn btn-sm btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#modal-add-categoria"
                    >
                      <i class="bi bi-plus-lg me-1" aria-hidden="true"></i>
                      Adicionar categoria
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
                      <th>NOME</th>
                      <th>STATUS</th>
                      <th class="text-end">AÇÕES</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($listaCategoria as $categoria)
                      <tr>
                        <td>{{ $categoria->id_categoria }}</td>
                        <td>{{ $categoria->nome_categoria }}</td>
                        <td>
                          @if($categoria->status_categoria === 'ATIVO')
                            <span class="badge text-bg-success">Ativo</span>
                          @else
                            <span class="badge text-bg-warning">Inativo</span>
                          @endif
                        </td>
                        <td class="text-end">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-outline-secondary" aria-label="Editar">
                              <i class="bi bi-pencil" aria-hidden="true"></i>
                            </button>
                            <button
                              type="button"
                              class="btn btn-outline-danger"
                              data-bs-toggle="modal"
                              data-bs-target="#modal-delete-categoria"
                              aria-label="Deletar"
                            >
                              <i class="bi bi-trash" aria-hidden="true"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="4" class="text-center py-4 text-muted">
                          Nenhuma categoria cadastrada.
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
                Total de categorias <strong>{{ $listaCategoria->count() }}</strong>
              </div>
              <ul class="pagination pagination-sm m-0 float-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">&laquo;</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
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

      <!-- Modal Adicionar Categoria -->
      <div
        class="modal fade"
        id="modal-add-categoria"
        tabindex="-1"
        aria-labelledby="modal-add-categoria-label"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="{{ route('admin.categoria.store') }}" method="POST">
              @csrf
              <div class="modal-header">
                <h5 class="modal-title" id="modal-add-categoria-label">Adicionar Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                <div class="mb-3">
                  <label for="nome_categoria" class="form-label">Nome da Categoria</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nome_categoria"
                    name="nome_categoria"
                    placeholder="Ex: Salgados, Bebidas..."
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="status_categoria" class="form-label">Status</label>
                  <select id="status_categoria" name="status_categoria" class="form-select">
                    <option value="ATIVO" selected>ATIVO</option>
                    <option value="INATIVO">INATIVO</option>
                  </select>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Cancelar
                </button>
                <button type="submit" class="btn btn-primary">Salvar categoria</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Modal Adicionar Categoria -->

      <!-- Modal Deletar Categoria -->
      <div
        class="modal fade"
        id="modal-delete-categoria"
        tabindex="-1"
        aria-labelledby="modal-delete-categoria-label"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-delete-categoria-label">Excluir Categoria</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p class="mb-0">
                Tem certeza de que deseja excluir esta categoria? Esta ação não poderá ser desfeita.
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Cancelar
              </button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                Confirmar Exclusão
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal Deletar Categoria -->

    </div>
  </div>
  <!--end::App Content-->
</main>
<!--end::App Main-->