<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
   
    <title>AA</title>
    <style type="text/css">
     body{ background-color:#E8F4FA;
        margin-left: 40px;
        margin-right: 40px;
    }
    h5{
        text-align: justify; 
        color:#000;
    }
     </style>
    </head>
    <body>
    <div id="header">
        <ul class="nav">
            <li><a href="Inicio.php">INICIO</a>
                <ul>
                    <li><a href="misivisi.php">MISIÓN Y VISIÓN</a>
                
                    </li>
                    <li><a href="Informacion.php">INFORMACIÓN</a>
                    
                    </li>
                    <li><a href="contacto.php">CONTACTOS</a>
                    </li>
                    <li><a href="index.html">CERRAR SESIÓN</a>
                </ul>
            </li>
            <li><a href="conceptos.php">SÍNTOMAS</a>
                <ul>
                <li><a href="alcoholismo.php">EL ALCOHOLISMO</a>
                </li>
                </ul>
            </li>

            <li><a href="consejos.php">CONSEJOS</a>
                <ul> 
                    <li><a href="recomendacion.php">RECOMENDACIONES</a>
                </ul>
            </li>
            <li><a href="autores.php">AUTORES</a>
                <ul> 
                    <li><a href="libros.php">LIBROS</a>
                </ul>
            </li>
    </div>
    <br>
    <br>
    <br>
    <center><h2 style="color:#24c0e7 ">Información Sobre Alcohólicos Anónimos</h2></center>
    <br>
    <h4 style="color:green;text-align: justify ">Esta información es tanto para gente que pueda tener un 
    problema con la bebida como para aquellos que están en contacto con 
    gente que tiene, o se sospecha que tiene, un problema.</h4>
    </p>
    <br><center>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/2ZjQcmRrGcY"
         frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
          gyroscope; picture-in-picture" allowfullscreen></iframe></center>

           <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>


    <a href="enfermedades.php"><center><h2>Enfermedades causadas por el alcohol</h2></center></a>
    <h5>Hay más de tres millones de muertes al año por consumo de alcohol en el mundo.
     Muchas personas enferman a consecuencia de sus efectos nocivos. Muchas de las enfermedades que causa son mortales. 

Las consecuencias más inmediatas para la salud impactan directamente en el corazón,el hígado y el sistema nervioso.
 A corto plazo crea problemas de memoria y disfunciones sexuales.</h5>
 <center><img style="border-radius: 20px;"src="imagen/enfermedades-causadas-por-el-alcohol_45225_l.jpg"width="400px" height="200" alt="" ></center>
     </body>
</html>
<!-- cookis -->
<!-- <?php 
    session_start();

    if (isset($_SESSION['initiated']))
    {
        session_regenerate_id();
        $_SESSION['initiated'] = 1;
    }

    if (!isset($_SESSION['count']))
        $_SESSION['count']=0;
    else
        ++$_SESSION['count'];

    echo $_SESSION['count'];
    function destroy_session_and_data()
    {
        //session_start();
        $_SESSION = array();
        setcookie(session_name(), '', time()-2592000, '/');
        session_destroy();
    }
?> -->