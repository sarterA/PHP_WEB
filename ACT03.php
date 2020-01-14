<html>
	<head> 
		<title>ACT03</title>
<!-- 
Cree una página con un script PHP para imprimir la información para un deportista Boxer en una tabla (5 columnas y 2 filas). Use 5 variables diferentes (Nombre: cadena, Edad: entero, Peso: doble, Categoría: Cadena, Campeón: Booleano) e imprímalas en diferentes celdas de la tabla. -->
	</head>
	<body>
		<?php

			$edad = 24;
			$salary = 758.43;
			$name="John";
			$man="Sí";
			$ciudad="Madrid";
	
		?>

		<table border="2px">
        	<tr>
            	<td>Nombre</td>
            	<td>Edad</td>
            	<td>Hombre</td>
            	<td>Salario</td>
            	<td>Ciudad</td>
        	</tr>
        	<tr>
            	<td><?php echo $name; ?></td>
            	<td><?php echo $edad; ?></td>
            	<td><?php echo $man; ?></td>
            	<td><?php echo $salary; ?></td>
            	<td><?php echo $ciudad; ?></td>
        	</tr>
    	</table>
	</body>
</html> 

