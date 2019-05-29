@extends('layouts.app', ['activePage' => 'editar-fornecedor', 'titlePage' => __('Editar Fornecedor')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('editar-fornecedor') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Editar Fornecedor') }}</h4>
                <input  name="idforn" id="input-forn" type="text" placeholder="{{ __('Nome do Fornecedor') }}" value="{{$fornecedor->idforn}}" style='display:none'/>
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
                    <div class="form-group{{ $errors->has('nome') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" id="input-nome" type="text" placeholder="{{ __('Nome do Fornecedor') }}" value="{{$fornecedor->nome}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('CNPJ') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('cnpj') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('cnpj') ? ' is-invalid' : '' }}" name="cnpj" id="input-cnpj" type="text" placeholder="{{ __('CNPJ') }}" value="{{$fornecedor->cnpj}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Endereço') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('endereco') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('endereco') ? ' is-invalid' : '' }}" name="endereco" id="input-endereco" type="text" placeholder="{{ __('Endereço') }}" value="{{$fornecedor->endereco}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Telefone') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('telefone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="telefone" id="input-telefone" type="text" placeholder="{{ __('Telefone') }}" value="{{$fornecedor->telefone}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="text" placeholder="{{ __('Email') }}" value="{{$fornecedor->email}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Salvar Alterações') }}</button>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <a href="{{ route('excluirfornecedor' ,$fornecedor->idforn ) }}" onclick="return confirm('Deseja mesmo apagar?')" class="btn btn-primary">{{ __('Excluir Fornecedor') }}</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection