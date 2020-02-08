<!DOCTYPE html>
<html>
<head>
	<title>ACT12</title>
<!--Defina un vector con los nombres de los días de la semana (domingo, lunes, ..., sábado). Obtenga la fecha de hoy e imprima el nombre del día de hoy. -->
</head>
<body>

<?php
$dias= array ("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
$n=date("w");
echo $dias[$n];

?>
</body>
</html>

