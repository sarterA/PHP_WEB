<!DOCTYPE html>
<html>
<head>
	<title>ACT07</title>
	<!--Cree un formulario con 2 campos de texto de entrada para ingresar un nombre de usuario y su edad, y un botón para enviar. La página de acción debe imprimirse si la persona es adulta o no.-->
</head>
<body>
	<?php

	if (isset($_REQUEST['nom'])) { 
		echo $_REQUEST['nom'];
	}

	if (isset($_REQUEST['edat'])) { 

		if ($_REQUEST['edat']>=18) { 
			echo "Es un Adulto";
		}
		else {
			echo "No es un Adulto";
		}
	}
	?>

	<form method="post" action="ACT07.php">
	Nombre: <input type="text" name="nom"> <br>
	edad: <input type="text" name="edat"> <br>
	<input type="submit" value="SEND">
</form>
</body>
</html>