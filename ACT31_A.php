<?php
session_start(); 

require 'connection.php';

$sql="SELECT name FROM ALUMNOS WHERE email='$_REQUEST[email]'";
$result = mysql_query($sql, $con);
if ($row = mysql_fetch_array($result)){
$_SESSION['user']=$row["name"];
}else{
echo "this email does not exist";
}	


require 'close.php';
?>