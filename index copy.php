<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=galaxia.php>Galaxia</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>PProblema: Cálcular la masa del sol</h2>
  <p>Descripción:</p>
  <p>Uno de los parámetros que aparece en la Tercera Ley de
Kepler representa a la masa del sol (M), usando dicha Ley
calcula la masa del Sol 
        .<br>
</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
       Despejando M = 4*Pi*a³/(GT^2)
</section>
<section class="datos">
<h2>Datos:</h2>
a= semieje mayor de la tierra = 1 UA = 150 000000 km
T = periodo alrrededordel sol = 1año
G = 6.67 E-11 m3
/s2Kg
M = masa del sol
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>La masa del sol es:<br>
   M = 4*Pi2
*(150000000000)³/(6.67E-11}*3.154E7²)
  </p>
</section>
<?php
     function calcula_densidad(){
        $area = 150000000;
        $periodo= 1;
        $g = 6.67E-11;
        $masa = 4*3.1416*$area*$area*$area /($g*$periodo*$periodo);
        return $masa;
        
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: densidad = ".calcula_densidad(). " kg/(metro cubico)</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2024
    </footer>
   </section>
</body>
</html>
