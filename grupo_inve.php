

<?php


include_once('conexion.php');

$cod_linea = $_POST['linea_inve'];
$nom_linea = $_POST['cod_grupo'];
$cod_linea = $_POST['nom_grupo'];
$nom_linea = $_POST['tipo_linea'];


echo "Los datos del registro de Grupos de inventarios son los siguientes:    <p>";
echo "Codigo Linea: $linea_inve <p>";
echo "Nombre Linea: $cod_grupo <p>";
echo "Codigo Linea: $nom_grupo <p>";
echo "Nombre Linea: $tipo_linea <p>";
      $conectar=conn();
      $sql="INSERT INTO grupo_inve (linea_inve,cod_grupo,nom_grupo,tipo_linea) 
      VALUES ('$linea_inve', '$cod_grupo','$nom_grupo','$tipo_linea')";
      $result=mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);

    

?>