@extends('layouts.app', ['activePage' => 'compras', 'titlePage' => __('Compras')])

@section('content')
<div class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Compras</h4>
            <p class="card-category"> Todos os Pedidos de Compras</p>
          </div>
          <div class="card-body">
              <div class="col-12 text-right">
                    <a href="{{ route('novo-compra') }}" class="btn btn-sm btn-primary">{{ __('Adicionar Pedido') }}</a>
                  </div>
                </div>
            <div class="table-responsive col-md-12">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID Pedido Compra
                  </th>
                  <th>
                    ID Fornecedor
                  </th>
                  <th>
                    ID Produto
                  </th>
                  <th>
                    Data Pedido
                  </th>
                  <th>
                    Data Entrega
                  </th>
                  <th>
                    status
                  </th>
                  <th>
                  </th>
                </thead>
                <tbody>
                @foreach($compras as $compra)
                  <tr>
                    <td>
                      {{ $compra->idpc}}
                    </td>
                    <td>
                      {{ $compra->idfornc}}

                    </td>
                    <td>
                      {{ $compra->idpr }}
                    </td>
                    <td>
                      {{ $compra->datapedido}}
                    </td>
                    <td>
                      {{ $compra->dataentrega}}
                    </td>
                    <td>
                      {{ $compra->estatus}}
                    </td>
                    <td class="td-actions text-center">
                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('mantercompra' ,$compra->idpc ) }}" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                      <a rel="tooltip" class="btn btn-erro btn-link" href="{{ route('excluircompra' ,$compra->idpc ) }}" onclick="return confirm('Deseja mesmo apagar?')" data-original-title="" title="">
                        <i class="material-icons">delete</i>
                        <div class="ripple-container"></div>
                      </a>
                  </td>
                  </tr>
                @endforeach
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