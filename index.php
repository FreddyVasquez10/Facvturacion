<?php
  session_start();
  include_once('conexion.php');
  
?>
<?php
$alert = '';
//session_start();
if(!empty($_SESSION['active']))  
{
  header('location: sistema/');
}else{

  if(!empty($_POST))
  {
    if(empty($_POST['usuario']) || empty($_POST['clave']))
    {
      $alert ='Ingresa tu Usuario y contraseña';

    }else{
      require_once "conexion.php";
      $user = mysqli_real_escape_string($conection,$_POST['usuario']);
      $pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));
      //$conectar = @mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);

      $query = mysqli_query($conection,"SELECT u.idusuario,u.nombre,u.correo,u.usuario,r.idrol,r.rol 
                                        FROM usuario u
                                        INNER JOIN rol r
                                        ON u.rol = r.idrol
                                        WHERE u.usuario= '$user' AND u.clave='$pass'");
      mysqli_close($conection);
      $result=mysqli_num_rows($query);

      if($result > 0)
      {
        $data = mysqli_fetch_array($query);
        
        $_SESSION['active'] = true;
        $_SESSION['idUser'] = $data['idusuario'];
        $_SESSION['nombre'] = $data['nombre'];
        $_SESSION['email']  = $data['correo'];
        $_SESSION['user']   = $data['usuario'];
        $_SESSION['rol']    = $data['idrol'];
        $_SESSION['rol_name']    = $data['rol'];

        header('location: sistema/');
      }else{
        $alert ='Usuario o contraseña son incorrectos';
        session_destroy();

      }
    }
  }
}
?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minium-scale=1.0">
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>PRÁCTICO ERP</title>
    
</head>
<body>
  <section id="container">
    <form action="" method="post">
      <h3>Iniciar Sesión</h3>
      <img src="img/login.png" alt="Login">
      <input type="text" name="usuario" placeholder="Usuario">
      <input type="password" name="clave" placeholder="Contraseña">
      <div class="alert"><?php echo isset($alert) ? $alert : '';  ?></div>
      <input type="submit" value="INGRESAR">

      

        <button class="logueo"><li><a href="logueo.php"><i class="fas fa-plus"></i> LOGUEO</a></li></button>
      

    </form>
    

  </section>
</body>
<style>
  @import url(../fonts/GothamBook.css);
  @import url(../fonts/GothamBold.css);
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body{
    /*background: #ededed;*/
    background-image: url(img/fondo1.jpg);
    background-size: cover;
    background-repeat: no-repeat;
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
    font-size: 25px;
    font-family: Arial;
    letter-spacing: 1px;
    width: 100%;
    background: #2980b9;
    padding: 15px;
    color: #FFF;
    text-align: center;
    text-transform: uppercase;
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
    background: #ac7f0e;
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
    background: #b1800d;
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
    background: #975408;
    
  }
  nav li ul li:last-child{
    border-radius: 0 0 10px 10px;
    overflow: hidden;

  }
  #container{
    background: rgba(61 100 17 / 39%);
    width: 100%;
    height: 100vh;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flexbox;
    display: -o-flex;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  #container form{
    background: rgba(255, 255, 255, 0.6);
    width: 400px;
    padding: 10px;

  }
  #container form img{
    margin: 15px auto;
    text-align: center;
    display: block;

  }
  #container form input{
    width: 90%;
    padding: 5px;
    font-size: 16pt;
    display: block;
    margin: 25px auto;
    border-radius: 5px;
    border: 1px solid #85929e;
    text-align: center;
  }
  #container form input[type="submit"]{
    background: #52be80;
    padding: 10px;
    color: #FFF;
    letter-spacing: 1px;
    border: 0;
    cursor: pointer;


  }

  #container form input[type="logueo"]{
    background: #52be80;
    padding: 10px;
    color: #FFF;
    letter-spacing: 1px;
    border: 0;
    cursor: pointer;


  }
  .logueo{
    background: #52be80;
    padding: 10px;
    color: #FFF;
    letter-spacing: 1px;
    border: 0;
    cursor: pointer;
    width: 90%;
    font-size: 16pt;
    display: block;
    margin: 25px auto;
    text-align: center;


  
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
    font-family: 'arial';
    font-size: 16px;
    text-align: center;
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

@media screen and (max-width: 460px) {
  
  #container form{
    width: 70%;
  }
  
}
@media screen and (max-width: 1000px) 
{
    .dashboard{
        flex-wrap: wrap;
    }
    .dashboard a{
        width: 50%;
        border: 1px solid #ccc;
    }
  }

</style>
</html>