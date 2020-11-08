<?php

/**
 * 5.- Lista de enlaces en función del perfil de usuario.
 * @author JOSÉ LUIS ÁLVAREZ FERNÁNDEZ
 * argamos una variable para un administrador
 * si elige esa variable se muestran unos enlaces, sino otros.
 */

$var = "admin";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="José Luis Álvarez Fernández">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<title>Ejercicio 5 Tema 3 Condicionales</title>
</head>

<body>
    <header>
        <h1>EJERCICIO 5</h1>
        <h3>Mostrar lista de enlaces</h3>
    </header>

    <div id="principal">
        <main>
            <article>
                <h2><b>Mostrar lista de enlaces</b></h2>
                <?php
                if ($var == "admin") {
                    echo "<a href='https://www.marca.com/' target='_blank'>MARCA</a><br/>";
                    echo "<a href='https://www.as.com/' target='_blank'>AS</a><br/>";
                    echo "<a href='https://www.sport.com/' target='_blank'>SPORT</a><br/>";
                } else {
                    echo "<a href='https://www.elmundo.es/' target='_blank'>EL MUNDO</a><br/>";
                    echo "<a href='https://www.abc.es/' target='_blank'>ABC</a><br/>";
                    echo "<a href='https://www.elpais.es/' target='_blank'>EL PAIS</a><br/>";
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