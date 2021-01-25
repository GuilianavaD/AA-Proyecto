<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>AA</title>
    <style type="text/css">
        body{
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 0px;
            margin-bottom: 0px;
        }
       #divv{
            background-color: lightblue;
            margin: 10px;
        }

    </style>
    </head>
    <body style=background-image:url(imagen/fondoinvi.jpg width=100% height=100vh)>
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
                    <li><a href="index.html">Cerrar Sesión</a>
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
    <div id=divv class="box_form">
    <center><form method="post" action="Inicio.php">
    <h2>¿DEJANOS ALGÚN COMENTARIO?</h2><p>
        <input type="text" name="name" placeholder="Nombre"><p>
        <textarea id="opinion" name="contenido"onkeyup="actualizaInfo(100)" rows="10" cols="40" placeholder="EMPIEZA"></textarea>
      <input type="submit"value="Enviar"><p>  &nbsp;&nbsp;
        <img style="border-radius: 20px;"src="imagen/eee.jfif" width="390px" height="250">
    </form></center>
    <div>
    <br>
    <div id=divv >
    <center> <h2>NOS PUEDES CONTACTAR AL SIGUIENTE TELÉFONO "940717714"
        <p> Y SIGUENOS POR FACEBOOK <a href="https://www.facebook.com/aaenperu/">AA en Perú</a>  </h2></center>
    </div>
    <br><center>
    <div id=divv>
     <h2> <br clear="right"><pr>ESTAMOS DISPONIBLES LAS 24 HORAS AL DÍA,SI TIENES ALGÚN PROBLEMA<p> ¡NO DUDES EN LLAMARNOS!!!<p> ¡LA UNIÓN HACE LA FUERZA!.</h2>
    <center><div id=divv><img style="border-radius: 20px;border:15px solid; color: blue;"src="imagen/atadura.jpg"width="150" height="150"  >
     <img style="border-radius: 20px;border:15px solid; color: blue;"src="imagen/exi.jfif"width="130" height="150"  >
     <img style="border-radius: 20px;border:15px solid; color: blue;"src="imagen/alto.jpg"width="150" height="150"  ></div></center> </div></center>
    <br>
    <center><h3>Escribenos: <a href="https://twitter.com/login?lang=es">Twitter:@guiliana_cw21</a> &nbsp;&nbsp;<a href="https://www.google.com/intl/es/gmail/about/">Correo:gvalercii@gmail.com</a></h3></center>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    </body>
</html>