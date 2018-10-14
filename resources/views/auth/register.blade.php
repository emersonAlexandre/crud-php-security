{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Register</div>--}}

                    {{--<div class="panel-body">--}}
                        {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                            {{--{{ csrf_field() }}--}}

                            {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                                {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                    {{--@if ($errors->has('name'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">--}}
                                {{--<label for="role" class="col-md-4 control-label">User role</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<select id="role" class="form-control" name="role" required>--}}
                                        {{--@foreach($roles as $id => $role)--}}
                                            {{--<option value="{{$id}}">{{$role}}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}

                                    {{--@if ($errors->has('role'))--}}
                                        {{--<span class="help-block">--}}
                                            {{--<strong>{{ $errors->first('role') }}</strong>--}}
                                        {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-6 col-md-offset-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--Register--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}

        <!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>SigAtelie</title>

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/vendors.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/testeng.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/application.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}"/>

</head>


<body class="aw-layout-simple-page">
<div class="aw-layout-simple-page__container">

    <form id="form-registrar" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <div class="aw-simple-panel">

            <div class="aw-simple-panel__message">
                Por favor, informe os dados abaixo.
            </div>

            <div class="aw-simple-panel__box">

                @if(Session::has('flash_message'))
                    <div style="text-align: left;" id="idMessages" class="alert alert-success  alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <i class="fa fa-check" aria-hidden="true"></i> {!! session('flash_message') !!}
                    </div>
                @endif

                @if(Session::has('error'))
                    <div style="text-align: left;" id="idMessages" class="alert  alert-danger   alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <i class="fa  fa-exclamation-circle" aria-hidden="true"></i> {!! session('error') !!}
                    </div>
                @endif

                <div class="form-group  has-feedback js-validate">
                    <input id="name" type="text" class="form-control  input-lg" placeholder="Nome de Usuario"
                           name="name" value="{{ old('name') }}" required autofocus/>
                    <span class="glyphicon  glyphicon-user form-control-feedback" aria-hidden="true"></span>
                </div>

                <div class="form-group  has-feedback js-validate">
                    <input id="email" type="email" class="form-control  input-lg" placeholder="E-mail"
                           name="email" value="{{ old('email') }}" required/>
                    <span class="glyphicon  glyphicon-user form-control-feedback" aria-hidden="true"></span>
                </div>

                <div class="form-group has-feedback js-validate">
                    <select id="role" class="form-control input-lg" name="role" required>
                        <option value="">Tipo de usuário</option>
                        @foreach($roles as $id => $role)
                            <option value="{{$id}}">{{$role}}</option>
                        @endforeach
                    </select>
                    <span class="glyphicon  glyphicon-user form-control-feedback" aria-hidden="true"></span>
                </div>

                <div class="form-group  has-feedback js-validate">
                    <input id="password" name="password" type="password" class="form-control input-lg"
                           placeholder="Senha" required/>
                    <span class="glyphicon  glyphicon-lock  form-control-feedback" aria-hidden="true"></span>
                </div>

                <div class="form-group  has-feedback js-validate">
                    <input id="password-confirm" name="password_confirmation" type="password" class="form-control input-lg"
                           placeholder="Confirmação de senha" required/>
                    <span class="glyphicon  glyphicon-lock  form-control-feedback" aria-hidden="true"></span>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <a id="btn-cancelar" type="button" href="{{ route('login') }}"
                           class="btn  btn-primary  btn-lg  aw-btn-full-width">
                            Cancelar
                        </a>
                    </div>

                    <div class="col-sm-6">
                        <button id="btn-registrar" type="submit" class="btn  btn-success  btn-lg  aw-btn-full-width">
                            Registrar
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </form>

</div>

<script src="{{URL::asset('vendors/jquery/jquery.js')}}"></script>

<script src="{{URL::asset('js/template/vendors.js')}}"></script>
<script src="{{URL::asset('js/template/testeng.js')}}"></script>

<script src="{{URL::asset('vendors/jquery-validator/jquery.validate.min.js')}}"></script>

<script src="{{URL::asset('js/autenticacao/sigatelie-autenticacaoregistrar.js')}}"></script>

</body>
</html>

