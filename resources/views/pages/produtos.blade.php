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
              <div class="col-12 text-right">
                    <a href="{{ route('novo-produto') }}" class="btn btn-sm btn-primary">{{ __('Adicionar Produtos') }}</a>
                  </div>
                </div>
            <div class="table-responsive col-md-12">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID Produto
                  </th>
                  <th>
                    Nome
                  </th>
                  <th>
                    Marca
                  </th>
                  <th>
                    Cor
                  </th>
                  <th>
                    Tamanho
                  </th>
                  <th>
                    Preço Unidade
                  </th>
                  <th>
                  </th>
                </thead>
                <tbody>
                @foreach($produtos as $produto)
                  <tr>
                    <td>
                      {{ $produto->idprod}}
                    </td>
                    <td>
                      {{ $produto->nome}}

                    </td>
                    <td>
                      {{ $produto->marca }}
                    </td>
                    <td>
                      {{ $produto->cor}}
                    </td>
                    <td>
                      {{ $produto->tamanho}}
                    </td>
                    <td>
                    R$ {{ $produto->valoruni}}
                    </td>
                    <td class="td-actions text-center">
                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('manterproduto' ,$produto->idprod ) }}" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                      <a rel="tooltip" class="btn btn-erro btn-link" href="{{ route('excluirproduto' ,$produto->idprod ) }}" onclick="return confirm('Deseja mesmo apagar?')" data-original-title="" title="">
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