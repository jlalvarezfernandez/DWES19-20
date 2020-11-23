<?php

/**
 * 6.- A veces es necesario conocer exactamente el contenido de una variable. Piensa como puedes hacer esto y escribe un script con la siguiente 
 * salida: 
 * string(5) “Harry”
 * Harry
 * int(28)
 * NULL
 * 
 * Guardamos valores en diferentes variables y las mostramos por pantalla
 * 
 *  @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * FECHA 23/NOVIEMBRE/2020
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
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/nuevosEstilos.css">
    <title>Ejercico 6 Tema 1 Programación Básica</title>

<body>
    <header>
        <h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px">EJERCICIOS TEMA 1 PROGRAMACIÓN BÁSICA<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px"></h1>
    </header>
    <main>
        <h2>EJERCICIO 6 PROGRAMACIÓN BÁSICA</h2>
        <section>
            <h2><b>MOSTRAR CONTENIDO DE VARIABLES</b></h2>
            <article>
                <?php
                  echo $var1 . "<br>";
                  echo $var2 . "<br>";
                  echo $var3 . "<br>";
                  echo $var4 . "<br>";
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