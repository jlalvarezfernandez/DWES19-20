<?php

/**
 * 6.- A veces es necesario conocer exactamente el contenido de una variable. Piensa como puedes hacer esto y escribe un script con la siguiente 
 * salida: 
 * string(5) “Harry”
 * Harry
 * int(28)
 * NULL
 * 
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * 
 * Guardamos valores en diferentes variables y las mostramos por pantalla
 */

//variables

$var1 = "Harry";
$var2 = "string(5) \"$var1\"";
$var3 = "int(28)";
$var4 = "NULL";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">

    <title>Ejercicio 6</title>
</head>

<body>
    <header>
        <h1>EJERCICIO 6</h1>
    </header>
<div id="principal">
        <main>
            <article>
                <h2><b>Mostrar contenido variables</b></h2>
                <?php
                echo $var1 . "<br>";
                echo $var2 . "<br>";
                echo $var3 . "<br>";
                echo $var4 . "<br>";
                ?>
            </article>
        </main>
        
        <aside>
            <section>
                <h2>Github</h2>
                <a href="https://github.com/jlalvarezfernandez/DWES19-20/blob/master/TEMA1/ejercicios/contenidoVariable.php" target="_blank"><button>GitHub</button></a> 
            </section>

        </aside>
        </div>

  
    <footer>
        <h4>&copy; José Luis Álvares Fernández</h4>
    </footer>

</body>

</html>