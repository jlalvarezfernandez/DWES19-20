<?php

/**
 * 5.- Escribir un script que declare una variable y muestre la siguiente información en pantalla:
 * Valor actual 8.
 * Suma 2. Valor ahora 10.
 * Resta 4. Valor ahora 6.
 * Multipica por 5. Valor ahora 30.
 * Divide por 3. Valor ahora 10.
 * Incrementa el valor en 1. Valor ahora 11.
 * Decrementa el valor en 1. Valor ahora 11
 * 
 * @author José Luis Álvarez Fernández
 * 
 * Almacenamos un nuemro en una variable y hacemos distintas operaciones con el mostrando los resultados
 */

//variables
$var = 8;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ejercicio 5</title>
</head>

<body>
    <header>
        <h1>EJERCICIO 5</h1>
    </header>
    <div id="principal">
        <main>
            <article>
                <h2><b>Operaciones con variables II</b></h2>
                <?php
                echo "Valor actual " . $var . "<br>";
                echo "Suma 2. Valor ahora " . ($var += 2) . "<br>";
                echo "Resta 4. Valor ahora " . ($var -= 4) . "<br>";
                echo "Multiplica por 5. Valor ahora " . ($var *= 5) . "<br>";
                echo "divide por 3. Valor ahora " . ($var /= 3) . "<br>";
                echo "Incrementa el valor en 1. Valor ahora " . ($var += 1) . "<br>";
                echo "Decrementa el valor en 1. Valor ahora " . ($var--) . "<br>";
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