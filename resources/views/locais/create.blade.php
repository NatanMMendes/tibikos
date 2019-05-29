@extends('layouts.app', ['activePage' => 'locais', 'titlePage' => __('Inserir Novo Local')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('criar-local') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Adicionar Novo Local') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('locais') }}" class="btn btn-sm btn-primary">{{ __('Voltar aos Locais') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Local') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('endereco') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('endereco') ? ' is-invalid' : '' }}" name="endereco" id="input-endereco" type="text" placeholder="{{ __('Local') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Capacidade') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('tamanho') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('tamanho') ? ' is-invalid' : '' }}" name="tamanho" id="input-tamanho" type="text" placeholder="{{ __('tamanho') }}" value="" aria-required="true"/>
                    </div>
                  </div>
                </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Adicionar Local') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection