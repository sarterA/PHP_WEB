<!DOCTYPE html>
<html>
<head>
	<title>ACT10</title>
<!--Cree un formulario con un campo de texto de entrada para ingresar el nombre de usuario, un control de selección para seleccionar de diferentes rangos de salario (1-1000 €, 1001-3000 € y + 3000 €) y un botón para enviar. La página de acción debe imprimir el nombre de la persona, su salario y si debe pagar impuestos adicionales (si el salario es superior a 3.000 €). -->
</head>
<body>
<form action="ACT10.php" method="post">
	Nombre de usuario: <input type="text" name="nombre"> <br>
	Salario:
	<input type="radio" name="r1" value="1">1-1000€ 
	<input type="radio" name="r2" value="2">1001-3000€ 
 	<input type="radio" name="r3" value="3">+ 3000€	
	<input type="submit" name="enviar">
</form>

<?php
if (isset($_REQUEST['nombre'])){
	echo $_POST['nombre'];
}
if ($_REQUEST['r1']=="1-1000") {
	echo "salario: ".$_POST['r1'];
}
if ($_REQUEST['r2']=="1001-3000"){
	echo "salario: ".$_POST['r2']
}
else
{
if ($_REQUEST['r3']=="+3000") {
	echo "salario: ".$_POST['r3']."y es obligatorio pagar impuestos adicionales!";

}
}
?>
</body>
</html>