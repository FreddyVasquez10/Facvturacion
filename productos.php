

<?php


include_once('conexion.php');

$linea = $_POST['linea'];
$grupo = $_POST['grupo'];
$cod_producto = $_POST['cod_producto'];
$nom_producto = $_POST['nom_producto'];
$des_producto = $_POST['des_producto'];
$uni_medida = $_POST['uni_medida'];
$cantidad = $_POST['cantidad'];
$pre_uni_compra = $_POST['pre_uni_compra'];
$pre_uni_may = $_POST['pre_uni_may'];
$pre_uni_men = $_POST['pre_uni_men'];
$iva = $_POST['iva'];
$iva_nota = $_POST['iva_nota'];
$depto = $_POST['depto'];
$can_min_inv = $_POST['can_min_inv'];
$cod_barras = $_POST['cod_barras'];
$pro = $_POST['pro'];
$ref_fabrica = $_POST['ref_fabrica'];



echo "Los datos del registro de Productos son los siguientes:    <p>";
echo "Linea: $linea <p>";
echo "Grupo: $grupo <p>";
echo "Codigo Producto: $cod_producto <p>";
echo "Nombre Producto: $nom_producto <p>";
echo "Descripción: $des_producto <p>";
echo "Inidad de Medida: $uni_medida <p>";
echo "Cantidad: $cantidad <p>";
echo "Precio Unitario de compra: $pre_uni_compra <p>";
echo "Precio Unitario Mayoreo: $pre_uni_may <p>";
echo "Precio Unitario Menudeo: $pre_uni_men <p>";
echo "IVA: $iva <p>";
echo "IVA Nota: $iva_nota <p>";
echo "Departamento: $depto <p>";
echo "Cantidad Minima De Inventarios: $can_min_inv <p>";
echo "Codigo de Barras: $cod_barras <p>";
echo "Promedio: $pro <p>";
echo "Referencia de Fabrica: $ref_fabrica <p>";
      $conectar=conn();
      $sql="INSERT INTO productos (linea,grupo,cod_producto,nom_producto,des_producto,uni_medida,cantidad,pre_uni_compra,pre_uni_may,pre_uni_men,iva,iva_nota,depto,can_min_inv,cod_barras,pro,ref_fabrica) 
      VALUES ('$linea', '$grupo','$cod_producto','$nom_producto','$des_producto','$uni_medida','$cantidad','$pre_uni_compra','$pre_uni_may','$pre_uni_men','$iva','$iva_nota','$depto','$can_min_inv','$cod_barras','$pro','$ref_fabrica')";
      $result=mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL - Error: ".mysqli_error($conectar),E_USER_ERROR);

    

?>