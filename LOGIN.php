<?php
 require_once 'login.php';
 $conexion = new mysqli($hn, $un, $pw, $db);
 if ($conexion->connect_error) die ("Fatal error");
ECHO "<center><h1>BIENVENIDOS A ALCOHÓLICOS ANÓNIMOS (AA)</h1>";
echo <<<_END
<html>
    <head>
        <title>AA</title>
    </head>
    <body style=background-image:url('imagen/fondoinvi.jpg width=100% height=100vh ')>
    <div class="box_form">
    <form method="post" action="registros.php">
    <tr>¿Cual es tu Usuario?<p>
        <input type="text" name="name" placeholder="Usuario"><p>
        <input type="password" placeholder="CONTRASEÑA"><p>
        <input type="submit"value="Ingresar"><p>
      <img src="imagen/derota.jpg" width="350px" height="250" "aling="right">
    </form>
    <div>
    
    </body>
</html>
_END;
function mysql_fix_string($coneccion, $string)
{
    if (get_magic_quotes_gpc())
        $string = stripcslashes($string);
    return $coneccion->real_escape_string($string);
}
function sanitizeString($var)
{
    if (get_magic_quotes_gpc())
        $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}
?>