<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AdmonBD</title>

    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('assets/home.css') !!}
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
    <nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">AdmonBD</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar-collapsible">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="/practica1">Practica 1</a></li>
                {{--     <li><a href="#section3">Product</a></li>
                    <li><a href="#section4">Contact</a></li>
                    <li><a href="#section5">More</a></li>
                    <li>&nbsp;</li> --}}
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target=""><i class="fa fa-heart-o fa-lg"></i></a></li>
                        {{-- <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li> --}}
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <section class="container-fluid" id="section1">
        <div class="v-center">
            <h1 class="text-center">BIENVENIDO</h1>
            <h2 class="text-center lato animate slideInDown">Página principal del servidor web</h2>
            <p class="text-center">
                <br>
                <a href="/practica1" class="btn btn-blue btn-lg btn-huge lato" data-toggle="modal" data-target="">Mostrar</a>
            </p>
        </div>
    </section>
    <!-- Scripts Propios-->
    {!! Html::script('assets/js/scriptsPropios.js') !!}
    <!-- jQuery -->
    {!! Html::script('assets/js/jquery.js') !!}
    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('assets/js/bootstrap.min.js') !!}
</body>
</html>