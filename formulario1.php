<?php

session_start();

//var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Orion</title>

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

        <div  class="vinculo iconos-menu " ><i class="fas fa-house-user"></i></div>
        <div  class="vinculo iconos-menu" ><i class="fas fa-store"></i></div>
        <div class="vinculo iconos-menu" ><i class="fas fa-money-check-alt"></i></div>
        <div  class="vinculo iconos-menu-escogido " ><i class="fas fa-truck"></i></div>
      </div>
  <br>

  <div class="container">
      
      <a href="envios.php" class="btn btn-success"><h2><i class="fas fa-truck"></i>  /  <i class="fas fa-arrow-left"></i> Envios</h2></a>

      </div>

<br>
<div class="fondo-verde p-3 d-flex justify-content-center"><h2>Formulario de compra</h2></div>

<br>



<div class="fondo-verde p-3">
  <div class="bg-light p-2">
   <h5> Recuerda que si el domiciliario no se puede contactar contigo tu 
    pedido sera <strong>CANCELADO</strong>, debes estar pendiente del numero de contacto que pongas en el formulario.</h5>
  </div>
</div>

<br>




<div class="fondo-verde p-3">


  <form class="bg-light p-3" action="ventas/addventa.php" method="POST">
  <br>
  <br>
  <label for="">Nombre destinatario :</label><br>
  <input name="nombre-cliente" type="text" required>
  <br>
  <br>
  <label for="">Numero de contacto :</label><br>
  <input name="celular-cliente" type="number" required>
  <br>
  <br>
  <label for="">Email :</label><br>
  <input name="email-cliente" type="email" required>
  <br>
  <br>
  <label for="">Ciudad :</label><br>
  <input name="ciudad-cliente" type="text" required>
  <br>
  <br>
  <label for="">Barrio/localidad :</label><br>
  <input name="barrio-cliente" type="text" required>
  <br>
  <br>
  <label for="">Direccion exacta :</label><br>
  <input name="direccion-cliente" type="text" required>
  <br>
  <br>
  
  <input class="d-none" type="text"  name="metodo-pago" value="contra-entrega">
  <button class="btn btn-block btn-success"><h4>Finalizar compra</h4></button>



  </form>
</div>

<br>




<hr>
  <script src="librerias/jquery/jquery-3.5.1.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="librerias/icons/js/all.js"></script>
  <script src="js/navigation.js"></script>
</body>
</html>