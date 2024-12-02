

<?php


include_once('conexion.php');

$codigo_bodega = $_POST['codigo_bodega'];
$descripcion_bodega = $_POST['descripcion_bodega'];
$responsable = $_POST['responsable'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];



echo "Los datos del registro de Bodegas son los siguientes:    <p>";
echo "codigo_bodega: $codigo_bodega <p>";
echo "descripcion_bodega: $descripcion_bodega <p>";
echo "Codigo: $responsable <p>";
echo "Codigo: $direccion <p>";
echo "Codigo: $telefono <p>";
      $conectar=conn();
      $sql="INSERT INTO catalogo_bodegas (codigo_bodega,descripcion_bodega,responsable,direccion,telefono) 
      VALUES ('$codigo_bodega', '$descripcion_bodega','$responsable','$direccion','$telefono')";
      $result=mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);

    

?>