@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">check_box_outline_blank</i>
              </div>
              <h3 class="card-title">Produtos
              <p><small>Consultar e Manter os produtos</small></p>

              </h3>
            </div>
            <div class="card-footer">
                <a href="{{ route('produtos') }}">Consultar e Gerenciar</a><br>
                <a href="{{ route('novo-produto') }}">Incluir Novo Produto</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <h3 class="card-title">Estoque
              <p><small>Realizar consultas,devoluções,baixas  e movimentaçao</small></p>

              </h3>
            </div>
            <div class="card-footer">
                <a href="{{ route('estoque') }}">Gerenciar estoque</a><br>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">supervisor_account</i>
              </div>
              <h3 class="card-title">Fornecedores
              <p><small>Consultar e Manter os Fornecedores</small></p>

              </h3>
            </div>
            <div class="card-footer">
                <a href="{{ route('fornecedores') }}">Consultar e Gerenciar</a><br>
                <a href="{{ route('novo-fornecedor') }}">Incluir Novo Produto</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">shopping_cart</i>
              </div>
              <h3 class="card-title">Compras
              <p><small>Consultar e Manter os Pedidos de Compra</small></p>

              </h3>
            </div>
            <div class="card-footer">
                <a href="{{ route('compras') }}">Consultar e Gerenciar</a><br>
                <a href="{{ route('novo-compra') }}">Incluir Novo Pedido</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">room</i>
              </div>
              <h3 class="card-title">Locais
              <p><small>Consultar e Manter os locais onde estão os produtos</small></p>

              </h3>
            </div>
            <div class="card-footer">
                <a href="{{ route('locais') }}">Consultar e Gerenciar</a><br>
                <a href="{{ route('novo-local') }}">Incluir Novo Local</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">person_outline</i>
              </div>
              <h3 class="card-title">Gerenciar Usuarios
              <p><small>Controle de Acesso ao Sitema</small></p>

              </h3>
            </div>
            <div class="card-footer">
                <a href="/user">Painel de Usuarios</a><br>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection