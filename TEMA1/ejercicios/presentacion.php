<?php

/**
 *  1.- Ficha personal con los datos cargados en variables.
 * 
 * Introducimos en variables los datos perosnales
 * Mostramos los valores por pantalla
 * 
 * FECHA 22/11/2020
 * @author José Luis Álvarez Fernández
 */

//definimos las variables

$nombre = 'José Luis';
$apellidos = 'Álvarez Fernández';
$img = "../img/benito.jpg";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/nuevosEstilos.css">
    <title>Ejercico 1 Tema 1 Programación Básica</title>

<body>
    <header>

        <h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px">EJERCICIOS TEMA 1 PROGRAMACIÓN BÁSICA<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="70px"></h1>
    </header>
    <main>
        <h2>EJERCICIO 1 PROGRAMACIÓN BÁSICA</h2>
        <section>
            <h2><b>FICHA PERSONAL DEL ALUMNO</b></h2>
            <article>
                <?php
                echo "<p class='phpCode'><b>Nombre: </b>" . $nombre . "</p>";;
                echo "<p class='phpCode'><b>Apelidos: </b>" . $apellidos . "</p>";
                echo "Foto: <img src='$img' width= '150px'>";
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