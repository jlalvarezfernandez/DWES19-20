<?php
/**
 *  1.- Ficha personal con los datos cargados en variables.
 * @author José Luis Álvarez Fernández
 * 
 * Introducimos en variables los datos perosnales
 * Mostramos los valores por pantalla
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
    <meta name = "author" content = "José Luis Álvarez Fernández">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header>
        <h1>EJERCICIO 1</h1>
    </header>
    <div id="principal">
        <main>
            <article>
                <h2><b>Ficha personal del alumno</b></h2>
                <?php
                
                 echo "<p class='parrafo'><b>Hola, me llamo ".$nombre." ".$apellidos."</b></p>";
                 echo "<img src='$img' width= '150px'>";
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