<?php
/**
 *  1.- Ficha personal con los datos cargados en variables.
 * @author José Luis Álvarez Fernández
 * 
 */

# definimos las variables

$nombre = 'José Luis';
$apellidos = 'Álvarez Fernández';
$img = "../img/benito.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "author" content = "José Luis Álvarez Fernández">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
        <?php
            echo "<h1>EJERCICIO 1</h1>";
            echo "<h2>Ficha personal del alumno</h2>";
            echo "<h1>Hola, me llamo ".$nombre." ".$apellidos."</h1>";
            echo "<img src='$img'>";
        ?>
</body>
</html>