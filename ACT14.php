<!DOCTYPE html>
<html>
<head>
	<title>ACT14</title>
<!--Cree un script PHP para imprimir el contenido del archivo "pizzas.txt" creado en la actividad anterior. -->
</head>
<body>
<?php
$file=fopen("pizza.txt", "r") or exit("Unable to open file!");
while(!feof($file)){
    echo fgets($file)."<br/>";
}
fclose($file);
?>
</body>
</html>