

<?php


include_once('conexion.php');

$nombre = $_POST['nombre'];
$nit = $_POST['nit'];
$e_mail = $_POST['e_mail'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$fecha_cumple = $_POST['fecha_cumple'];



echo "Los datos del registro de Clientes son los siguientes:    <p>";
echo "Nombre: $nombre <p>";
echo "NIT: $nit <p>";
echo "Correo: $e_mail <p>";
echo "Teléfono: $telefono <p>";
echo "Dirección: $direccion <p>";
echo "Pais: $pais <p>";
echo "Ciudad: $ciudad <p>";
echo "Fecha de Cumpleaños: $fecha_cumple <p>";
      $conectar=conn();
      $sql="INSERT INTO clientes (nombre,nit,e_mail,telefono,direccion,pais,ciudad,fecha_cumple) 
      VALUES ('$nombre', '$nit','$e_mail','$telefono','$direccion','$pais','$ciudad','$fecha_cumple')";
      $result=mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);

    

?>