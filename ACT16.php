<!DOCTYPE html>
<html>
<head>
	<title>ACT16</title>
<!--Cree un formulario con 3 campos de texto de entrada para ingresar un nombre de usuario y la contraseña dos veces, y un botón para enviar. La página de acción debe imprimir un mensaje informando si las contraseñas ingresadas son iguales o no. Tienes que usar una función. -->
</head>
<body>
	<form method="REQUEST" action="ACT16.php">
        <input type="text" name="user" value="Usuario">
        <input type="text" name="passw" value="Contraseña">
        <input type="text" name="passw1" value="Confirma contraseña">
        <input type="submit" value="ENVIAR">
    </form>

  <?php

    function contraseña()
    {
         if ($_REQUEST["passw"]==$_REQUEST["passw1"]) {
            echo "Las contraseñas son iguales.";


        }
        else{
            echo "Las contraseña no son correctas.";
        }
    }
    contraseña();
    ?>
</body>
</html>