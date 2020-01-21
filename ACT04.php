<!DOCTYPE html>
<html>
<head>
	<title>ACT04</title>
<!--Cree una página con un script PHP para imprimir una variable de cadena ($ producto) y tres variables enteras o dobles ($ unidades, $ precio, $ costo) utilizando solo una declaración echo (). Debe definir una variable de cadena que contenga todas las demás variables de nombres. Use comas dobles "". Imprime el resultado del texto en un párrafo. -->
</head>
<body>
	<?php 

		$producto="Agua"; 
		$unidades=50;
		$precio=1.89;
		$costo=1;


		echo "hay el producto ".$producto." con ".$unidades." unidades con el precio de ".$precio." y el costo de ".$costo;

	?>
</body>
</html>