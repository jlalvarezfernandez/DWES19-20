<?php

/**
 * 2. Script para calcular el área de un círculo cargando el valor del radio en una variable
 * 
 * Cargamos en una variable el radio
 * calculamos el area y mostramos los daros por pantalla
 * Mostramos con una etiqueta svg el resultado del circulo
 * 
 *  FECHA 22/11/2020
 * @author José Luis Álvarez Fernández
 */

// Variables
$radio = 10;
$area = (2 * pi() * ($radio * $radio));

?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/nuevosEstilos.css">
    <title>Ejercico 2 Tema 1 Programación Básica</title>
<body>
    <header>
        <h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px">EJERCICIOS TEMA 1 PROGRAMACIÓN BÁSICA<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px"></h1>
    </header>
    <main>
        <h2>EJERCICIO 2 PROGRAMACIÓN BÁSICA</h2>
        <section>
            <h2><b>CALCULAR ÁREA DE UN CIRCULO</b></h2>
            <article>
              
                 <?php
               echo "<p class = 'respuesta'>El área del circulo de radio igual a " . $radio . " es de: " . $area . "</p> <br>";
               echo "<p class = 'respuesta'>Representación del círculo usando svg: </h1><br>";
               echo "<svg height='40mm' width='40mm'>
                       <circle cx='20mm' cy='20mm' r='$radio" . "mm' style='fill: blue; stroke: black; stroke-width: 1mm;' /></svg>";
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