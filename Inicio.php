<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleinicio.css">
    <title>AA</title>
    </head>
    <body >
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
    <br><br>
    <h1 style="color:#24c0e7"><center>BIENVENIDOS A ALCOHÓLICOS ANÓNIMOS (AA)</center></h1>
   <br>
   <div>
    <div class="slider">
        <ul><li><img src="imagen/refle.jpg" height="450px" width="600px" align="right" alt=""></li> &nbsp; 
            <li ><img src="imagen/alto.jpg" height="450px" width="500px" align="right" alt=""></li> &nbsp; 
            <li><img src="imagen/stop.jpg" height="450px" width="500px"align="right" alt=""></li> &nbsp; </br> </br>
            <li><img src="imagen/grupo.jpg" height="450px" width="500px"align="right"  alt=""></li> &nbsp; 
        </ul>
        </div>
        </div>
        <br>
        </br>
        <table>
            <tbody>
                <tr>
                    <th>
                        <center><td>
        <h2>LIBERATE DE LAS ATADURAS</h2>
        <img style="border:15px solid; color: blue;"src="imagen/alco.jpg"aling="left" width="150px" height="320" alt="" ></td>
        <td><h2>TÚ PUEDES!!!</h2>   
        <img style="border:15px solid; color: blue;"src="imagen/derota.jpg"aling="left"  width="150px" height="320" alt="" >
        </td> 
        <td>
        <h2>TIENES UNA VIDA NO, <br> TE RINDAS</h2>
            <img style="border:15px solid; color: blue;"src="imagen/muerteal.jpg" aling="left"  width="150px" height="320" alt="" >
                  </td>  </center>
                    </th>
               </tr>
            </tbody>
        </table>
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
    // eliminar cokis
    function destroy_session_and_data()
    {
        //session_start();
        $_SESSION = array();
        setcookie(session_name(), '', time()-2592000, '/');
        session_destroy();
    }
?> -->