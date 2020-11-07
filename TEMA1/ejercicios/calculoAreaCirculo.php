<?php

/**
 * 2. Script para calcular el área de un círculo cargando el valor del radio en una variable
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
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
    <link rel="stylesheet" href="../css/estilosTema1.css">
    <title>Ejercico 2 Tema 1</title>
</head>

<body>
    <header>
        <h1 id="h1Cabecera">EJERCICIO 2</h1>
    </header>
    <div id="principal">

        <main>
            <article>
                <h2>2. Script para calcular el área de un círculo cargando el valor del radio en una variable</h2>
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
            <button id="github"> GitHub</button>
        </section>
    </aside>
    </div>



    <footer class="pie"> 
        <h1 id="h1Footer"> &copy; JÓSE LUIS ÁLVAREZ FERNÁNDEZ</h1>

    </footer>

</body>

</html>