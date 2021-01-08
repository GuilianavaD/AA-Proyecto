<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AA</title>
    <style type="text/css">
        
        * {
            margin:0px;
            padding:0px;
        }
        
        #header {
            margin:auto;
            width:500px;
            font-family:Arial, Helvetica, sans-serif;
        }
        
        ul, ol {
            list-style:none;
        }
        
        .nav > li {
            float:left;
        }
        
        .nav li a {
            background-color:rgb(30, 111, 204);
            color:#fff;
            text-decoration:none;
            padding:10px 12px;
            display:block;
        }
        
        .nav li a:hover {
            background-color:#0e2f9b;
        }
        
        .nav li ul {
            display:none;
            position:absolute;
            min-width:140px;
        }
        
        .nav li:hover > ul {
            display:block;
        }
        
        .nav li ul li {
            position:relative;
        }
        
        .nav li ul li ul {
            right:-140px;
            top:0px;
        }

    </style>
    </head>
    <body>
    <div id="header">
        <ul class="nav">
            <li><a href="Inicio.php">INICIO</a>
                <ul>
                    <li><a href="Informacion.php">INFORMACIÓN</a>
                
                    </li>
                    <li><a href="contacto.php">CONTACTOS</a>
                    
                    </li>
                    <li><a href="misivisi.php">MISIÓN Y VISIÓN</a>
                    </li>
                    <li><a href="index.html">Cerrar Sesión</a>
                </ul>
            </li>
            <li><a href="conceptos.php">CONCEPTOS</a>
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
    <center><h1 style="color:#24c0e7">Información Sobre Alcohólicos Anónimos</h1>
    <br>
    <p>
    <h2>Esta información es tanto para gente que pueda tener un 
    problema <p>con la bebida como para aquellos que están en contacto<p> con 
    gente que tiene, o se sospecha que tiene, un problema.</h2>
    </p>
    </body>
</html>