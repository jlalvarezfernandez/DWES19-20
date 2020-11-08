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
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * 
 * Definimos 2 variables numericas y hacemos diferentes operaciones con ellas
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
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ejercicio 4</title>
</head>

<body>
    <header>
        <h1>EJERCICIO 4</h1>
    </header>
        <div id="principal">
            <main>
                <article>
                    <h2><b>Operaciones cargadas en variables</b></h2>
                    <?php
                    echo $x . " + " . $y . " = " . $suma . "<br>";
                    echo $x . " - " . $y . " = " . $resta . "<br>";
                    echo $x . " * " . $y . " = " . $multiplicacion . "<br>";
                    echo $x . " / " . $y . " = " . $division . "<br>";
                    echo $x . " % " . $y . " = " . $divEntera . "<br>";
                    ?>
                </article>
            </main>

            <aside>
                <section>
                    <h2>Github</h2>
                    <a href="https://github.com/jlalvarezfernandez/DWES19-20/blob/master/TEMA1/ejercicios/cargarVariables.php" target="_blank"><button>GitHub</button></a>
                </section>

            </aside>
        </div>
        <footer>
            <h4>&copy; José Luis Álvares Fernández</h4>
        </footer>
</body>
</html>