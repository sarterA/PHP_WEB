<!DOCTYPE html>
<html>
<head>
	<title>ACT11</title>
<!--Cree un formulario con un área de texto para completar una plantilla de contrato de trabajo y un botón para enviar. La plantilla del contrato tiene algunos vacíos que debe llenar la información del usuario. La página de acción debe imprimir el contrato completado por el usuario.

Ejemplo de contrato:

En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [............ ..] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............] , futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N ° 20.744.-->
</head>
<body>

<form action="ACT11.php" method="post">
nombre:<input type="text" name="nombre"><br>
Enter your CV: <br>
<textarea name="curriculum">
	En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [............ ..] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............] , futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N ° 20.744.
</textarea> <br>
<input type="submit" value="SEND CV">
</form>

<?php 
if(isset($_REQUEST['nombre'])){
echo "The User name is:".$_REQUEST['nombre'];
echo "<br>";
echo "The curriculum is:".$_REQUEST['curriculum'];
}
?>
</body>
</html>