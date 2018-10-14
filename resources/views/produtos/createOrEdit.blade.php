@extends('layouts.master')

@section('title-app')
    @if(isset($produto))
        <title>Editar produto</title>
    @else
        <title>Novo produto</title>
    @endif

@stop

@section('title-page')

    @if(isset($produto))
        <h1>
            EDITAR PRODUTO
        </h1>
    @else
        <h1>
            NOVO PRODUTO
        </h1>
    @endif
@stop

@section('content')

    @if(Session::has('flash_message'))
        <div id="idMessages" class="alert  alert-danger  alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <i class="fa  fa-exclamation-circle"></i>  {!! session('flash_message') !!}
            <br>

        </div>
    @endif

    @if (count($errors) > 0)

        <div id="idMessages" class="alert  alert-danger  alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            @foreach ($errors->all() as $error)
                <i class="fa  fa-exclamation-circle"></i> {{ $error }}
                <br>
            @endforeach

        </div>
    @endif

    @if(isset($produto))
        <form style="margin: 0; padding: 0;" method="POST" action="{{ route('update_produto', ['produto' => $produto->id]) }}">
    @else
        <form style="margin: 0; padding: 0;" method="POST" action="{{ route('store_produto') }}">
    @endif
            {{ csrf_field() }}

            <div class="row">

                <div class="col-sm-4 form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                    <label for="descricao" class="control-label">Descrição</label>

                    <input id="descricao" type="text" class="form-control" name="descricao" value="{{ isset($produto->descricao)? $produto->descricao: null }}" required autofocus>

                    @if ($errors->has('descricao'))
                        <span class="help-block">
                            <strong>{{ $errors->first('descricao') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4 form-group{{ $errors->has('quantidade') ? ' has-error' : '' }}">
                    <label for="quantidade" class="control-label">Quantidade</label>

                    <input id="quantidade" class="form-control js-number" name="quantidade" value="{{ isset($produto->quantidade) ? $produto->quantidade : null }}" required autofocus>

                    @if ($errors->has('quantidade'))
                        <span class="help-block">
                            <strong>{{ $errors->first('quantidade') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4 form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                    <label for="valor" class="control-label">Valor</label>
                    <div class="input-group">
                        <span class="input-group-addon">R$</span>
                        <input id="valor" class="form-control js-moeda" name="valor" value="{{ isset($produto->valor) ? number_format($produto->valor, 2, ',', '.') : null }}" required autofocus>
                    </div>

                    @if ($errors->has('valor'))
                        <span class="help-block">
                            <strong>{{ $errors->first('valor') }}</strong>
                        </span>
                    @endif
                </div>

            </div>

            <hr class="divider">

            @if(isset($produto))
                        <div class="btn-toolbar">

                            <button id="btnEdit" class="btn btn-success" type="submit">ATUALIZAR</button>

                            <a class="btn btn-danger" type="button" href="#" onclick="document.getElementById('form-delete').submit()">REMOVER</a>

                            <a href="{{ route('lista_produtos') }}" value="CANCELAR" class="btn btn-primary">CANCELAR</a>

                        </div>
                </form>

                <form action="{{ route('delete_produto', ['produto' => $produto->id]) }}" id="form-delete" method="POST" >
                    {{ csrf_field() }}
                </form>

            @else
                    <button type="submit" id="btnAddProduto" class="btn btn-success">SALVAR</button>

                    <a href="{{ route('lista_produtos') }}" value="CANCELAR" class="btn btn-primary">CANCELAR</a>

                </form>
            @endif

@stop