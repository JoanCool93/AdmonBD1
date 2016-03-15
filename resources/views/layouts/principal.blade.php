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
		{!! Html::style('assets/estilosPropios.css') !!}
		{!! Html::style('assets/css/modern-business.css') !!}
		{!! Html::style('assets/font-awesome/css/font-awesome.min.css') !!}
		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		    <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="/">AdmonBD</a>
		        </div>
		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav navbar">
		                <li>
		                    <a href="/practica1">Practica 1</a>
		                </li>
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
				    
					</ul>
		        </div>
		        <!-- /.navbar-collapse -->
		    </div>
		    <!-- /.container -->
		</nav>

		<div class="container">
			@if (Session::has('errors'))
		    <div class="alert alert-warning" role="alert">
			<ul>
	            <strong>Oops! Algo ha salido mal : </strong>
			    @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
		        @endforeach
		    </ul>
		    </div>
			@endif
    	</div>
		@yield('content')
		@yield('scripts')

		<hr>
		<!-- Footer -->
	    <footer>
	        <div class="row">
	            <div class="col-lg-12" align="center">
	                <p>Copyright &copy; Agricola Noble Grain S.A. 2015</p>
	            </div>
	        </div>
	    </footer>
		<!-- Scripts Propios-->
		{!! Html::script('assets/js/scriptsPropios.js') !!}
		<!-- jQuery -->
        {!! Html::script('assets/js/jquery.js') !!}

        <!-- Bootstrap Core JavaScript -->
        {!! Html::script('assets/js/bootstrap.min.js') !!}
	</body>
</html>
