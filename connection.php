
<?php
 	$con = mysqli_connect("localhost","root","","hotels");

if(mysqli_connect_errno($con)){
	echo "error connectat corretament a la bbdd";

}else {
	echo "has connectat correctament";
}


?>
