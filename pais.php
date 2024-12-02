<?php
include_once('conexion.php');

$cod_pais = $_POST['cod_pais'];
$nomb_pais = $_POST['nomb_pais'];

echo "Los datos del registro de Paises son los siguientes:    <p>";
echo "Codigo: $cod_pais <p>";
echo "Nombre: $nomb_pais";


      $conectar=conn();
      $sql="INSERT INTO paises_maestro (cod_pais,nomb_pais) 
      VALUES ('$cod_pais', '$nomb_pais')";
      $result=mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);


?>