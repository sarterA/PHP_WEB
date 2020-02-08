<!DOCTYPE html>
<html>
<head>
	<title>ACT09</title>
<!--Cree un formulario con un campo de texto de entrada para ingresar el nombre de usuario y 4 controles diferentes de casillas de verificación (fútbol, tenis, baloncesto, golf) para seleccionar los deportes practicados por el usuario y un botón para enviar. La página de acción debe imprimir el nombre de la persona, cuántos deportes se han seleccionado y el nombre de los deportes seleccionados. -->
</head>
<body>

	<form action="ACT09.php" method="post">
 		Nombre: <input type="text" name="nombre"> <br>

		<input type="checkbox" name="check1" value="1">Fútbol <br>
		<input type="checkbox" name="check2" value="2">Tenis <br>
		<input type="checkbox" name="check3" value="3">Baloncesto <br>
		<input type="checkbox" name="check4" value="4">Golf <br>
		<input type="submit" name="enviar">
	
	</form>

	<?php
		if (isset($_REQUEST['nombre'])) {
		
		
		$sport = " ";
		$num = 0;
            if (isset($_REQUEST["check1"])) {
                $num++;
                $sport = "Fútbol";
            }
            if (isset($_REQUEST["check2"])) {
                $num++;
                $sport = $sport . "Tenis";
            }
            if (isset($_REQUEST["check3"])) {
                $num++;
                $sport = $sport . "Baloncesto";
            }
            if (isset ($_REQUEST["check4"])) {
                $num++;
                $sport = $sport . "Golf";
            }
            echo $_REQUEST["nombre"]." Practica este numero de deportes: ".$num." , Que son: ".$sport;
        }
        ?>
</body>
</html>