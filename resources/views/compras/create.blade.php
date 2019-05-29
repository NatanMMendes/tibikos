@extends('layouts.app', ['activePage' => 'compras', 'titlePage' => __('Inserir Novo Pedido')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('criar-compra') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Adicionar Novo Pedido') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('compras') }}" class="btn btn-sm btn-primary">{{ __('Voltar aos Pedidos de Compra') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Fornecedor') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('idfornc') ? ' has-danger' : '' }}">
                    <select name='idfornc' class="custom-select" id="inputGroupSelect01">
                    @foreach ( $fornecedores as $fornecedor)
                      <option value="{{$fornecedor->idforn}}" >{{$fornecedor->nomeforn}}</option>
                    @endforeach

                    </select>                     </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Produto') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('idpr') ? ' has-danger' : '' }}">
                    <select name='idpr' class="custom-select" id="inputGroupSelect01">
                    @foreach ( $produtos as $produto)
                      <option value="{{$produto->idprod}}">{{$produto->nome}}</option>
                    @endforeach

                    </select>                      </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Data do Pedido') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('datapedido') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('datapedido') ? ' is-invalid' : '' }}" name="datapedido" id="input-datapedido" type="date" placeholder="{{ __('Data do Pedido') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Data da Entrega') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('dataentrega') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('dataentrega') ? ' is-invalid' : '' }}" name="dataentrega" id="input-dataentrega" type="date" placeholder="{{ __('Data da Entrega') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Quantidade') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('quantidade') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('quantidade') ? ' is-invalid' : '' }}" name="quantidade" id="input-quantidade" type="text" placeholder="{{ __('Quantidade') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Valor do Pedido') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('valorpedido') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('valorpedido') ? ' is-invalid' : '' }}" name="valorpedido" id="input-valorpedido" type="text" placeholder="{{ __('Valor do Pedido') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Status') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('estatus') ? ' has-danger' : '' }}">

                    <select name='estatus' class="custom-select" id="inputGroupSelect01">
                      <option value="E" >Em espera</option>
                      <option value="C" >Cancelado</option>
                      <option value="R" >Recebido</option>
                      <option value="O" >Outro</option>

                    </select>                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Adicionar Pedido') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection