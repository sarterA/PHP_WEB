<!DOCTYPE html>
<html>
<head>
	<title>delete serveis_lloc</title>
</head>
<body>
	<?php

	require('connection.php');
	$sql = "DELETE FROM servei_lloc WHERE id='".$_REQUEST['id']."'";
	mysqli_query($con, $sql) or die();
	require('close.php');
	
	header("location: selectserveis_lloc.php");
	exit();

?>

</body>
</html>