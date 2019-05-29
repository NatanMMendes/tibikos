@extends('layouts.app', ['activePage' => 'estoque', 'titlePage' => __('Estoque de Produtos')])

@section('content')
<div class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Estoque de Produtos</h4>
            <p class="card-category"> Gerenciar Estoque de Produtos</p>
          </div>
          <div class="card-body">
            <div class="table-responsive col-md-12">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID Estoque
                  </th>
                  <th>
                    ID Produto
                  </th>
                  <th>
                    ID Local
                  </th>
                  <th>
                    QTD
                  </th>
                  <th>
                  </th>

                </thead>
                <tbody>
                @foreach($estoque as $item)
                  <tr>
                    <td>
                      {{ $item->idest }}
                    </td>
                    <td>
                      {{ $item->idp}}

                    </td>
                    <td>
                      {{ $item->idl }}
                    </td>
                    <td>
                      {{ $item->qtd }}
                    </td>
                    <td class="td-actions">

                      <div class="col-1 text-right">
                          <a href="{{ route('devolucao-estoque') }}" class="btn btn-sm btn-primary">{{ __('Baixa') }}</a>
                        </div>
                        <div class="col-1 text-right">
                          <a href="{{ route('baixa-estoque') }}" class="btn btn-sm btn-primary">{{ __('Devolução') }}</a>
                        </div>

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