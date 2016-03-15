<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h2 class="text-center"><img src="{{ asset('imagenes/login.jpg') }}" class="img-circle"><br>Inicio Sesión</h2>
			</div>
			<div class="modal-body row">
				<h6 class="text-center">Ingrese sus datos para ingresar</h6>
				{!! Form::open(['route' => 'ingreso', 'method' => 'POST', 'class' => 'form col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0']) !!}
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					{!! Form::label ('Correo electrónico:') !!}
					{!! Form::email('correoElectronico', '', ['class'=> 'form-control', 'placeholder' => 'Ingrese el correo electrónico']) !!}
				</div>
				<div class="form-group">
					{!! Form::label ('Contraseña:') !!}
					{!! Form::password('password', ['class'=> 'form-control', 'placeholder' => 'Ingrese la contraseña']) !!}
				</div>
				<div class="checkbox">
					<label><input name="remember" type="checkbox"> Recordarme</label>
				</div>
				<div>                            
					{!! Form::submit('Iniciar sesión',['class' => 'btn btn-primary']) !!}
				</div>
				{!! Form::close() !!}
			</div>
			<div class="modal-footer">
				<h6 class="text-center"><a href="">Privacy is important to us. Click here to read why.</a></h6>
			</div>
		</div>
	</div>
</div>