<?php 
	echo "Buen dia <br />";
	echo getenv("NOMBRE");


	$conexion = new mysqli("mysql","root","1234","prueba");


	phpinfo();