<?php

/**
 * 7.- Escribir un script que utilizando variables permita obtener el siguiente resultado:
 * Valor es string.
 * Valor es double.
 * Valor es boolean.
 * Valor ess integer.
 * Valos is NULL.
 * 
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
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
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ejercicio 7 </title>
</head>

<body>
    <header>
        <h1>EJERCICIO 7</h1>
        <h2>Mostrar contenido variables</h2>
    </header>
    <div id="principal">
        <main>
            <article>
                <h2><b>Mostrar contenido variables</b></h2>
                <?php
                echo $string . "<br>";
                echo $double . "<br>";
                echo $boolean . "<br>";
                echo $integer . "<br>";
                echo $null . "<br>";
                ?>
            </article>
        </main>

        <aside>
            <section>
                <h2>Github</h2>
                <a href="https://github.com/jlalvarezfernandez/DWES19-20/blob/master/TEMA1/ejercicios/contenidoVariablesII.php" target="_blank"><button>GitHub</button></a>
            </section>

        </aside>
    </div>


    <footer>
        <h4>&copy; José Luis Álvares Fernández</h4>
    </footer>

</body>

</html>