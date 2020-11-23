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
 * 
 * Definimos 2 variables numericas
 * creamos variables para almacenar la suma, resta, multiplicación, división de las variables almacenadas en variables
 * 
 *  @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * FECHA 23/NOVIEMBRE/2020
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
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/nuevosEstilos.css">
    <title>Ejercico 4 Tema 1 Programación Básica</title>
<body>
    <header>
        <h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px">EJERCICIOS TEMA 1 PROGRAMACIÓN BÁSICA<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px"></h1>
    </header>
    <main>
        <h2>EJERCICIO 4 PROGRAMACIÓN BÁSICA</h2>
        <section>
            <h2><b>OPERACIONES CARGADAS EN VARIABLES</b></h2>
            <article>
                <?php
                echo $x . " + " . $y . " = " . $suma . "<br>";
                echo $x . " - " . $y . " = " . $resta . "<br>";
                echo $x . " * " . $y . " = " . $multiplicacion . "<br>";
                echo $x . " / " . $y . " = " . $division . "<br>";
                echo $x . " % " . $y . " = " . $divEntera . "<br>";
                ?>
                <br>
                <br>
                <a href="https://github.com/jlalvarezfernandez/DWES19-20/blob/master/TEMA1/ejercicios/presentacion.php" target="_blank"><button class="codigo">VER CÓDIGO</button></a>
            </article>
        </section>
    </main>
    <footer>
        &copy; JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
    </footer>
</body>
</html>