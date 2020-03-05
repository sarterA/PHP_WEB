<!DOCTYPE html>
<html>
<head>
	<title>delete serveis_lloc</title>
</head>
<body>
	<?php

	require('connection.php');
	$sql = "DELETE FROM serveis_lloc WHERE id_servei='".$_REQUEST['id_servei']."'";
	mysqli_query($con, $sql) or die();
	require('close.php');
	
	header("location: selectserveis_lloc.php");
	exit();

?>

</body>
</html>