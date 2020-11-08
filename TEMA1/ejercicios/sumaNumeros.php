<?php

/**
 * 3. - Script que escriba el resultado de la suma de dos números almacenados en dos variables.
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * Para realizar este ejercicio tenemos que definir dos variables a las que asignamos
 * un valor numérico.
 * Despues en otra variable almacenamos el resultado de sumas las 2 variables
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

    <title>Ejercicio 3</title>
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
                <a href="https://github.com/jlalvarezfernandez/DWES19-20/blob/master/TEMA1/ejercicios/sumaNumeros.php" target="_blank"><button>GitHub</button></a> 
            </section>

        </aside>
        </div>

  
    <footer>
        <h4>&copy; José Luis Álvares Fernández</h4>
    </footer>

</body>

</html>