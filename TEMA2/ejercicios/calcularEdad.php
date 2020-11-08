<?php

/**
 * 3.- Cargar fecha de nacimiento en una variable y calcular la edad.
 * 
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * 
 * Introducimos una variable para el dia mes y año de nacimiento
 * Cargamos en variables la fecha actual del dia, mes y año
 * Restamos una fecha de la otra
 * Mostramos los resultados
 */

//VARIABLES

#variables para la fecha actual
$diaHoy = date("j");
$mesHoy = date("n");
$anioHoy = date("Y");

#variables con mi fecha de nacimiento
$dia = 10;
$mes = 6;
$anio = 1984;

$edad = 0;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ejercicio 3 Tema 3 Condicionales</title>
</head>

<body>
    <header>
        <h1>EJERCICIO 3</h1>
    </header>
<div id="principal">
    <main>
        <article>
            <h2><b>Calcular edad</b></h2>
            <?php
            //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

            if (($diaHoy >= $dia && $mesHoy == $mes) || $mesHoy > $mes) {
                echo "Mi edad es de " . ($anioHoy - $anio) . " años";
            } else {
                echo "Mi edad es de " . ($anioHoy - $anio - 1) . " años";
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