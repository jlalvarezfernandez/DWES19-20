<?php
/**
 * 4.- Script que cargue las siguientes variables:
 * 
 * $x=10;
 * $y=7;
 * y muestre:
 *  10 + 7 = 17
 *  10 - 7 = 3
 *  10 * 7 = 70
 *  10 / 7 = 1.4285714285714
 *  10 % 7 = 3
 */

 //Variables
 $x = 10;
 $y = 7;
 $suma =  $x + $y;
 $resta =  $x - $y;
 $multiplicacion =  $x * $y;
 $division =  $x / $y;
 $divEntera =  $x % $y;
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name = "author" content = "José Luis Álvarez Fernández">
    <title>Document</title>
</head>
<body>
<header>
<h1>EJERCICIO 4</h1>
<h2>Operaciones con variables</h2>

    <?php
        echo $x." + ".$y." = ".$suma."<br>";
        echo $x." - ".$y." = ".$resta."<br>";
        echo $x." * ".$y." = ".$multiplicacion."<br>";
        echo $x." / ".$y." = ".$division."<br>";
        echo $x." % ".$y." = ".$divEntera."<br>";
    ?>

</header>
<nav></nav>
<main></main>
<footer></footer>
    
</body>
</html>