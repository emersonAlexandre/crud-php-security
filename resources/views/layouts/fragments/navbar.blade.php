<nav class="navbar  navbar-fixed-top  navbar-default  js-sticky-reference" id="main-navbar">
    <div class="container-fluid">

        <div class="navbar-header">

            <a class="navbar-brand  hidden-xs" href="{{ url('/') }}">
                {{ config('app.name', 'TesteNG_Emerson_Alexandre') }}
            </a>

            <ul class="nav  navbar-nav">
                <li>
                    <a href="#" class="js-sidebar-toggle"><i class="fa  fa-bars"></i></a>
                </li>
            </ul>
        </div>

        <ul class="nav navbar-nav  navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="fa  fa-user"></i>
                </a>

                <ul class=" siga-dropdown-menu dropdown-menu dropdown-menu-right">
                    @if (Route::has('login'))
                        @auth
                            <li class="dropdown-header">
                                <center>
                                    Usuário <br>
                                    <b>{{ Auth::user()->name }}</b>
                                </center>
                            </li>
                        @else
                        @endauth
                    @endif

                    <ul class="list-group">

                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a class="list-group-item"  href="#" onclick="document.getElementById('form-logout').submit()">Sair</a>
                                @else
                                    <a class="list-group-item"  href="{{ route('login') }}" >Login</a>
                                    <a class="list-group-item"  href="{{ route('register') }}" >Resgitrar</a>
                                @endauth
                            </div>
                        @endif

                    </ul>

                </ul>

            </li>

            <li>
                <form action="{{ route('logout') }}" method="POST" id="form-logout">
                    {{ csrf_field() }}

                </form>
            </li>

        </ul>

    </div>
</nav>
