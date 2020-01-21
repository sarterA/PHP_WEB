<!DOCTYPE html>
<html>
<head>
	<title>ACT06</title>
<!--Cree una página con un script PHP para imprimir la tabla de multiplicar para el número 2. Use tres versiones diferentes con las declaraciones FOR, WHILE y DO-WHILE. -->
</head>
<body>
	<?php 
		echo "FOR";
		echo "<br>";
		for ($a=0;$a<=10;$a++){
        	echo $a*2;
        	echo "<br>";
    	}
   		
   		echo "WHILE";
   		echo "<br>";
		$b=0;
    	
    	while ($b<=10){
        echo $b*2;
        echo "<br>";
        $b++;
    	}
    
    	echo "DO-WHILE";
    	echo "<br>";
    	$c=0;
    	do{
            echo $c*2;
            echo "<br>";
            $c++;
    	}while($c<=10);
	?>

</body>
</html>