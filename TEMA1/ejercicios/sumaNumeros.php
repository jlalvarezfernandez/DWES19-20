<?php

/**
 * 3. - Script que escriba el resultado de la suma de dos números almacenados en dos variables.
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 */

// VARIABLES

$num1 = 5;
$num2 = 12;
$resultado = $num2 + $num1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">

    <title>Document</title>
</head>

<body>
    <header>
        <h1>EJERCICIO 3</h1>
    </header>
    <div id="principal">
        <main>
            <article>
                <h2><b>Script que escriba el resultado de la suma de dos números almacenados en dos variables</b></h2>
                <?php
                echo "<br><br>";
                echo "<p class = 'parrafo'><b>La suma de " . $num1 . " + " . $num2 . " es: " . $resultado. "</b></p>";
                ?>
            </article>
        </main>
        
        <aside>
            <section>
                <h2>Github</h2>
                <a href="https://github.com/jlalvarezfernandez?tab=repositories" target="_blank"><button>GitHub</button></a> 
            </section>

        </aside>
        </div>

  
    <footer>
        <h4>&copy; José Luis Álvares Fernández</h4>
    </footer>

</body>

</html>