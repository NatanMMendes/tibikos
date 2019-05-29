@extends('layouts.app', ['activePage' => 'compras', 'titlePage' => __('Editar Pedido')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('editar-compra') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Editar Pedido') }}</h4>
                <input  name="idpc" id="input-idpc" type="text" placeholder="{{ __('Pedido') }}" value="{{$compra->idpc}}" style='display:none'/>
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
                      <option value="{{$fornecedor->idforn}}" {{ $compra->idfornc == $fornecedor->idforn ? 'selected' : '' }}>{{$fornecedor->nomeforn}}</option>
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
                      <option value="{{$produto->idprod}}" {{ $compra->idpr == $produto->idprod ? 'selected' : '' }}>{{$produto->nome}}</option>
                    @endforeach

                    </select>                                         </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Data do Pedido') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('datapedido') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('datapedido') ? ' is-invalid' : '' }}" name="datapedido" id="input-datapedido" type="date" placeholder="{{ __('Data do Pedido') }}" value="{{$compra->datapedido}}" required="true" aria-required="true"/>
                    
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Data da Entrega') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('dataentrega') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('dataentrega') ? ' is-invalid' : '' }}" name="dataentrega" id="input-dataentrega" type="date" placeholder="{{ __('Data da Entrega') }}" value="{{$compra->dataentrega}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Quantidade') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('quantidade') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('quantidade') ? ' is-invalid' : '' }}" name="quantidade" id="input-quantidade" type="text" placeholder="{{ __('Quantidade') }}" value="{{$compra->quantidade}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Valor do Pedido') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('valorpedido') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('valorpedido') ? ' is-invalid' : '' }}" name="valorpedido" id="input-valorpedido" type="text" placeholder="{{ __('Valor do Pedido') }}" value="{{$compra->valorpedido}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Status') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('estatus') ? ' has-danger' : '' }}">
                    <select name='estatus' class="custom-select" id="inputGroupSelect01">
                      <option value="E" {{ $compra->estatus == "E" ? 'selected' : '' }}>Em Espera</option>
                      <option value="C" {{ $compra->estatus == "C" ? ' selected' : '' }}>Cancelado</option>
                      <option value="R" {{ $compra->estatus == "R" ? ' selected' : '' }}>Recebido</option>
                      <option value="O" {{ $compra->estatus == "O" ? ' selected' : '' }}>Outro</option>

                    </select>                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Salvar Alterações') }}</button>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <a href="{{ route('excluircompra' ,$compra->idpc ) }}" onclick="return confirm('Deseja mesmo apagar?')" class="btn btn-primary">{{ __('Excluir Pedido') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection