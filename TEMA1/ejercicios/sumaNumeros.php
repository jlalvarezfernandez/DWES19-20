<?php

/**
 * 3. - Script que escriba el resultado de la suma de dos números almacenados en dos variables.
 * 
 * Para realizar este ejercicio tenemos que definir dos variables a las que asignamos
 * un valor numérico.
 * Despues en otra variable almacenamos el resultado de sumas las 2 variables
 * 
 * FECHA 22/11/2020
 * @author José Luis Álvarez Fernández
 */

// VARIABLES

$num1 = 5;
$num2 = 12;
$resultado = $num2 + $num1;

?>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/nuevosEstilos.css">
    <title>Ejercico 3 Tema 1 Programación Básica</title>
<body>
    <header>
        <h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px">EJERCICIOS TEMA 1 PROGRAMACIÓN BÁSICA<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px"></h1>
    </header>
    <main>
        <h2>EJERCICIO 3 PROGRAMACIÓN BÁSICA</h2>
        <section>
            <h2><b>SUMA DE DOS NÚMEROS ALMACENADOS EN UNA VARIABLE</b></h2>
            <article>
                <?php
                echo "<br><br>";
                echo "<p class = 'parrafo'><b>La suma de " . $num1 . " + " . $num2 . " es: " . $resultado . "</b></p>";
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