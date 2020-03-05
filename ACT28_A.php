<!DOCTYPE html>
<html>
<head>
	<title>ACT28_A</title>
</head>
<body>
<h3>Uploading Files on Sever</h3>
<form method="post" action="ACT28_A.php" enctype="multipart/form-data">
Name: <input type="text" name="n"> <br><br>
Description <br>
<textarea name="t"> </textarea> <br><br> 
Price: <input type="number" name="p"> <br><br>
Location: <input type="text" name="l"> <br><br>
Image <input type="file" name="f"><br><br> 
<input type="submit" name="submit" value="Submit"><br><br>
 
</form>
<?php

require 'connection.php';

$sql="INSERT INTO ARTICLE (name,description, price,location,image) VALUES ('$_REQUEST[n]','$_REQUEST[d]','$_REQUEST[p]','$_REQUEST[l]','copy($_FILES['f']['tmp_name'],$_FILES['f']['name'])')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error($con));
}
echo "insert ok";



require 'close.php';
?>
</body>
</html>
