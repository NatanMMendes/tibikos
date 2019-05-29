<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      Tibikos
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'estoque' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('estoque') }}">
          <i class="material-icons"></i>
            <p>{{ __('Estoque') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'produtos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('produtos') }}">
          <i class="material-icons"></i>
            <p>{{ __('Produtos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'fornecedores' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('fornecedores') }}">
          <i class="material-icons"></i>
            <p>{{ __('Fornecedores') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'compras' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('compras') }}">
          <i class="material-icons"></i>
            <p>{{ __('Compras') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'locais' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('locais') }}">
          <i class="material-icons"></i>
            <p>{{ __('Locais') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
        <a class="nav-link" href="/user">
          <i class="material-icons"></i>
            <p>{{ __('Usuarios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'informacoes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('informacoes') }}">
          <i class="material-icons"></i>
            <p>{{ __('Informações') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>