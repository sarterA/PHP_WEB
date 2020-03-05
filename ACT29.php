<!DOCTYPE html>
<html>
<head>
	<title>ACT29</title>
</head>
<body>
	<?php
 if (isset($_COOKIE['user'])) 
echo "<h4>Usuario: ".$_COOKIE['user']."<h4/>"; 
?> 

<form method="post" action="ACT29_B.php">

User: <input type="text" name="n"> <br><br>

<input type="submit" name="submit" value="Submit"><br><br>
 
</form>

</body>
</html>