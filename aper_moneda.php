<?php
include_once('conexion.php');

$moneda = $_POST['moneda'];
$identificador = $_POST['identificador'];

echo "Los datos del registro de Monedas son los siguientes:    <p>";
echo "Moneda: $moneda <p>";
echo "identificador: $identificador";


      $conectar=conn();
      $sql="INSERT INTO aper_moneda (moneda,identificador) 
      VALUES ('$moneda', '$identificador')";
      $result=mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);


?>