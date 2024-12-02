

<?php


include_once('conexion.php');

$cod_ceco = $_POST['cod_ceco'];
$nom_ceco = $_POST['nom_ceco'];
$responsable = $_POST['responsable'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$e_mail = $_POST['e_mail'];



echo "Los datos del registro de Centro de Costos son los siguientes:    <p>";
echo "Codigo CECO: $cod_ceco <p>";
echo "Nombre CECO: $nom_ceco <p>";
echo "Responsable: $responsable <p>";
echo "Direccion: $direccion <p>";
echo "Telefono: $telefono <p>";
echo "Correo: $e_mail <p>";
      $conectar=conn();
      $sql="INSERT INTO apertura_de_centros_de_costos (cod_ceco,nom_ceco,responsable,direccion,telefono,e_mail) 
      VALUES ('$cod_ceco', '$nom_ceco','$responsable','$direccion','$telefono','$e_mail')";
      $result=mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);

    

?>