<?php

/**
 * 5.- Escribir un script que declare una variable y muestre la siguiente información en pantalla:
 * Valor actual 8.
 * Suma 2. Valor ahora 10.
 * Resta 4. Valor ahora 6.
 * Multipica por 5. Valor ahora 30.
 * Divide por 3. Valor ahora 10.
 * Incrementa el valor en 1. Valor ahora 11.
 * Decrementa el valor en 1. Valor ahora 11
 * 
 * Almacenamos un nuemro en una variable y hacemos distintas operaciones con el mostrando los resultados
 * 
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * FECHA 23/NOVIEMBRE/2020
 */

//variables
$var = 8;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/nuevosEstilos.css">
    <title>Ejercico 5 Tema 1 Programación Básica</title>

<body>
    <header>
        <h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px">EJERCICIOS TEMA 1 PROGRAMACIÓN BÁSICA<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px"></h1>
    </header>
    <main>
        <h2>EJERCICIO 5 PROGRAMACIÓN BÁSICA</h2>
        <section>
            <h2><b>OPERACIONES CON VARIABLES II</b></h2>
            <article>
                <?php
                 echo "Valor actual: " . $var . "<br>";
                 echo "Suma 2. Valor ahora: " . ($var += 2) . "<br>";
                 echo "Resta 4. Valor ahora: " . ($var -= 4) . "<br>";
                 echo "Multiplica por 5. Valor ahora: " . ($var *= 5) . "<br>";
                 echo "divide por 3. Valor ahora: " . ($var /= 3) . "<br>";
                 echo "Incrementa el valor en 1. Valor ahora: " . ($var += 1) . "<br>";
                 echo "Decrementa el valor en 1. Valor ahora: " . ($var--) . "<br>";
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