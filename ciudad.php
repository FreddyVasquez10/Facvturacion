

<?php


include_once('conexion.php');

$codi_ciudad = $_POST['codi_ciudad'];
$nomb_ciudad = $_POST['nomb_ciudad'];



echo "Los datos del registro de Ciudades son los siguientes:    <p>";
echo "Codigo: $ciudad <p>";
echo "Codigo: $codigo_dane <p>";
echo "Codigo: $codigo_area <p>";
echo "Codigo: $pais <p>";

$resultPais = (" SELECT cod_pais,nomb_pais FROM paises_maestro  ");
        $arregloPais = json_decode(json_encode($resultPais), true);

        return view('ciudad.html', compact('arregloPais'));
   

      $pais="SELECT * FROM paises_maestro";
      $resultado=mysqli_query($conexion,$pais);
      while ($valores =mysqli_fetch_array($resultado))


      $conectar=conn();
      $sql="INSERT INTO ciudades (ciudad,codigo_dane,codigo_area,pais) 
      VALUES ('$codi_ciudad', '$nomb_ciudad')";
      $result=mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);

    

?>