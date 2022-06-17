<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "conexionbd.php";
    $usuario=$_GET["usuario"];
    $contrasenia=$_GET["contrasenia"];
    $sql="select * from usuarios where usuario='".$usuario;
    $sql.="' and contrasenia='".$contrasenia."'";
    $resultado=mysqli_query($conn, $sql);
    $fila=mysqli_fetch_array($resultado);
    if ($fila["usuario"]==$usuario and $fila["contrasenia"]==$contrasenia)
    {
        if($fila['rol']=='v'){
            session_start();
            $_SESSION["usuario"]=$usuario;
            header("Location: recepcion.inc.php?usuario=".$fila["usuario"]);
       }else{
          session_start();
          $_SESSION["usuario"]=$usuario;
          header("Location: peticion.inc.php?usuario=".$fila["usuario"]);
       }
       
    }
    else
    {
        header("Location: index.inc.php");
    }
    ?>
</body>
</html>