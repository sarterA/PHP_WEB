<!DOCTYPE html>
<html>
<head>
	<title>ACT15</title>
<!--Cree un formulario con 2 campos de texto de entrada para ingresar un nombre de usuario y contraseña, y un botón para enviar. La página de acción debe imprimirse si el inicio de sesión es correcto o no. Debe usar un vector asociativo para almacenar los nombres de usuario y las contraseñas de 5 usuarios diferentes. -->
</head>
<body>
 <form method="REQUEST" action="ACT15.php">
        <input type="text" name="usuario">
        <input type="text" name="password">
        <input type="submit" value="ENVIAR">

    </form>


  <?php
    $cuentas = array(
        array("pepe","pepe2"),
        array("nacho","nacho2"),
        array("paco","paco2"),
        array("luis","luis2"),
        array("ubu","ubu2")
    );

    $good = false;
    for ($f=0; $f<count($cuentas); $f++){
        $usuario = $cuentas[$f][0];
        $password = $cuentas[$f][1];

                if ($usuario==$_REQUEST["usuario"] && $password==$_REQUEST["password"]){
                    echo "El usuario y contraseña es correcta.";
                    $good=true;
                    break;
                }
        }
                if(!$good){
                    echo "El usuario y/o contraseña no son correctas.";
                }
    ?>
</body>
</html>