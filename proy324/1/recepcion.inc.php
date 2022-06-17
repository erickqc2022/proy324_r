<?php
session_start();
include "conexionbd.php";
echo "BIENVENIDO VENDEDOR";
$usuario= $_GET['usuario'];
echo $_SESSION["usuario"];
/**$sql="select * from usuarios where rol'";
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);
if ($fila["rol"]==$rol)
    {
        header("Location: vendedor.php");
    }else{
        header("Location: cliente.php");
    }**/
?>
