<html>
	<head>
		<title>ACT02</title>
<!-- Cree una página con un script PHP para imprimir un número aleatorio entre 0 y 10. Puede usar la función rand () para obtener un número aleatorio. Si el número es mayor o igual a 5, muestre el mensaje "Aprobó el examen" "y, de lo contrario, muestre el mensaje" ¡Reprobó el examen! ". -->
	</head>
	<body>
		<?php
			$num=rand(0,10);
			echo $num;
			
			if ($num<=5) {
				echo "Reprobó el examen";
			}
			else {
				echo "Aprobó el examen";
			}
		?>
	</body>
</html> 

