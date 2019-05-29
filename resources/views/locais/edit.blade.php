@extends('layouts.app', ['activePage' => 'locais', 'titlePage' => __('Editar Local')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('editar-local') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Editar Local') }}</h4>
                <input  name="idloc" id="input-idloc" type="text" placeholder="{{ __('Local') }}" value="{{$local->idloc}}" style='display:none'/>
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
                      <input class="form-control{{ $errors->has('endereco') ? ' is-invalid' : '' }}" name="endereco" id="input-endereco" type="text" placeholder="{{ __('Local') }}" value="{{$local->endereco}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Capacidade') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('tamanho') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('tamanho') ? ' is-invalid' : '' }}" name="tamanho" id="input-tamanho" type="text" placeholder="{{ __('Capacidade') }}" value="{{$local->tamanho}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Salvar Alterações') }}</button>
              </div>

              <div class="card-footer ml-auto mr-auto">
                <a href="{{ route('excluirlocal' ,$local->idloc ) }}" onclick="return confirm('Deseja mesmo apagar?')" class="btn btn-primary">{{ __('Excluir Local') }}</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection