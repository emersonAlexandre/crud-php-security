@extends('layouts.master')

@section('title-app')<title>Produtos</title>@stop

@section('title-page')
    <div class="row">
        <div class="col-xs-10">
            <h1>LISTA DE PRODUTOS</h1>
        </div>

        @can('create-produto')
            <div class="col-xs-2">
                <div class="aw-page-header-controls">
                    <a id="createProduto" class="btn btn-primary" href="{{ route('create_produto') }}">
                        <i class="fa  fa-plus-circle"></i> <span class="hidden-xs  hidden-sm">NOVO PRODUTO</span>
                    </a>
                </div>
            </div>
        @endcan
    </div>
@stop

@section('content')
    @if(Session::has('flash_message'))
        <div id="idMessages" class="alert alert-success  alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            <i class="fa fa-check" aria-hidden="true"></i> {!! session('flash_message') !!}
        </div>
    @endif
    @include('produtos.produto-table')

@stop
