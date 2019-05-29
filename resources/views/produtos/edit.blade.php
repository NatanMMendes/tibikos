@extends('layouts.app', ['activePage' => 'produtos', 'titlePage' => __('Editar Produto')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('editar-produto') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Editar Produto') }}</h4>
                <input  name="idprod" id="input-idprod" type="text" placeholder="{{ __('Nome do Produto') }}" value="{{$produto->idprod}}" style='display:none'/>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('produtos') }}" class="btn btn-sm btn-primary">{{ __('Voltar aos Produtos') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nome do Produto') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nome') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" id="input-nome" type="text" placeholder="{{ __('Nome do Produto') }}" value="{{$produto->nome}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Marca') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('marca') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}" name="marca" id="input-marca" type="text" placeholder="{{ __('Marca') }}" value="{{$produto->marca}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Cor') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('cor') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('cor') ? ' is-invalid' : '' }}" name="cor" id="input-cor" type="text" placeholder="{{ __('Cor') }}" value="{{$produto->cor}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Tamanho') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('tamanho') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('tamanho') ? ' is-invalid' : '' }}" name="tamanho" id="input-tamanho" type="text" placeholder="{{ __('Tamanho') }}" value="{{$produto->tamanho}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Valor Unitário') }}</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">R$</span>
                    </div>
                    <input class="form-control{{ $errors->has('valoruni') ? ' is-invalid' : '' }}" name="valoruni" id="input-valoruni" type="text" placeholder="{{ __('0.00') }}" value="{{$produto->valoruni}}" required="true" aria-required="true"/>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Salvar Alterações') }}</button>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <a href="{{ route('excluirproduto' ,$produto->idprod ) }}" onclick="return confirm('Deseja mesmo apagar?')" class="btn btn-primary">{{ __('Excluir Produto') }}</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection