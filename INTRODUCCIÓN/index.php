<?php
// Empecemos:

/* PHP es un lenguaje de servidor, por lo que, salvo que nosotros demos una salida al usuario, nadie sabra nada.
A continuación vamos a ver las básicas de PHP: /*

//Esto es un comentario de una sola linea. Si php detecta un comentario, se lo saltará. 
// El comentario de una linea se inicia con las 2 barras (//) y finaliza cuando abres nueva linea.

/* Esto es un comentario multilinea. Estos se abren cuando pones la barra y el asterisco (/*) y solo se cierran
cuando tu se lo dices, poniendo el mismo codigo a la inversa, asterisco y luego barra. */

/*Recordemos:
Esto abre un comentario de una sola linea: //
Esto abre (y cierra) un comentario multilinea: /* comentario */

//Las variables, el elemento esencial de PHP, se declaran como se ve a continuación:
$VariableDeTexto = "Texto";
$VariableNumerica = 0;
$VariableMixta = "Esta variable es a efectos una variable de Text0";

/*Las variables que solo contienen numeros se deben poner sin comillas, mientras que las variables que lleven texto deberán ponerse entre comillas dobles ("). Las comillas simples se utilizan tambien ('), pero en diferentes situaciones.

echo "Hola, mi nombre es Carlos";

Oops! Se me ha olvidado quitar el comentario. Como PHP se salta todo lo que este dentro de un comentario, el usuario nunca sabrá como me llamo... */

echo "Me gusta la sopa";

//echo da una salida al usuario, es decir, le dice cosas que nosotros queramos que le diga. En este caso le dirá exactamente Me gusta la sopa
//Por cierto, fijate que despues de cada cosa que pongo siempre pongo punto y coma (;) para decirle a PHP que he terminado de soltarle el rollo con esa cosa. Si no le pones punto y coma, dará un fallo de sintaxis, como veras en un ejemplo a continuación.

$VariableDePrueba = "Esto es una prueba"
echo "$VariableDePrueba";

/*Este codigo dará error porque falta el ; despues de declarar la variable (asignarle un valor), dado que se esperaba que cerrases antes de que te pusieses con el echo. /*

/*ARRAYS:
Te explico, porque la cosa se puede poner un poco extraña:

Un array lo defino como una variable dentro de una variable, es decir, una variable padre, y otra hija.
Puedes ver arrays de dos formas diferentes:
· COMO ARRAY ASOCIATIVO: Un valor, una clave, o identificador. "llave" => "valor",*/
$frutas = array(
	"a" => "naranja",
	"b" => "pera");
/*
Si pedimos a echo que nos diga el valor de la llave "a", tendremos que pedirle: echo "$frutas['a']";, dado que estas identificando la llave."
NOTA: Hemos hablado antes de las comillas simples. Para identificar una llave, utiliza comillas simples (siempre que la llave sea texto).

· COMO ARRAY SIN CLAVES: Un conjunto de valores, sin clave aparente. En este caso, si debemos llamar a un dato determinado, su llave será la posición que le corresponda CONTANDO DESDE 0*/
$frutas = array("naranja", "pera", "platano");
/*
Si queremos decir "Platano", contaremos desde 0, por lo que el orden será el siguiente:
0 identificará a naranja
1 identificará a pera
2 identificará a platano

Ejemplo: echo "$frutas[2]"; dirá: Platano.


/*CONDICIONALES
¿Verdad o mentira? Es de lo unico que se van a preocupar las condicionales. Existen distintos tipos de comparaciones, separados en 2 grupos:
=========
APTOS PARA TEXTO Y NUMEROS
=========
expr1 == expr2 --> Si son IGUALES, devuelve un TRUE
expr1 != expr2 --> Si son DIFERENTES, devuelve un TRUE

=========
SOLO APTOS PARA NUMEROS
=========
expr1 <= expr2 --> Si expr1 es menor o igual que expr2, devuelve un TRUE
expr1 < expr2 --> Si expr1 es menor que expr2, devuelve un TRUE
expr1 >= expr2 --> Si expr1 es mayor o igual que expr2, devuelve un TRUE
expr1 > expr2 --> Si expr1 es mayor que expr2, devuelve un TRUE

/* Veamos la estructura teórica de un if:

if (expr1 (operador) expr2) {
	Aqui se mete el codigo que queremos que ejecute SOLO SI SE EVALUA COMO VERDAD. Si no es verdad, no entra.
}

Tambien puedes juntarlo con un else, para dar codigo en caso de que sea mentira:

if (expr1 (operador) expr2) {
	Aqui se mete el codigo que queremos que ejecute SOLO SI SE EVALUA COMO VERDAD
} else {
	Aqui se mete el codigo que queremos que ejecute SOLO SI SE EVALUA COMO MENTIRA
}

Veamos un ejemplo:
*/
//EJEMPLO 1 (CASO DE VERDAD)
if (0 == 0) {
	echo "Esto es verdad";
}

//EJEMPLO 2 (CASO DE MENTIRA)
if (1 == 0) {
	echo "Eeeh... De verdad PHP sabe comparar?";
}

/* En el primer ejemplo, dado que es VERDAD, dirá su frase, mientras que en el segundo ejemplo, al ser mentira y no haber puesto un else, no hará nada. 

Nota: Tambien puedes comparar variables:
if ($variable1 (operador) $variable2) {
	Codigo si es verdad...
}

MULTIPLES COMPARACIONES:

Tambien puedes hacer varias comparaciones a la vez en un if, solo que su comportamiento es diferente dependiendo de lo que le indiques:
Si pones || (Suele estar en alt-GR + 1) PHP considerará: Conque una comparación sea verdad, todo el IF dará verdad.
Ej: (0 == 0 || 0 == 1): Dado que 0 es igual a 0 es verdad, el if dará positivo, aunque 0 == 1 no sea verdad.

Si pones && (Suele estar en alt + 6) PHP considerará: Solo si todas las comparaciones dan verdad, el IF dará verdad.
Ej: (0 == 0 || 0 == 1): Dado que 0 es igual a 0 es verdad, pero 0 == 1 no, el if dará negativo.



/*BUCLES
Posiblemente el eje central de la interacción con SQL, son los bucles. Los bucles, como su propio nombre indica
harán una cosa indefinidamente (nota, dando vueltas. Una vez llegan abajo, vuelven a evaluar, y si sigue dando verdad, repiten.) hasta que ocurra una de las siguientes cosas:
1. Cuando tu lo mates, con la funcion break;
2. Cuando la expresión que le has marcado deje de ser validada como TRUE, es decir, deje de ser verdad. (IGUAL QUE UN IF)

Existen 3 bucles en PHP:

===========
BUCLE WHILE
===========
El más sencillo y más util, se traduce literalmente como "Mientras", por lo que, mientras sea verdad, haz esto.
Veamos un esquema teorico:

while (expr1 == expr2) {
	Codigo a ejecutar mientras sea verdad.
}
Veamos un ejemplo:
*/

$i = 0;
while ($i != 10) {
	$i = $i + 1;
}

/* Este bucle basicamente hace:

Mientras $i NO SEA 10 haz:
	Suma 1 a $i.

Al llegar a 10, dejará de ser verdad, y dejará de hacer ese bucle, pasando a la siguiente linea de codigo.
NOTA! PROBLEMAS CON EL PENSAMIENTO COMPUTACIONAL:

He conocido a bastante gente que comete este error, y por eso quiero avisarte.
Si yo te pregunto si 0 es igual a 1 (0 == 1) tu me dirás que no.
Si yo te pregunto si 10 es diferente de 10 (10 != 10), tu me dirás que no, dado que 10 y 10 son iguales. (Que aqui es donde mucha gente mete la pata)

NOTA: Tambien puedes utilizar los arrays para un bucle while (eje central de la union con SQL)

===========
BUCLE FOR
===========
Este bucle es el más complejo, no te le guardes mucho en la cabeza, es básicamente si sabes cuantas vueltas debes dar.

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

Te explico: For se compone de 3 expresiones:
La primera ($i = 1), solo se ejecuta 1 vez al inicio del bucle.
La segunda ($i <= 10), se evalua cada vez que el bucle da una vuelta (Esta es la condicion de ejecucion)
La tercera ($i++ (es como el $i = $i + 1 que puse antes))Se ejecutará cada vez que el bucle de una vuelta.

Por ende, se evalua un numero limitado de veces. No te le recomiendo salvo casos de extrema necesidad.

===========
BUCLE FOREACH
===========
Este bucle se traduce como "para cada uno". Usalo solo en arrays que hayas creado tu, no los que te haya proporcionado sql.
Este asigna un valor del array a una variable, y durante toda la ronda puedes usar esa variable con ese valor.

Ejemplo:
*/
$frutas = array("naranja", "pera", "platano");
foreach ($frutas as $FrutaDeLaRonda) {
	echo "La fruta de esta ronda es $FrutaDeLaRonda";
}
/*
El resultado de este bucle será:
Ronda 1: La fruta de esta ronda es naranja
Ronda 2: La fruta de esta ronda es pera
Ronda 3: La fruta de esta ronda es platano

Si el array se acaba, el bucle muere con el, por eso no da mas rondas.

COMO TRATAR CON LAS FUNCIONES DE MYSQL.

Si necesitas tratar con SQL, utiliza las siguientes funciones:
1. Asigna la funcion mysqli_connect a una variable. Yo la llamo enlace dado que es nuestro "enlace" con la base de datos.*/
$enlace = mysqli_connect("localhost", "mi_usuario", "mi_contraseña", "mi_base_de_datos");

/*2. A la hora de realizar consultas:*/
$sql = "codigo en sql a enviar";
/* Si tienes que enviar variables, metelas entre comillas simples.
Ej: */
$sql = "SELECT * FROM Usuarios WHERE IDepartamento = '$IDepartamento'";
/*Ahora es cuando tienes que decidir como enviarlo:
2.1. Si no esperas ninguna respuesta, como en las consultas INSERT, UPDATE o DELETE, envialo directamente:*/
mysqli_query($enlace, $sql);
/*
2.2. Si esperas respuesta, como es el caso de la consulta SELECT, guardalo en una variable:*/
$resultado = mysqli_query($enlace, $sql);
/*Imaginemos que hemos pedido, como en el ejemplo anterior, todos los campos de la tabla Usuarios cuyas filas coincidan con esa ID de departamento, por lo que, el siguiente paso logico, es meterlo en un bucle, pero no sin antes convertirlo a un array (Asociativo o sin clave). Nosotros ahora, dado que es una consulta sencilla, pediremos un array asociativo (con clave):*/
while ($row = mysqli_fetch_assoc($resultado, MYSQLI_NUM)) {
	/*Por partes: 1. Asignamos $row a la conversión de nuestro resultado en un array asociativo.
	2. Las claves serán los nombres exactos de los campos de la tabla.
	3. Si vas a devolver resultados en formato de una tabla de html, utiliza las comillas simples para iniciar el echo. Seguimos con el ejemplo:*/
	echo '<tr>
			<td>' . $row['Nombre'] . '</td>
			<td>' . $row['Apellidos'] . '</td>';
// Integra las variables como en el ejemplo anterior.
			 }
/*Se puede dar el caso de que, por complejidad de la tabla (imagina si has realizado una consulta con conexiones entre tablas, todas juntas, y tienes en 2 tablas 2 campos que se llaman igual). Para esto, es mejor un array sin clave.
EJEMPLO:
*/
$sql = "SELECT jugadores.nombre, puestos.nombre, apellido, tantos_marcados, puesto FROM jugadores INNER JOIN puestos ON jugadores.puesto = puestos.codigo WHERE clase = '$IDClase'";
//Como hemos dicho antes, el campo nombre aparece igual tanto en la tabla jugadores como en la de puestos, por lo que no podemos llamarlas igual. Mejor el sin clave, porque asi simplemente dices el campo 0,1,2...
//NOTA: El array sin clave tendrá el MISMO ORDEN QUE TU LE HAS PEDIDO. nombre del jugador = 0, nombre del puesto = 1, apellido = 2...
	$resultado = mysqli_query($enlace, $sql);
			while ($row = mysqli_fetch_array($resultado, MYSQLI_NUM)) {
					echo '<tr>
								<td>' . $row['0'] . '</td>
								<td>' . $row['1'] . '</td>
								<td>' . $row['3'] . '</td>
								<td>' . $row['2'] . '</td>';
								//No tienes porque ponerlos en orden, ponlos segun te venga mejor tratarlos.
					}




