<?php
include_once('conexion.php');

$unidad = $_POST['unidad'];
$sigla = $_POST['sigla'];

echo "Los datos del registro de Unidades de Medida son los siguientes:    <p>";
echo "Unidad: $unidad <p>";
echo "Sigla: $sigla <p>";


      $conectar=conn();
      $sql="INSERT INTO uni_medida (unidad,sigla) 
      VALUES ('$unidad','$sigla')";
      $result=mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);


?>