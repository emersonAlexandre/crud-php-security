<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>TesteNG_Emerson_Alexandre</title>

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/vendors.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/testeng.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/application.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}"/>

</head>

<body class="aw-layout-simple-page">
<div class="aw-layout-simple-page__container">

    <form id="form-login" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="aw-simple-panel">

            <div class="aw-simple-panel__message">
                Por favor, faça o login.
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
                    <input id="email" type="email" class="form-control  input-lg" placeholder="Seu e-mail"
                           name="email" value="{{ old('email') }}"/>
                    <span class="glyphicon  glyphicon-user form-control-feedback" aria-hidden="true"></span>
                </div>

                <div class="form-group  has-feedback js-validate">
                    <input id="password" name="password" type="password" class="form-control  input-lg"
                           placeholder="Sua senha"/>
                    <span class="glyphicon  glyphicon-lock  form-control-feedback" aria-hidden="true"></span>
                </div>

                <div class="form-group">
                    <button id="btn-login" type="submit" class="btn  btn-primary  btn-lg  aw-btn-full-width">Entrar
                    </button>
                </div>

            </div>

            <div class="aw-simple-panel__footer">Novo por aqui? <a href="{{ route('register') }}">Cadastre-se</a>.</div>

        </div>

    </form>

</div>

<script src="{{URL::asset('vendors/jquery/jquery.js')}}"></script>

<script src="{{URL::asset('js/template/vendors.js')}}"></script>
<script src="{{URL::asset('js/template/testeng.js')}}"></script>

<script src="{{URL::asset('vendors/jquery-validator/jquery.validate.min.js')}}"></script>

<script src="{{URL::asset('js/autenticacao/testeng-autenticacaologin.js')}}"></script>

</body>
</html>