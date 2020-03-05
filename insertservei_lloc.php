<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>

<?php 
require('connection.php');

$sql = "INSERT INTO servei_lloc (id,id_servei, id_lloc, actiu, avariat) VALUES ('".$_REQUEST['id']."','".$_REQUEST['id_servei']."','".$_REQUEST['id_lloc']."','".$_REQUEST['actiu']."','".$_REQUEST['avariat']."')";

echo "<br/>".$sql."<br/>";

mysqli_query($con, $sql);

require('close.php');

header("location:selectserveis_lloc.php");
exit();

?>

</body>
</html>