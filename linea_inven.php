

<?php


include_once('conexion.php');

$cod_linea = $_POST['cod_linea'];
$nom_linea = $_POST['nom_linea'];



echo "Los datos del registro de Lineas de inventarios son los siguientes:    <p>";
echo "Codigo Linea: $cod_linea <p>";
echo "Nombre Linea: $nom_linea <p>";
      $conectar=conn();
      $sql="INSERT INTO linea_inven (cod_linea,nom_linea) 
      VALUES ('$cod_linea', '$nom_linea')";
      $result=mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);

    

?>