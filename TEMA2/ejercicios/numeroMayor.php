<?php

/**
 * 1.- Cargar en dos números en variables y escribir el mayor de ellos.
 * 
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * Introducimos 2 numeros en variables.
 * Con una estructura if...else mostramos cual de los dos es mayor 
 * mostrando los resultados por pantalla
 */

// VARIABLES

$num1 = 12;
$num2 = 4;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ejercicio 1 Tema 3 Condicionales</title>
</head>

<body>
    <header>
        <h1>EJERCICIO 1 </h1>

    </header>

    <div id="principal">
        <main>
            <article>
                <h2><b>Mostrar que número es mayor</b></h2>
                <?php
                if ($num1 > $num2) {
                    echo $num1 . " es mayor que " . $num2;
                } else if ($num1 < $num2) {
                    echo $num2 . " es mayor que " . $num1;
                } else {
                    echo $num1 . " es igual que " . $num2;
                }



                ?>
            </article>
        </main>

        <aside>
            <section>
                <h2>Github</h2>
                <a href="https://github.com/jlalvarezfernandez/DWES19-20/blob/master/TEMA1/ejercicios/presentacion.php" target="_blank"><button>GitHub</button></a>
            </section>

        </aside>
    </div>


    <footer>
        <h4>&copy; José Luis Álvares Fernández</h4>
    </footer>

</body>

</html>