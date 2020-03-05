<!DOCTYPE html>
<html>
<head>
	<title>Welcome PHP</title>
</head>
<body>
	<h1>Welcome UPDATE.</h1>
	<?php

		require('connection.php');

		$sql = "UPDATE serveis_lloc SET id_servei = '".$_REQUEST['id_servei']."',
				,
				id_servei = '".$_REQUEST['id_servei']."',
				id_lloc = '".$_REQUEST['id_lloc']."',
				actiu = '".$_REQUEST['actiu']."',
				avariat = '".$_REQUEST['avariat']."', 
				WHERE id ='".$_REQUEST['id_servei']."'";

		echo $sql."<br/>";

		mysqli_query($con, $sql) or die();

		echo "Update realitzat correctament.";

		header("location:selectserveis_lloc.php");
		exit();

		require('close.php');

	?>
</body>
</html>