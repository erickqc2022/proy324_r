<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$codFlujo=$_GET['flujo'];
$codProceso=$_GET['cproceso'];
include "conexionbd.php";
$sql="select * from proceso where flujo='".$codFlujo;
$sql.="' and cproceso='".$codProceso."'";
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);
$archivo=$fila['pantalla']
?>
<body>
  <h1>MOTOR DE FLUJO</h1>
  <form action="controlindex.inc.php" method="GET"></form> 
  <?php
    include $archivo;
  ?> 
  <input type="submit" value="Anterior" name="Anterior"/>
</body>
</html>