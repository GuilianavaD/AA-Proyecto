<?php
 $conexion = new mysqli('localhost', 'root','', 'diario',3310);
 if ($conexion->connect_error) die ("Fatal error");
ECHO "<center><h1>ALCOHÓLICOS ANÓNIMOS</h1>";
echo <<<_END
<html>
    <head>
        <title>AA</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body style=background-image:url('imagen/fondoinvi.jpg width=100% height=100vh ')>
    <div class="box_form">
    <form method="post" action="Inicio.php">
    <tr>¿Cual es tu Usuario?<p>
        <input type="text" name="name" placeholder="Usuario"><p>
        <input type="password" placeholder="CONTRASEÑA"><p>
        <input type="submit"value="Ingresar"><p>
        <img src="imagen/derota.jpg" width="350px" height="250" "aling="right">
    </form>
    <div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
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