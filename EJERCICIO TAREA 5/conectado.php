<?php
//Utilizaremos session_start(); para permitir el posterior uso de las sesiones.
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>T5 - Conectado - ATP</title>
</head>
<body>
	<?php
		//Utilizaremos la función session_id(); para recuperar el ID de sesión.
		echo "<p>Esta es tu ID de sesión:</p>";
		echo session_id();
		/*Utilizaremos la función print_r($_SESSION); para mostrar todos los datos
		* que contiene la sesión. Mostrados de la forma [Campo] => Valor */
		echo "<p>Estos son los valores que contiene tu sesión:</p>";
		print_r($_SESSION);
	?>
</body>
</html>