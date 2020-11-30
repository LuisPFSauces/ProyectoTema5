<?php
    if(isset($_REQUEST['logout'])){
        unset($GLOBALS[_SERVER]);
        header("Location: ../indexProyectoTema5.php");
    }
    if(isset($_REQUEST['salir'])){
        header("Location: ../indexProyectoTema5.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Bienvenido Admin</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <input type="submit" name="logout" value="LogOut">
            <input type="submit" name="salir" value="Salir">
        </form>
    </body>
</html>
