<?php

/**
 * 6.- A veces es necesario conocer exactamente el contenido de una variable. Piensa como puedes hacer esto y escribe un script con la siguiente 
 * salida: 
 * string(5) “Harry”
 * Harry
 * int(28)
 * NULL
 * 
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 */

 //variables

 $var1 = "Harry";
 $var2 = "string(5) \"$var1\"";
 $var3 = "int(28)";
 $var4 = "NULL";


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
<h1>EJERCICIO 5</h1>
    <h2>Mostrar contenido variables</h2>
    <?php
        echo $var1."<br>";
        echo $var2."<br>";
        echo $var3."<br>";
        echo $var4."<br>";


    ?>

</header>
<nav></nav>
<main></main>
<footer></footer>
    
</body>
</html>