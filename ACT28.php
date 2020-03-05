<!DOCTYPE html>
<html>
<head>
	<title>ACT28</title>
</head>
<body>
<form action="ACT28.php" method="post" enctype="multipart/form-data"> 
Select a file1: <input type="file" name="file1"><br> 
Select a file2: <input type="file" name="file2"><br> 
Select a file3: <input type="file" name="file3"><br> 
<input type="submit" value="Upload"> 
</form>
<?php 

copy($_FILES['file1']['tmp_name'],$_FILES['file1']['name']); 
copy($_FILES['file2']['tmp_name'],$_FILES['file1']['name']); 
copy($_FILES['file3']['tmp_name'],$_FILES['file1']['name']); 
echo "File has been uploaded to the server.<br>"; 


?> 

</body>
</html>