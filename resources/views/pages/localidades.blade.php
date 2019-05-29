@extends('layouts.app', ['activePage' => 'locais', 'titlePage' => __('Localidades')])

@section('content')
<div class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Localidades</h4>
            <p class="card-category"> Todos os Locais</p>
          </div>
          <div class="card-body">
              <div class="col-12 text-right">
                    <a href="{{ route('novo-local') }}" class="btn btn-sm btn-primary">{{ __('Adicionar Local') }}</a>
                  </div>
                </div>
            <div class="table-responsive col-md-12">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID Local
                  </th>
                  <th>
                    Local
                  </th>
                  <th>
                    Capacidade
                  </th>
                  <th>
                  </th>
                </thead>
                <tbody>
                @foreach($locais as $local)
                  <tr>
                    <td>
                      {{ $local->idloc}}
                    </td>
                    <td>
                      {{ $local->endereco}}

                    </td>
                    <td>
                      {{ $local->tamanho }}
                    </td>
                    <td class="td-actions text-center">
                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('manterlocal' ,$local->idloc ) }}" data-original-title="" title="">
                        <i class="material-icons">edit</i>
                        <div class="ripple-container"></div>
                      </a>
                      <a rel="tooltip" class="btn btn-erro btn-link" href="{{ route('excluirlocal' ,$local->idloc ) }}" onclick="return confirm('Deseja mesmo apagar?')" data-original-title="" title="">
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