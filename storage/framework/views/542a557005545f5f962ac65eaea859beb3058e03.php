<div class="item active">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/Droplet_on.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2  class="black">Primero nos aseguramos que el droplet este encendido</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/conexionputty.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Despues nos conectamos al servidor por medio de un cliente SSH como PuTTY</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/SecurityAlert.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">La primera vez que nos conectemos a traves de PuTTY nos saldra esta alerta en la cual presionaremos "SI"</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/primeringreso.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Despues nos pedira que nos autentifiquemos como usuario de Root</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/cambioContrasena.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Y nos pedira que cambiemos la contraseña</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/update.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Ejecutaremos el comando: "sudo apt-get update"</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/apache21.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Instalaremos apache por medio del comando: "sudo apt-get install apache2" lo que nos pedira una confirmación</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/apache22.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Comprabacion de la correcta instalacion de Apache</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/php5.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Instalaremos php5 por medio del comando: "sudo apt-get install php5" lo que nos pedira una confirmación</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/info.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Crearemos un archivo para comprobar la correcta instalacion de PHP5</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/info2.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Que se vera asi</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/phpinfo.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Comprabacion de la correcta instalacion de PHP5</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/postgreSQL.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Instalaremos postgreSQL por medio del comando: "sudo apt-get install postgresql" lo que nos pedira una confirmación</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/pasosBD.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Luego podremos entrar al usuario default "postgres" de la base de datos por medio de "sudo -i -u postgres" o crear un nuevo usuario por medio de "createuser --interactive"</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/creacionTablaComandos.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Por medio del comando "psql" entramos a postgreSQL y creamos una tabla</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/postgreSQLconf.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Ahora configuraremos postgreSQL para aceptar conexiones remotas; para esto modificamos el archivo postgresql.conf</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/postgreSQLconf2.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">De la siguiente manera</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/pg_hbaconf.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Y tambien modificamos el archivo postgresql.conf</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/pg_hbaconf2.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">De la siguiente manera</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/conexionPostgreSQL.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Ahora probaremos que nos podamos conectar remotamente creando una conexion en nuestro PgAdminIII</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/contraConexion.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Nos pedira la contraseña</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/exito.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Y ya estaremos conectados remotamente</h2>
	</div>
</div>

<div class="item">
	<div class="fill" style="background-image:url(<?php echo e(asset('imagenes/tablaGrafico.jpg')); ?>);"></div>
	<div class="carousel-caption">
		<h2 class="black">Ahora crearemos una tabla a traves del entorno grafico de la siguiente manera</h2>
	</div>
</div>