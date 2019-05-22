@extends('layouts.app', ['activePage' => 'produtos', 'titlePage' => __('Produtos')])

@section('content')

<div class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Produtos</h4>
            <p class="card-category"> Todos os produtos</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID Produto
                  </th>
                  <th>
                    Nome
                  </th>
                  <th>
                    Preço
                  </th>
                  <th>
                    Quantidade
                  </th>
                  <th>
                    Fornecedor
                  </th>
                  <th>
                    Localização
                  </th>
                  <th>
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Babador
                    </td>
                    <td>
                      R$50,00
                    </td>
                    <td>
                      30
                    </td>
                    <td>
                      BB Kids S.A
                    </td>
                    <td>
                      Plateleira A
                    </td>
                    <td class="td-actions text-center">
                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('profile.edit') }}" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                  </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection