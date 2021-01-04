<?php
echo "<h3>CURSOS DE LOS SEMESTRES<h3>";
$Semestre = array(
    'semestre I' =>array(
        'PENSAMIENTO ARGUEDIANO I' => "14",
        'REDACCIÓN UNIVERSITARIA Y ORATORIA' => "13",
        'MATEMÁTICA BÁSICA I'=> "16",
        'INTRODUCCIÓN A LA INGENIERÍA DE SISTEMAS'=>"15",
        'ÉTICA Y MORAL'=>"15",
        'REALIDAD REGIONAL Y NACIONAL'=>"17</br>"
    ),
    'semestre II' => array(
        'MATEMÁTICA BÁSICA II' => '13',
        'ECONOMÍA GENERAL' => '14',
        'IDIOMA EXTRANJERO'=>"12",
        'PENSAMIENTO ARGUEDIANO II' => '16',
        'CALCULO I'=>'12',
        'DIBUJO DE INGENIERÍA'=>'12',
        'METODOLOGÍA DE LA PROGRAMACIÓN'=>'13<br>',
    ),
    'semestre III' => array(
        'TEORÍA Y DISEÑO DE BASE DE DATOS' => "15",
        'MATEMÁTICA DISCRETA' => "12",
        'DISEÑO WEB' => '13',
        'ALGORITMO Y ESTRUCTURA DE DATOS'=>'13',
        'COMPUTADORES Y SISTEMAS OPERATIVOS I'=>'14',
        'CÁLCULO II'=>'12',
        'FÍSICA'=>'11<br>',
    ),
    'semestre IV'=>array(
        'BASE DE DATOS I'=>'14',
        'TEORÍA GENERAL DE SISTEMAS'=>"15",
        'PROGRAMACIÓN'=>"14",
        'ELECTRÓNICA BÁSICA'=>'13',
        'COMPUTADORES Y SISTEMAS OPERATIVOS II'=>'12',
        'ESTADÍSTICA DESCRIPTIVA'=>'18',
    ),

);

echo "<pre>";

foreach($Semestre as $seccion => $items)
    foreach($items as $clave => $valor)
  
        echo "$seccion:\t$clave: $valor<br>";
  
echo "</pre>";

    $pom=(14+13+16+15+15+17+13+14+12+16+12+12+13+15+12+13+13+14+12+11+14+15+14+13+12+15)/26;
    echo "El ponderado.<br> $pom<br> \n";
   echo "<br>Mejor Nota<br> $clave<br>";
   $pro1=(14+13+16+15+15+17)/6;
   echo "<br>Promedios Semestre<br> ";
   echo "Semestre I: $pro1";
   $pro2=(13+14+12+16+12+12+13)/7;
   echo "<br>Semestre II: $pro2";
   $pro3=(15+12+13+13+14+12+11)/7;
   echo "<br>Semestre II: $pro3";
   $pro4=(14+15+14+13+12+15)/6;
   echo "<br>Semestre II: $pro4";
?>