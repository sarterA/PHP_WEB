<!DOCTYPE html>
<html>
<head>
	<title>ACT13</title>
<!--Cree una web para implementar una Pizza Take Away en línea. El formulario para pedir una pizza debe tener los siguientes campos:

Nombre del cliente: [..............] (texto de entrada)
Dirección: [...................] (texto de entrada)

Prosciutto: [x] (casilla de verificación)
Cantidad [...] (seleccione: 0, 1, 2, 3)

Napolitana: [x] (casilla de verificación)
Cantidad [...] (seleccione: 0, 1, 2, 3)

Mozzarella; [x] (casilla de verificación)
Cantidad [...] (seleccione: 0, 1, 2, 3)


[Enviar] (entrada enviar)

Cuando el usuario envía los datos del formulario, toda esta información debe guardarse en un archivo llamado "pizza.txt". Debe calcular e imprimir el costo final (jamón: 5,50 €, napolitana: 6,75 € y mozzarella: 4,75 €). -->
</head>
<body>
<form action="ACT13.php" method="post">
    <fieldset>
        Name: <input type="text" name="nom"/>
        Adress: <input type="text" name="adr"/><br/><br/>
        Prosciuto <input type="checkbox" name="prosciuto"/>
        Quantity:<select name="qPro">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br/>
        Napolitana <input type="checkbox" name="napolitana"/>
        Quantity:<select name="qNap">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br/>
        Mozzarella <input type="checkbox" name="mozzarella"/>
        Quantity:<select name="qMoz">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </fieldset>
    <input type="submit" value="Send"/>
</form>

<?php
$file=fopen("pizza.txt", "w");

if(isset($_REQUEST['nom'])){
	fwrite($file, "Name: ".$_REQUEST['nom']." Adress: ".$_REQUEST['adr'].PHP_EOL);
	fwrite($file, "Pedido: ".PHP_EOL);
}
if(isset($_REQUEST['prosciuto'])){
    $numP=$_REQUEST['qPro'];
    fwrite($file, "Prosciuto nº:".$numP." 5.50 €/unidad".PHP_EOL);
}
if(isset($_REQUEST['napolitana'])){
    $numN=$_REQUEST['qNap'];
    fwrite($file, "Napolitana nº:".$numN." 6.75 €/unidad".PHP_EOL);
}
if(isset($_REQUEST['mozzarella'])){
    $numM=$_REQUEST['qMoz'];
    fwrite($file, "Mozzarella nº:".$numM." 4.75 €/unidad".PHP_EOL);
}
$total=$numP*'5.50'+$numN*'6.75'+$numM*'4.75';
fwrite($file, "Total: ".$total."€");

fclose($file);
?>

</form>
</body>
</html>