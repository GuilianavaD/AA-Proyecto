<?php 
   $conexion = new mysqli('localhost', 'root','', 'diario',3310);
    if ($conexion->connect_error) die ("Fatal error");
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $nombre = mysql_entities_fix_string($conexion, $_POST['nombre']);
        $apellido = mysql_entities_fix_string($conexion, $_POST['apellido']);
        $username = mysql_entities_fix_string($conexion, $_POST['username']);
        $pw_temp = mysql_entities_fix_string($conexion, $_POST['password']);
        $password = password_hash($pw_temp, PASSWORD_DEFAULT);
        $query = "INSERT INTO usuarios VALUES". "('$nombre','$apellido','$username', '$password')";
        $query;
        $result = $conexion->query($query);
        if (!$result) die ("Falló registro");

    }
        echo <<<_END
        <head>
        <title>DIARIO PERSONAL</title>
        </head>
        <body bgcolor=" pink">
        <center><h1>Regístrate</h1>
        <form action="login.php" method="post"><pre>
        Nombre    <input type="text" name="nombre">
        Apellido  <input type="text" name="apellido">
        Usuario   <input type="text" name="username">
        Password  <input type="password" name="password">
                  <input type="hidden" name="reg" value="yes">
                  <input type="submit" value="REGISTRAR"> 
                  <img src="image/registro.png" width="350" height="180" "aling="right">
        </form>
        </body>
        _END;
        $query = "SELECT * FROM usuarios";
      $result = $conexion->query($query);
      if (!$result) die ("Falló el acceso a la base de datos");

        $rows = $result->num_rows;
        
    function mysql_entities_fix_string($conexion, $string)
    {
        return htmlentities(mysql_fix_string($conexion, $string));
      }
    function mysql_fix_string($conexion, $string)
    {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return $conexion->real_escape_string($string);
      }   
?>