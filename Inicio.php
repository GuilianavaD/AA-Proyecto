<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AA</title>
    <style type="text/css"><! -- ESTILOS CSS-->
        
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
            background-color:#000;
            color:#fff;
            text-decoration:none;
            padding:10px 12px;
            display:block;
        }
        
        .nav li a:hover {
            background-color:#434343;
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
                    <li><a href="Informe.php">INFORMACIÓN</a>
                
                    </li>
                    <li><a href="contacto.php">CONTACTOS</a>
                    
                    </li>
                    <li><a href="misivisi.php">MISIÓN Y VISIÓN</a>
                
                </ul>
            </li>
            <li><a href="vocal.php">CONCEPTOS</a>
                <ul>
                <li><a href="masvocales.php">EL ALCOHOLISMO</a>
                </li>
                </ul>
            </li>

            <li><a href="Abecedario.php">CONSEJOS</a>
                <ul> 
                    <li><a href="masvocales.php">RECOMENDACIONES</a>
                </ul>
            </li>
            <li><a href="Abecedario.php">AUTORES</a>
                <ul> 
                    <li><a href="masvocales.php">LIBROS</a>
                </ul>
            </li>
    </div><br>
    
    </body>
</html>