<?php

/**
 * 
 * 2.- Cargar en variables mes y año e indicar el número de días del mes
 * 
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * Introducimos en variables un mes y año.
 * Hacemos una estrutura nd if...elseif mostrando apra cada mes cuantos dias tiene
 * hay que calcular en febrero si el año introducido es bisiesto.
 */

 // VARIABLES

 $mes = "Febrero";
 $anio = 1984;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "author" content = "José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ejercicio 2 Tema 3 Condicionales</title>
</head>
<body>
<header>
<h1>EJERCICIO 2</h1>
</header>
<div id="principal">
        <main>
            <article>
                <h2><b>Mostrar los dias que tiene un mes</b></h2>
                <?php
                if ($mes == "Enero") {
                    echo "Enero tiene 31 dias";
                }
                elseif ($mes == "Febrero") {
                    if (($anio % 4 == 0) && ($anio %100 != 0 || $anio % 400 ==0)) {
                        echo "Febrero del año ".$anio." es bisiesto y tiene 29 dias";
                    }
                    else {
                        echo "Febrero del año ".$anio." no es bisiesto y tiene 28 dias";
                    }
                }
                elseif ($mes == "Marzo") {
                    echo "Marzo tiene 31 dias";
                }
                elseif ($mes == "Abril") {
                    echo "Abril  tiene 30 dias";
                }
                elseif ($mes == "Mayo") {
                    echo "Mayo tiene 31 dias";
                }
                elseif ($mes == "Junio") {
                    echo "Junio tiene 30 dias";
                }
                elseif ($mes == "Julio") {
                    echo "Julio tiene 31 dias";
                }
                elseif ($mes == "Agosto") {
                    echo "Agosto tiene 31 dias";
                }
                elseif ($mes == "Septiembre") {
                    echo "Septiembre tiene 30 dias";
                }
                elseif ($mes == "Octubre") {
                    echo "Octubre tiene 31 dias";
                }
                elseif ($mes == "Noviembre") {
                    echo "Marzo tiene 30 dias";
                }
                else {
                    echo "Diciembre tiene 31 dias";
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