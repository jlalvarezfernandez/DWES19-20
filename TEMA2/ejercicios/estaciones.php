<?php

/**
 * 4.- Cabecera en función de la estación del año.
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * Cargamos en variables el dia y mes actuales
 * hacemos estrucutra if...elseif calcualndo el tiempo que dura cada estacion del año
 * mostramos la imagen correspondiente
 * 
 */

// VARIABLES

$dia = date("j");
$mes = date("n");

$invierno = "../img/invierno.jpg";
$primavera = "../img/primavera.jpg";
$verano = "../img/verano.jpg";
$otonio = "../img/otoño.jpg";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ejercicio 4 Tema 3 Condicionales</title>
</head>

<body>
    <header>
        <h1>EJERCICIO 4</h1>
    </header>
    <div id="principal">
        <main>
            <article>
                <h2><b>Estaciones del año</b></h2>
                <?php
                if (($mes == 12 && $dia >= 21) || ($mes < 3 || ($mes == 3 && $dia < 22))) {
                    echo "En invierno a joderse de frio <br>";
                    echo "<img src ='$invierno' class ='estacion' width= '720px'>";
                } elseif ((($mes >= 3 && $mes < 6) && $dia >= 22) || ($mes < 6 || ($mes == 6 && $dia < 21))) {
                    echo "la primavera la sangre altera <br>";
                    echo "<img src ='$primavera' class ='estacion width= '720px''>";
                } elseif ((($mes >= 6 && $mes < 9) && $dia >= 21) || ($mes < 9 || ($mes == 9 && $dia < 22))) {
                    echo "A disfrutar de las vacaciones y los heladitos <br>";
                    echo "<img src ='$verano' class ='estacion width= '720px''>";
                } else {
                    echo "En Otoño a comer castañas <br>";
                    echo "<img src ='$otonio' class ='estacion' width= '720px'>";
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