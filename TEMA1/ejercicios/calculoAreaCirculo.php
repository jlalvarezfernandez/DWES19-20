<?php

/**
 * 2. Script para calcular el área de un círculo cargando el valor del radio en una variable
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * 
 * Cargamos en una variable el radio
 * calculamos ela rea y mostramos los daros por pantalla
 * Mostramos con una etiqueta svg el resultado del circulo
 * 
 */

#Variables
$radio = 10;
$area = (2 * pi() * ($radio * $radio));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ejercico 2</title>
</head>

<body>
    <header>
        <h1 id="h1Cabecera">EJERCICIO 2</h1>
    </header>

    <div id="principal">
        <main>
            <article>
                <h2><b> Script para calcular el área de un círculo cargando el valor del radio en una variable</b></h2>
                <?php


                echo "<p class = 'respuesta'>El área del circulo de radio igual a " . $radio . " es de : " . $area . "</p> <br>";
                echo "<p class = 'respuesta'>Representación del círculo usando svg</h1><br>";
                echo "<svg height='40mm' width='40mm'>
                        <circle cx='20mm' cy='20mm' r='$radio" . "mm' style='fill: blue; stroke: black; stroke-width: 1mm;' /></svg>";
                ?>
            </article>
        </main>

        <aside>
            <section>
                <h2>Github</h2>
                <a href="https://github.com/jlalvarezfernandez/DWES19-20/blob/master/TEMA1/ejercicios/calculoAreaCirculo.php" target="_blank"><button>GitHub</button></a>
            </section>

        </aside>
    </div>


    <footer>
        <h4>&copy; José Luis Álvares Fernández</h4>
    </footer>

</body>

</html>