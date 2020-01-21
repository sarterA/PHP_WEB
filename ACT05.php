<!DOCTYPE html>
<html>
<head>
	<title>ACT05</title>
<!--Cree una página con un script PHP que genere un número aleatorio entre 1 y 3, y luego imprima el número de palabra correspondiente (UNO, DOS o TRES).-->
</head>
<body>
	<?php
		$n=rand(1,3);

		echo "El numero aleatorio es $n<br>";

		if ($n==3) {
			echo "TRES";
		}
		else if ($n==2)
		{
			echo "DOS";
		}
		else
		{
			echo "UNO";
		}

	 ?>

</body>
</html>