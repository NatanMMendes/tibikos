@extends('layouts.app', ['activePage' => 'fornecedores', 'titlePage' => __('Inserir Novo Fornecedor')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('criar-fornecedor') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Adicionar Novo Fornecedor') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('fornecedores') }}" class="btn btn-sm btn-primary">{{ __('Voltar aos Fornecedores') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nome do Fornecedor') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nomeforn') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('nomeforn') ? ' is-invalid' : '' }}" name="nomeforn" id="input-nomeforn" type="text" placeholder="{{ __('Nome do Fornecedor') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('CNPJ') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('cnpj') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('cnpj') ? ' is-invalid' : '' }}" name="cnpj" id="input-cnpj" type="text" placeholder="{{ __('CNPJ') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Endereço') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('endereco') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('endereco') ? ' is-invalid' : '' }}" name="endereco" id="input-endereco" type="text" placeholder="{{ __('Endereço') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Telefone') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('telefone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="telefone" id="input-telefone" type="text" placeholder="{{ __('Telefone') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="text" placeholder="{{ __('Email') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Adicionar Fornecedor') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection