<?php
 $conexion = new mysqli('localhost', 'root','', 'diario',3310);
 if ($conexion->connect_error) die ("Fatal error");
ECHO "<center><h1>DIARIO PERSONAL</h1>";
echo <<<_END
<html>
    <head>
        <title>DIARIO PERSONA</title>
    </head>
    <body bgcolor=" pink">
    <div class="box_form">
    <form method="post" action="contenido.php">
    <tr>¿Cual es tu Usuario?<p>
        <input type="text" name="name" placeholder="Usuario"><p>
        <input type="password" placeholder="CONTRASEÑA"><p>
        <input type="submit"value="Ingresar"><p>
        <img src="image/diary.jpg" width="350" height="180" "aling="right">
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