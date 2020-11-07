<?php

/**
 * 
 * Cabecera de la página
 * @author José Luis Alvarez Fernández
 */







/* $ejer1 = "<a href='Tema2/ejercicios/numeroMayor.php' target='_blank'><p>Ejercicio 1: Número mayor</p></a>";
$aTema2 = array(
  array("ejercicio1" => $ejer1)
);
 */

// definimos las variables
$img = "img/yo.jpg";
$mail = 'jl.alvarezfernadez@hotmail.com';
$telefono = "665693979";
$linkedin = "https://www.linkedin.com/feed/";
$twitter = "https://twitter.com/home";
$imgLin = "img/lin.png";
$imgTwi = "img/imgtwi.png";
$imgEmail = "img/imgEmail.png";
$imgTelf = "img/imgTelf.png";

$dia = date("j");
$mes = date("n");

$invierno = "img/invierno.jpg";
$primavera = "img/primavera.jpg";
$verano = "img/verano.jpg";
$otonio = "img/otoño.jpg";

// variables enlaces ejercicios tema 2

$ejer1 = "<a href='Tema1/ejercicios/presentacion.php' target='_blank'><p>Presentación</p></a>";
$ejer2 = "<a href='Tema1/ejercicios/calculoAreaCirculo.php' target='_blank'><p>Calculo del área de un circulo</p></a>";
$ejer3 = "<a href='Tema1/ejercicios/sumaNumeros.php' target='_blank'><p>suma dos números</p></a>";
$ejer4 = "<a href='Tema1/ejercicios/cargarVariables.php' target='_blank'><p>Operaciones con variables</p></a>";
$ejer5 = "<a href='Tema1/ejercicios/mostrarInformacion.php' target='_blank'><p>Operaciones con variables II</p></a>";
$ejer6 = "<a href='Tema1/ejercicios/contenidoVariable.php' target='_blank'><p>Contenido con variables</p></a>";
$ejer7 = "<a href='Tema1/ejercicios/contenidoVariablesII.php' target='_blank'><p>Contenido con variables II</p></a>";
$enlaceTema1Git = "<a href='Tema1/ejercicios/contenidoVariablesII.php' target='_blank'><p>GitHub</p></a>";

// variables enlaces ejercicios tema 3 condicionales

$ejer1C = "<a href='Tema2/ejercicios/numeroMayor.php' target='_blank'><p>Número mayor</p></a>";
$ejer2C = "<a href='Tema2/ejercicios/diasMes.php' target='_blank'><p>Mostrar dias del mes</p></a>";
$ejer3C = "<a href='Tema2/ejercicios/calcularEdad.php' target='_blank'><p>Calcular edad</p></a>";
$ejer4C = "<a href='Tema2/ejercicios/estaciones.php' target='_blank'><p>Mostrar estaciones</p></a>";
$ejer5C = "<a href='Tema2/ejercicios/enlaces.php' target='_blank'><p>Enlaces</p></a>";

//variables enlaces ejercicios tema 3 bucles

$ejer1B = "<a href='Tema2/ejercicios/mostrar1-10.php' target='_blank'><p>Mostrar del 1 al 10</p></a>";
$ejer2B = "<a href='Tema2/ejercicios/sumarNumerosPares.php' target='_blank'><p>Sumar los 3 primeros números pares</p></a>";
$ejer3B = "<a href='Tema2/ejercicios/calcularEdad.php' target='_blank'><p>Calcular edad</p></a>";
$ejer4B = "<a href='Tema2/ejercicios/tablaMultiplicar.php' target='_blank'><p>tabla multiplicar</p></a>";
$ejer5B = "<a href='Tema2/ejercicios/paleta.php' target='_blank'><p>Paleta de colores</p></a>";
$ejer6B = "<a href='Tema2/ejercicios/calendario.php' target='_blank'><p>Calendario</p></a>";

//variables enlaces ejercicios tema 3 arrays

$ejer1A = "<a href='Tema2/ejercicios/arrayComunidades.php' target='_blank'><p>Array Comunidades</p></a>";
$ejer2A = "<a href='Tema2/ejercicios/arrayComunidadesII.php' target='_blank'><p>Array Comunidades II</p></a>";
$ejer3A = "<a href='Tema2/ejercicios/arrayComunidadesCovid.php' target='_blank'><p>Array Comunidades Covid</p></a>";
$ejer4A = "<a href='Tema2/ejercicios/arrayMeses.php' target='_blank'><p>Mostrar un array con los meses del año</p></a>";
$ejer5A = "<a href='Tema2/ejercicios/arrayTableroBarcos.php' target='_blank'><p>Mostrar un array con el tablero de hundir la flota</p></a>";
$ejer6A = "<a href='Tema2/ejercicios/arrayNotas.php' target='_blank'><p>Mostrar un array con las notas de los alumnos de 2º daw</p></a>";
$ejer7A = "<a href='Tema2/ejercicios/arrayMundo.php' target='_blank'><p>Mostrar un array con los continentes paises capitales y banderas</p></a>";
$ejer8A = "<a href='Tema2/ejercicios/verbosIngles.php' target='_blank'><p>Mostrar lista verbos irregulares en ingles</p></a>";
$ejer9A = "<a href='Tema2/ejercicios/arrayRestaurante.php' target='_blank'><p>Carta restaurante</p></a>";
$ejer10A = "<a href='Tema2/ejercicios/arrayAlumnosClase.php' target='_blank'><p>Array alumnos</p></a>";
$ejer11A = "<a href='Tema2/ejercicios/arrayVentaComercio.php' target='_blank'><p>Array promedio venta comercio</p></a>";
$ejer12A = "<a href='Tema2/ejercicios/arrayEjercicios.php' target='_blank'><p>ejercicios</p></a>";


//variables enlaces ejercicios tema 3 formularios

$ejer1F ="<a href='Tema2/ejercicios/formulario.html' target='_blank'><p>Formulario HTML</p></a>";
$ejer2F ="<a href='Tema2/ejercicios/formulario.php' target='_blank'><p>Formulario PHP</p></a>";
$ejer3F= "<a href='Tema2/ejercicios/formulario2.php' target='_blank'><p>Formulario PHP 2</p></a>";
$ejer4F = "<a href='Tema2/ejercicios/cargaformulario.php' target='_blank'><p>Formulario</p></a>";
$ejer5F = "<a href='Tema2/ejercicios/ejemplo2.php' target='_blank'><p>Formulario ejemplo</p></a>";

//variables enlaces ejercicios tema 3 funciones

$ejer1Fu = "<a href='Tema2/ejercicios/funcion.php' target='_blank'><p>Ejemplo función</p></a>";
$ejer2Fu = "<a href='Tema2/ejercicios/funcion2.php' target='_blank'><p>Ejemplo función</p></a>";
$ejer3Fu = "<a href='Tema2/ejercicios/funcionDNI.php' target='_blank'><p>Función para calcular letra del DNI</p></a>";
$ejer4Fu = "<a href='Tema2/ejercicios/dni.php' target='_blank'><p>DNI</p></a>";

//variables enlaces ejercicios tema 4 cookies

$ejer1Ck= "<a href='Tema4/ejercicios/ejercicio1.php' target='_blank'><p>Ejercicio1 cookies</p></a>";
$ejer2Ck ="<a href='Tema4/ejercicios/ejercicio2.php' target='_blank'><p>Ejercicio2 cookies</p></a>";
$ejer3Ck = "<a href='Tema4/ejercicios/ejercicio3.php' target='_blank'><p>Ejercicio3 cookies</p></a>";
$ejer4Ck ="<a href='Tema4/ejercicios/ejercicio4Sesiones.php' target='_blank'><p>Ejercicio4 cookies</p></a>";
$ejer5Ck ="<a href='Tema4/ejercicios/ejemplo1.php' target='_blank'><p>Eje1</p></a>";
$ejer6Ck ="<a href='Tema4/ejercicios/ejemplo2.php' target='_blank'><p>Eje2</p></a>";


//variables enlaces ejercicios tema 4 sesiones



$aEjercicios = array(
  "Ejercicios Tema 4 cookies" => array(
    "Descripcion" => "Ejercicios sobre el uso de las cookies",
    "Ejercicio1" => $ejer1Ck,
    "Ejercicio2" => $ejer2Ck,
    "Ejercicio3" => $ejer3Ck,
    "Ejercicio4" => $ejer4Ck,
    "Ejercicio5" => $ejer5Ck,
    "Ejercicio6" => $ejer6Ck,
    "Ejercicios en Github =>" => "<a href='https://github.com/jlalvarezfernandez?tab=repositories' target='_blank'><button>GitHub</button></a> ",
  ),
  "Ejercicios Tema 3 Funciones" => array(
    "Descripcion" => "Ejercicios sobre el uso de las estructuras de control: condicionales, bucles, arrays, formularios...",
    "Ejercicio1" => $ejer1Fu,
    "Ejercicio2" => $ejer2Fu,
    "Ejercicio3" => $ejer3Fu,
    "Ejercicio4" => $ejer4Fu,
    "Ejercicios en Github =>" => "<a href='https://github.com/jlalvarezfernandez?tab=repositories' target='_blank'><button>GitHub</button></a> ",
  ),
  "Ejercicios Tema 3 Formularios" => array(
    "Descripcion" => "Ejercicios sobre el uso de las estructuras de control: condicionales, bucles, arrays, formularios...",
    "Ejercicio1" => $ejer1F,
    "Ejercicio2" => $ejer2F,
    "Ejercicio3" => $ejer3F,
    "Ejercicio4" => $ejer4F,
    "Ejercicio5" => $ejer5F,
    "Ejercicios en Github =>" => "<a href='https://github.com/jlalvarezfernandez?tab=repositories' target='_blank'><button>GitHub</button></a> ",
  ),
  "Ejercicios Tema 3 Arrays" => array(
    "Descripcion" => "Ejercicios sobre el uso de las estructuras de control: condicionales, bucles, arrays...",
    "Ejercicio1" => $ejer1A,
    "Ejercicio2" => $ejer2A ,
    "Ejercicio3" => $ejer3A ,
    "Ejercicio4" => $ejer4A ,
    "Ejercicio5" => $ejer5A ,
    "Ejercicio6" => $ejer6A ,
    "Ejercicio7" => $ejer7A ,
    "Ejercicio8" => $ejer8A ,
    "Ejercicio9" => $ejer9A ,
    "Ejercicio10" => $ejer10A ,
    "Ejercicio11" => $ejer11A ,
    "Ejercicio12" => $ejer12A ,
    "Ejercicios en Github =>" => "<a href='https://github.com/jlalvarezfernandez?tab=repositories' target='_blank'><button>GitHub</button></a> ",
  ),
  "Ejercicios Tema 3 Estructuras Repetitivas" => array(
    "Descripcion" => "Ejercicios sobre el uso de las estructuras de control: condicionales, bucles, arrays...",
    "Ejercicio1" => $ejer1B,
    "Ejercicio2" => $ejer2B ,
    "Ejercicio3" => $ejer3B ,
    "Ejercicio4" => $ejer4B ,
    "Ejercicio5" => $ejer5B ,
    "Ejercicios en Github =>" => "<a href='https://github.com/jlalvarezfernandez?tab=repositories' target='_blank'><button>GitHub</button></a> ",
  ),
  "Ejercicios Tema 3 Condicionales" => array(
    "Descripcion" => "Ejercicios sobre el uso de las estructuras de control: condicionales, bucles, arrays...",
    "Ejercicio1" => $ejer1C ,
    "Ejercicio2" => $ejer2C ,
    "Ejercicio3" => $ejer3C ,
    "Ejercicio4" => $ejer4C ,
    "Ejercicio5" => $ejer5C ,
    "Ejercicios en Github =>" => "<a href='https://github.com/jlalvarezfernandez?tab=repositories' target='_blank'><button>GitHub</button></a> ",
  ),
  "Ejercicios Tema 2 " => array(
    "Descripcion" => "Ejercicios básicos sobre estructura y sintaxis del lenguaje de programación PHP",
    "Ejercicio1" => $ejer1,
    "Ejercicio2" => $ejer2,
    "Ejercicio3" => $ejer3,
    "Ejercicio4" => $ejer4,
    "Ejercicio5" => $ejer5,
    "Ejercicio6" => $ejer6,
    "Ejercicio7" => $ejer7,
    "Ejercicios en Github =>" => "<a href='https://github.com/jlalvarezfernandez/DWES19-20/tree/master/TEMA1/ejercicios' target='_blank'><button>GitHub</button></a> ",
  ),
  
);



?>


<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <title>Resume</title>
</head>

<body>
  <div class="container">
    <div id="resume-header" class="row">
      <div class="col-3">
        <?php
        echo "<img src='$img'>";
        ?>

      </div>
      <div class="col">
        <h1><?php
            echo "José Luis Álvarez Fernández";
            ?></h1>
        <h2 class="materia"><?php echo "DWES" ?></h2>
        <ul>
          <?php
          echo "<li><img src='$imgEmail'><a href ='$mail'>: " . $mail . "</img></a></li>";
          echo "<li><img src='$imgTelf'><a href ='$telefono'>: " . $telefono . "</img></a></li>";
          echo "<li><img src='$imgLin'><a href ='$linkedin'>: " . $linkedin . "</img></a></li>";
          echo "<li><img src='$imgTwi'><a href ='$twitter'>: " . $twitter . "</img></a></li>";

          ?>
        </ul>
      </div>
      <?php

      echo "<div class = 'col-3'>";
      if (($mes == 12 && $dia >= 21) || ($mes < 3 || ($mes == 3 && $dia < 22))) {
        echo "<img src ='$invierno' class ='estacion'>";
      } elseif ((($mes >= 3 && $mes < 6) && $dia >= 22) || ($mes < 6 || ($mes == 6 && $dia < 21))) {
        echo "<img src ='$primavera' class ='estacion'>";
      } elseif ((($mes >= 6 && $mes < 9) && $dia >= 21) || ($mes < 9 || ($mes == 9 && $dia < 22))) {
        echo "<img src ='$verano' class ='estacion'>";
      } else {
        echo "<img src ='$otonio' class ='estacion'>";
      }
      echo "</div>";
      ?>
    </div>
    <div class="row">
      <div class="col">
        <h1>PORTFOLIO</h1>
        <a href='Tema1/ejercicios/indexPortfolio.php' target='_blank'>
          <p>Portfolio</p>
        </a>


        <?php
        echo "<h2> EJERCICIOS DWES </h2>";
        echo"<br>";
        foreach ($aEjercicios as $ejerciciosTemas => $temas) {
          echo"<br>";
          echo "<b>" . $ejerciciosTemas . "</b></br>";
         
          foreach ($temas as $titulo => $concepto) {
            
            echo "<b>" . $titulo . "</b> " . $concepto."<br>";
           
          }
        }

        ?>

         <div>
          <h3 class="border-bottom-gray">Projects</h3>
          <div class="project">
            <h5>Project X</h5>
            <div class="row">
              <div class="col-3">
                <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
              </div>
              <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                <strong>Technologies used:</strong>
                <span class="badge badge-secondary">PHP</span>
                <span class="badge badge-secondary">HTML</span>
                <span class="badge badge-secondary">CSS</span>
              </div>
            </div>
          </div>
          <div class="project">
            <h5>Project X</h5>
            <div class="row">
              <div class="col-3">
                <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
              </div>
              <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                <strong>Technologies used:</strong>
                <span class="badge badge-secondary">PHP</span>
                <span class="badge badge-secondary">HTML</span>
                <span class="badge badge-secondary">CSS</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <h3 class="border-bottom-gray">Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
          <li>HTML</li>
          <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class="border-bottom-gray">Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
        &copy; José Luis Álvarez Fernández
      </div>
    </div>
  </div> 

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>

</html>