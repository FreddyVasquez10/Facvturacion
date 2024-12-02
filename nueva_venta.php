<?php
  session_start();
  include_once('conexion.php');
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <?php include "includes/scripts.php";?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap5.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap5.min.css" rel="stylesheet">
    <title>NUEVA VENTA</title>
    
</head>
<style>
  @import url(../fonts/GothamBook.css);
  @import url(../fonts/GothamBold.css);
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

  }
  body{
    background: #ededed;
  }
  h1, h2, h3, h4, h5, h6 {
    font-family: 'arial';
    font-weight: bold;
    letter-spacing: 1px

  }
  h1{
    font-size: 26px;
  }
  h2{
    font-size: 20px;
  }
  h3{
    font-size: 18px;
  }
  h4{
    font-size: 16px;
  }
  h5{
    font-size: 14px;
  }
  h6{
    font-size: 12px;
  }
  p{
    font-family: 'arial';
    letter-spacing: 2px;
    font-size: 14px;
    line-height: 20px;
  }
  a{
    text-decoration: none;
    font-family: arial;
    letter-spacing: 1px;
  }
  span{
    font-family: GothamBook;
    letter-spacing: 1px;
    font-size: 14px;
    line-height: 20px;
  }
  header{
    position: fixed;
    width: 100%;

  }
  .header{
    color: #FFF;
    background: #0a4661;
    height: 35px;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
  }
  nav ul{
    background: #058167;
    list-style: none;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: left;
    align-items: center;
  }
  nav ul > li a{
    position: relative;
  }
  nav a{
    color: #FFF;
    display: block;
    font-size: 10pt;
    font-family: GothamBook;
    padding: 15px 30px;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: background .5s;
    border-right: 1px solid #319b8f;
  }
  nav.principal > a{
    background: url(../images/arow_bottom.png);
    background-position-x: 0%;
    background-position-y: 0%;
    background-size: auto auto;
    background-position: 94% center;
    background-size: 10px;
  }
  nav ul li:hover ul{
    display: block;
  }
  nav li ul{
    background: #2d9872;
    display: none;
    flex-direction: column;
    position: absolute;
    align-items: flex-start;
    border-radius: 0 0 10px 10px;

  }
  nav li ul a{
    position: relative;
    padding: 10px 10px;
    border-right: initial;

  }
  nav li ul a:hover{
    background: #147556;
    
  }
  nav li ul li:last-child{
    border-radius: 0 0 10px 10px;
    overflow: hidden;

  }
  #container{
    padding: 90px 15px 15px;
  }
  .form_register{
    width: 450px;
    margin: auto;
    margin-top: 20px;
  }
  .form_register h1{
    color: #3c93b0;
  }
  hr{
    border: 0;
    background: #CCC;
    height: 1px;
    margin: 10px 0;
    display: block;

  }
  form{
    background: #FFF;
    margin: auto;
    padding: 20px 50px;
    border: 1px solid #d1d1d1;
  }
  label{
    display: block;
    font-size: 12pt;
    font-family: GothamBook;
    margin: 15px auto 5px auto;
  }
  inport,select{
    display: block;
    width: 100px;
    font-size: 11pt;
    padding: 5px;
    border: 1px solid #85929e;
    border-radius: 5px;
  }
  .notItemOne option:first-child{
    display: none;
  }
  .btn_save{
    font-size: 12pt;
    background: #12a4c6;
    padding: 10px;
    color: #FFF;
    letter-spacing: 1px;
    border: 0;
    cursor: pointer;
    margin: 30px auto 15px auto;
    display: block;
    border-radius: 5px;
  }
  .alert{
    width: 100%;
    background: #66e07e66;
    border-radius: 6px;
    margin: 20px auto;
  }
  .msg_error{
    color: #e65656;

  }
  .msg_save{
    color: #126e00;
  }
  .alert p{
    padding: 10px;
  }





  /*============ Ventas ============*/
.datos_cliente, .datos_venta, .title_page{
	width: 100%;
	max-width: 900px;
	margin: auto;
	margin-bottom: 20px;
}
#detalle_venta tr{
	background-color: #FFF !important;
}
#detalle_venta td{
	border-bottom: 1px solid #CCC;
}
.datos{
	background-color: #e3ecef;
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    border: 2px solid #78909C;
    padding: 10px;
    border-radius: 10px;
    margin-top: 10px;
}
.action_cliente{
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	align-items: center;
}

.datos label{
	margin: 5px auto;
}
.wd20{
	width: 20%;
}
.wd25{
	width: 25%;
}
.wd30{
	width: 30%;
}
.wd40{
	width: 40%;
}
.wd60{
	width: 60%;
}
.wd100{
	width: 100%;
}
#div_registro_cliente, #add_product_venta{
	display: none;
}
.displayN{
	display: none;
}
.tbl_venta{
	max-width: 900px;
	margin: auto;
}
.tbl_venta tfoot td{
	font-weight: bold;
}
.textright{
	text-align: right;
}
.textcenter{
	text-align: center;
}
.textleft{
	text-align: left;
}
.btn_anular{
	background-color: #f36a6a;
	border: 0;
	border-radius: 5px;
	cursor: pointer;
	padding: 10px;
	margin: 0 3px;
	color: #FFF;
}
</style>

<body>
  <?php include "includes/header.php";?>
  <section id="container">
    <div>
      <h1><i class="fas fa-cube"></i>Nueva Cotización</h1>
    </div>
    <div class="datos_cliente">
        <div class="action_cliente">
        <h4>Datos del Cliente</h4>
        <a href="#" class="btn_new btn_new_cliente"><i class="fas fa-plus"></i>Nuevo Cliente</a>

    </div>

    <form name="form_new_cliente_venta" id="form_new_cliente_venta" class= "datos">
      <input type="hidden" name="action" value="addCliente">
      <input type="hidden" id="id" name="id" value="" required>
      <div class="wd30">
        <label>Nit</label>
        <input type="text" name="nit" id="nit">
      </div>
      <div class="wd30">
      <label>Nombre</label>
        <input type="text" name="nombre" id="nombre" disabled required>
      </div>
      <div class="wd30">
      <label>Correo</label>
        <input type="text" name="e_mail" id="e_mail" disabled required>
      </div>
      <div class="wd30">
      <label>Teléfono</label>
        <input type="number" name="telefono" id="telefono" disabled required>
      </div>
      <div class="wd30">
      <label>Dirección</label>
        <input type="text" name="direccion" id="direccion" disabled required>
      </div>
      <div class="wd30">
      <label>Pais</label>
        <input type="text" name="pais" id="pais" disabled required>
      </div>
      <div class="wd30">
      <label>Ciudad</label>
        <input type="text" name="ciudad" id="ciudad" disabled required>
      </div>
      <div class="wd30">
      <label>Fecha cumpleaños</label>
        <input type="text" name="fecha_cumple" id="fecha_cumple" disabled required>
      </div>
      <div id="div_registro_cliente" class="wd100">
        <button type="submit" class="btn_save"><i class="far fa-save fa-lg"></i>Guardar</button>

      </div>


    </form>
    </div>
    <div class="datos_venta">
      <h4>Datos de Venta</h4>
      <div class="datos">
        <div class="wd50">
          <label>Vendedor</label>
          <p>Freddy Vasquez</p>
        </div>
        <div class="wd50">
          <label>Acciones</label>
          <div id="acciones_venta">
            <a href="#" class="btn_ok textcenter" id="btn_anular_venta"><i class="fas fa-ban"></i>Anular</a>
            <a href="#" class="btn_new textcenter" id="btn_facturar_venta"><i class="fas fa-edit"></i>Procesar</a>
          </div>
        </div>

      </div>

    </div>
    <table class="tbl_venta">
      <thead>
        <tr>
          <th width="100px">Codigo</th>
          <th>Descripción</th>
          <th>Existencia</th>
          <th width="100px">Cantidad</th>
          <th class="textright">Precio</th>
          <th width="textright">Precio Total</th>
          <th>Acción</th>
        </tr>
        <tr>
          <td><input type="text" name="txt_cod_producto" id="txt_cod_producto"></td>
          <td id="txt_descripcion">-</td>
          <td id="txt_existencia">-</td>
          <td><input type="text" name="txt_cant_producto" id="txt_cant_producto" value="0" min="1" disabled></td>
          <td id="txt_precio" class="textringht">0.00</td>
          <td id="txt_precio_total" class="textringht">0.00</td>
          <td><a href="#" id="add_product_venta" class="link_add"><i class="fas fa-plus"></i>Agregar</a></td>
        </tr>
        <tr>
          <th>Codigo</th>
          <th colspan="2">Descripción</th>
          <th>Cantidad</th>
          <th class="textringht">Precio</th>
          <th class="textringht">Precio Total</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody id="detalle_venta">
        <tr>
          <td>1</td>
          <td colspan="2">Mouse USB</td>
          <td class="textcenter">1</td>
          <td class="textringht">100.00</td>
          <td class="textringht">100.00</td>
          <td class=""><a class="link_delete" href="#" onclick="event.preventDefault(); del_producto_detalle(1);"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td colspan="2">Teclado</td>
          <td class="textcenter">1</td>
          <td class="textringht">150.00</td>
          <td class="textringht">150.00</td>
          <td class=""><a class="link_delete" href="#" onclick="event.preventDefault(); del_producto_detalle(1);"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="5" class="textright">SUBTOTAL</td>
          <td class="textright">1000.00</td>
        </tr>
        <tr>
          <td colspan="5" class="textright">IVA (19%)</td>
          <td class="textright">190.00</td>
        </tr>
        <tr>
          <td colspan="5" class="textright">TOTAL</td>
          <td class="textright">1190.00</td>
        </tr>
      </tfoot>

    </table>
  </section>

  <?php include "includes/footer.php";?>
</body>
</html>