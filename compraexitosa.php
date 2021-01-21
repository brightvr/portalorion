<?php


//var_dump($_GET);
session_start();

var_dump($_SESSION);

if(!isset($_SESSION['cliente']['nombre-cliente'])){

    header('Location:index.php');
}


require_once 'conexion.php';
require_once 'stock/updatestock.php';


$stock= new Stock($_SESSION['venta']['id_producto'],$miconexion->Conectando(),$_SESSION['venta']['cantidad']);

$stock->ChangeStock($stock->GetData());


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fondo-negro  d-flex justify-content-between">
    <a class="navbar-brand" href="index.php"><img class="logo-orion" src="api/assets/img/logo-orion-claro.png" alt=""></a>
    <button class="cont-icon-user" type="button" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icono-user"><i class="fas fa-user"></i></span>
    </button>

  </nav>
  <div class="menu-apps">

        <div  class="vinculo iconos-menu-escogido " href="#"><i class="fas fa-house-user"></i></div>
        <div  class="vinculo iconos-menu" href="#"><i class="fas fa-store"></i></div>
        <div class="vinculo iconos-menu" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div  class="vinculo iconos-menu " href="#"><i class="fas fa-truck"></i></div>
      </div>
  <br>
 
    <div class="bg-light p-3">

    <h2 class="d-flex justify-content-center" style="color: green;">Compra Exitosa</h2>
    <br>
    <hr>
    <br>
    <h4>Tu compra fue exitosa, tu numero de guias es: <strong><?php echo '#'.$_GET['compra'] ?></strong>, descarga la factura de garantia</p></h4>
    <br>
    
    <hr>
    <br>
    <h5> <?php echo $_SESSION['cliente']['nombre-cliente'] ?>, gracias por tu compra <span style=" color:red;"><i class="fas fa-heart"></i></span></h5>
    <br>
    <a href="pdf/pdf.php" class="btn btn-success btn-block"> <h4> DESCARGAF FACTURA </h4> </a>
    <br>
    <hr>
    <br>
    <h6>Trabajamos para el desarrollo y fortalecimiento  de la
        economia digital 
    </h6>
    <br>
    <h6>
    Para el optimo avance de la economia digital portal orion ha desarrollado una logistica de
    pago contra entrega que le permite al cliente la flexibilidad de realizar el pago una vez tiene el
    producto en sus manos.<br><br>
    <small><a href="">-Terminos y condiciones del pago contra entrega</a></small><br>
    <br>
    <small><a href="">-Causas de bloqueo del pago contra entrega</a></small>
    </h6>
    <br>
    <h6>
    Todas las compras realizadas en portal orion cuentan con gariantia por pedidas o problemas
    con transportadoras o mensajeros, <strong>Nosotros te cubrimos <i class="fas fa-user-shield"></i></strong>
    </h6>

    <br>
    
   
    </div>


  <script src="librerias/jquery/jquery-3.5.1.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="librerias/icons/js/all.js"></script>
  <script src="js/navigation.js"></script>
</body>
</html>