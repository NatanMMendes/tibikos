@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <h3 class="card-title">Produtos
              <p><small>Consultar e Manter os produtos</small></p>

              </h3>
            </div>
            <div class="card-footer">
                <a href>Consultar e Manter os produtos</a><br>
                <a href>Consultar e Manter os produtos</a>

            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <h3 class="card-title">Compras
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <p>Consultar e Realizar Pedidos de Compras</p>
              </div>
            </div>
          </div>
        </div>
     
      </div>
      <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <h3 class="card-title">Fornecedores
                <p><small>Gerencimento e Controle</small></p>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href>Listagem</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <h3 class="card-title">Localidades
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <p>Consultar e Manter localidades da loja</p>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush