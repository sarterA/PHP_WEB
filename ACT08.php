<!DOCTYPE html>
<html>
<head>
	<title>ACT08</title>
<!--Cree un formulario con 1 campo de texto de entrada para ingresar un nombre de usuario y 4 botones de opción para seleccionar una opción de estos (1: Sin estudios, 2: Escuela primaria, 3: Escuela secundaria, 4: Universidad) y un botón para enviar . La página de acción debe imprimir el nombre de la persona y su nivel educativo.-->
</head>
<body>
	<form action="ACT08.php" method="post">
		Nombre de usuario: <input type="text" name="nombre"> <br>

		estudios:
		<input type="radio" name="radio1" value="1">sin estudios <br>
		<input type="radio" name="radio2" value="2">escuela primaria <br>
		<input type="radio" name="radio3" value="3">escuela secundaria <br>
		<input type="radio" name="radio4" value="4">universidad <br>
		<input type="submit" name="enviar">
	</form>
<?php
	if (isset($_REQUEST['nombre'])) {
		echo $_REQUEST['nombre'];
	}
	if (isset($_REQUEST['radio1'])) {
	if ($_REQUEST['radio1']=="1") {
		echo "No tiene estudios";
	}}
	if (isset($_REQUEST['radio2'])) {
	if ($_REQUEST['radio2']=="2") {
		echo "Estudio primario";
	}}
	if (isset($_REQUEST['radio3'])) {
	if ($_REQUEST['radio3']=="3") {
		echo "Estudio secundario";
	}}
	if (isset($_REQUEST['radio4'])) {
	if ($_REQUEST['radio4']=="4") {
		echo "Estudio universitario";
	}}
	
  ?>

</body>
</html>