<?php

/**
 * 7.- Escribir un script que utilizando variables permita obtener el siguiente resultado:
 * Valor es string.
 * Valor es double.
 * Valor es boolean.
 * Valor ess integer.
 * Valos is NULL.
 * 
 * Creamos unas variables a las que asignbamos unos valores y las mostramos por pantalla
 * 
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * FECHA 23/NOVIEMBRE/2020
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
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/nuevosEstilos.css">
    <title>Ejercico 7 Tema 1 Programación Básica</title>
<body>
    <header>
        <h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px">EJERCICIOS TEMA 1 PROGRAMACIÓN BÁSICA<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px"></h1>
    </header>
    <main>
        <h2>EJERCICIO 7 PROGRAMACIÓN BÁSICA</h2>
        <section>
            <h2><b>MOSTRAR CONTENIDO DE VARIABLES II</b></h2>
            <article>
                <?php
                   echo $string . "<br>";
                   echo $double . "<br>";
                   echo $boolean . "<br>";
                   echo $integer . "<br>";
                   echo $null . "<br>";
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