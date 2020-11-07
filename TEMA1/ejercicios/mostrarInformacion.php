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
 */

 //variables
 $var = 8;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "author" content = "José Luis Álvarez Fernández">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>EJERCICIO 5</h1>
        <h2>Operaciones con variables II</h2>
        <?php
            echo "Valor actual ".$var."<br>";
            echo "Suma 2. Valor ahora ".($var+=2)."<br>";
            echo "Resta 4. Valor ahora ".($var-=4)."<br>";
            echo "Multiplica por 5. Valor ahora ".($var*=5)."<br>";
            echo "divide por 3. Valor ahora ".($var/=3)."<br>";
            echo "Incrementa el valor en 1. Valor ahora ".($var+=1)."<br>";
            echo "Decrementa el valor en 1. Valor ahora ".($var--)."<br>";
        ?>

    </header>
    <nav></nav>
    <main></main>
    <footer></footer>
</body>
</html>