<?php
//Utilizaremos session_start(); para permitir el posterior uso de las sesiones.
session_start();
$TiposValoracion = array("Muy Mala", "Mala", "Media", "Buena", "Muy Buena");
?>
<!DOCTYPE html>
<html>
<head>
	<title>T5 - Formulario - ATP</title>
	<style type="text/css">
	/* Se ha utilizado css para alinear al centro todo el texto de las celdas.
	más adelante se utilizará el atributo align="center" para realizar dicho centrado
	cuando el navegador pueda considerar que no existe texto, como ocurre en el caso del
	selector radial, o en el caso del bloque de texto (<textbox></textbox).
	*/
		td {
    text-align:center; 
    vertical-align:middle;
			}
	</style>
</head>
<body>
	<form action="?" method="POST" name="Formulario">
		<!-- Se ha decidido utilizar para formatear el formulario una tabla, dado que
			otorga mayor poder de personalización, al poder manejar de una forma más docil
			el estilo del formulario. -->
	<table border="1">
		<tr>
			<th colspan="5">Formulario de introducción de datos - ATP T5 IAW</th>
		</tr>
		<tr>
			<td colspan="2">Nombre: <input type="text" id="Nombre" name="Nombre"></td>
			<!-- Para el campo email, se ha decidido utilizar una novedad que incluye HTML5, 
				la cual es un campo específico que obliga a formatear la información como
				una dirección de email (usuario@dominio.tld) -->
			<td colspan="3">Email: <input type="email" id="Email" name="Email"></td>

		</tr>
		<tr>
			<td colspan="5" align="center">Valoración</td>
		</tr>
		<tr>
			<td colspan="5" align="center">
				<?php

			/*Tratamiento del array: A través del bucle foreach, conseguimos asignar un valor del array,
			el cual va rotando por cada ronda del bucle, a una variable. Dado que el array dispone de 5
			valores, el bucle se detendrá cuando el último valor haya sido asignado.
			*/
				foreach ($TiposValoracion as $var) {
					echo '<input type="radio" name="Valoracion" value="' . $var . '">' . $var;
				}
				?>
		</td>
		</tr>
		<tr>
			<td colspan="5" align="center">
				<!-- Dado que un comentario puede ser extenso, se ha decidido utilizar un campo
					<textarea></textarea>, dado que, aparte de poder darle una anchura en lineas
					más amplia que el campo <input type="text">, permite al usuario modificar sus
					dimensiones para adaptarlo a sus necesidades -->
				<textarea name="Comentarios" cols="40" rows="6" placeholder="Introduzca sus comentarios aqui."></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="SendData" value="Enviar Datos"></td>
			<td></td>
			<td colspan="2"><button type="reset" value="Reset">Limpiar Formulario</button></td>
		</tr>
	</table>
	</form>


<?php
/*Explicación del código:
Se ha usado la función isset con la variable $_POST['SendData'], para que, mientras no se haya pulsado
el botón de "Enviar Datos", este código no se ejecute. Al pulsarse ese botón, el formulario, al haber
indicado que el destino de estos datos es esta misma página (<form action="?">), se recarga la página, y,
al haber indicado como disparador la variable SendData (la cual al activarse el botón, se ha declarado),
comienza a procesarse el formulario.
NOTA: Dado que se ha utilizado el método de envio POST (<form method="POST">), al ser el que no muestra
ningún tipo de información al usuario, el array superglobal que recibirá el formulario será $_POST['NombreDelInput'].
En caso de enviar los datos por el metodo GET, el array superglobal sería $_GET['NombreDelCampo'].

Antes iniciamos la sesión (Linea 3), por lo que ahora podemos utilizar el array 
superglobal $_SESSION['NombreDelCampo'] para mantener valores.
PHP identifica las sesiones asignando al cliente un identificador único que se guarda en el navegador
del cliente en forma de cookie. Al recuperar el identificador, carga las variables de sesión asociadas.
De esta forma podremos establecer variables que se mantendrán durante toda la navegación.

Dado que la tarea solicita que los campos Nombre, Email, y Valoración sean guardados en una variable
de sesión, se procede a ello tras la verificación de activación del botón.

A continuación, se muestran todos los valores que el usuario ha introducido, tal y como se solicita.
*/

if (isset($_POST['SendData'])) { 
	$_SESSION['Nombre'] = $_POST['Nombre'];
	$_SESSION['Email'] = $_POST['Email'];
	$_SESSION['Valoracion'] = $_POST['Valoracion'];
	
	//Nota: Para evitar malformaciones en la etiqueta <pre>, se ha eliminado temporalmente la identación.
	
	echo "<pre>
Los datos que ha introducido son:
Nombre: " .  $_POST['Nombre'] . "
Email: " .  $_POST['Email'] . "
Valoración: " .  $_POST['Valoracion'] . "
Comentarios: " .  $_POST['Comentarios'] . "
</pre>
";
	echo "<br>";
	echo "<a href='conectado.php'>Comprueba las variables de sesión!</a>";
	}


?>
</body>
</html>