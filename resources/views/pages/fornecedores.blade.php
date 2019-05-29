@extends('layouts.app', ['activePage' => 'fornecedores', 'titlePage' => __('Fornecedores')])

@section('content')
<div class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Fornecedores</h4>
            <p class="card-category"> Todos os Fornecedores</p>
          </div>
          <div class="card-body">
              <div class="col-12 text-right">
                    <a href="{{ route('novo-fornecedor') }}" class="btn btn-sm btn-primary">{{ __('Adicionar Fornecedor') }}</a>
                  </div>
                </div>
            <div class="table-responsive col-md-12">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID Fornecedor
                  </th>
                  <th>
                    Nome
                  </th>
                  <th>
                    CNPJ
                  </th>
                  <th>
                  </th>
                </thead>
                <tbody>
                @foreach($fornecedores as $fornecedor)
                  <tr>
                    <td>
                      {{ $fornecedor->idforn}}
                    </td>
                    <td>
                      {{ $fornecedor->nome}}

                    </td>
                    <td>
                      {{ $fornecedor->cnpj }}
                    </td>
                    <td class="td-actions text-center">
                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('manterfornecedor' ,$fornecedor->idforn ) }}" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                      <a rel="tooltip" class="btn btn-erro btn-link" href="{{ route('excluirfornecedor' ,$fornecedor->idforn ) }}" onclick="return confirm('Deseja mesmo apagar?')" data-original-title="" title="">
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