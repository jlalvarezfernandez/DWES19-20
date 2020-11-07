<?php

/**
 * 7.- Escribir un script que utilizando variables permita obtener el siguiente resultado:
 * Valor es string.
 * Valor es double.
 * Valor es boolean.
 * Valor ess integer.
 * Valos is NULL.
 * 
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 */

 //variables
 $string = "Valor es string";
 $double = "Valor es double";
 $boolean = "Valor es boolean";
 $integer = "Valor es integer";
 $null = "Valor es NULL";
 

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
    <h1>EJERCICIO 6</h1>
    <h2>Mostrar contenido variables</h2>
    <?php
        echo $string."<br>";
        echo $double."<br>";
        echo $boolean."<br>";
        echo $integer."<br>";
        echo $null."<br>";

    ?>

</header>
<nav></nav>
<main></main>
<footer></footer>
    
</body>
</html>