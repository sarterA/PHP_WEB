<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>

<?php 
require('connection.php');

$sql = "INSERT INTO serveis_lloc (id_servei, id_lloc, actiu, avariat) VALUES ('".$_REQUEST['id_servei']."','".$_REQUEST['id_lloc']."','".$_REQUEST['actiu']."','".$_REQUEST['avariat']."')";

echo "<br/>".$sql."<br/>";

mysqli_query($con, $sql);

require('close.php');

?>

</body>
</html>