<?php 
echo <<<_END
<html>
    <head>
        <title>AA</title>
    </head>
    <body bgcolor="orange">
    <div class="box_form">
    <center>
    <h1>BIENVENIDOS A ALCOHÓLICOS ANÓNIMOS (AA)<h1>
    <form method="post" action="Inicio.php">
        <img src="imagen/images (2).jfif" width="450" height="380" "aling="right">
        <img src="imagen/deeeee.jpg" width="450" height="380" "aling="right">
    </form>
    <div>
    
    </body>
</html>
_END;
    session_start();

    if (isset($_SESSION['nombre']))
    {
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];

        destroy_session_and_data();

        echo "Sesión terminada <a href='ingreso.php'>Ingresar</a>.<br>";
    }
    else echo "Por favor <a href='ingreso.php'>Click aqui</a>
                para ingresar";

    function destroy_session_and_data()
    {
        //session_start();
        $_SESSION = array();
        setcookie(session_name(), '', time()-2592000, '/');
        session_destroy();
    }
?>