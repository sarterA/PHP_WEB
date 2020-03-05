<!DOCTYPE html>
<html>
<head>
	<title>Editar serveis_lloc</title>
</head>
<body>
	<?php
		require('connection.php');
		$sql = "SELECT * FROM serveis_lloc WHERE id_servei='".isset($_GET['id_servei'])."'";
		$rs = mysqli_query($con, $sql) or die();
		$row = mysqli_fetch_array($rs);
	?>
	<h1>FORM EDITAR serveis_lloc.</h1>
	<form action="editaserveis_lloc.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
		id_servei: <input type="text" name="id_servei">
		id_lloc: <input type="text" name="id_servei">
		actiu: <input type="text" name="actiu"> <br>
		avariat: <input type="text" name="avariat"> <br>
		
		</select><br/>
		
	</form>
</body>
</html>