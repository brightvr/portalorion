<?php

//var_dump($_GET);
if(!isset($_GET['collection_status'])){

    header('Location:https://google.com');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Orion</title>

    <link rel="stylesheet" href="../librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../librerias/icons/css/all.css">
    <link rel="stylesheet" href="../css/head.css">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark fondo-negro  d-flex justify-content-between">
    <a class="navbar-brand" href="../index.php"><img class="logo-orion" src="../api/assets/img/logo-orion-claro.png" alt=""></a>
    <button class="cont-icon-user" type="button" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icono-user"><i class="fas fa-user"></i></span>
    </button>

  </nav>
  <div class="menu-apps">

        <div  class="vinculo iconos-menu " href="#"><i class="fas fa-house-user"></i></div>
        <div  class="vinculo iconos-menu" href="#"><i class="fas fa-store"></i></div>
        <div class="vinculo iconos-menu-escogido" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div  class="vinculo iconos-menu " href="#"><i class="fas fa-truck"></i></div>
      </div>
  <br>

<hr>

<div class="container fondo-verde p-3">

<?php 

    if($_GET['collection_status']==="pending" && $_GET['payment_type']==="ticket"){

        echo '<div class="bg-light p-3">PAGO EN EFECTIVO Pago pendiente ,
        una vez realices el pago, este se aprovara
        inmediatamente y podras rastrear tu envio <a href="../envios.php">AQUÍ</a><br><hr>
        Recuerda que mercado pago te enviara al correo todo el proceso de la compra<br>

        <small>Si tienes algún problema con tu pago comunicate con nostros <a href="../envios.php">AQUÍ</a> </small>
        
        </div>';
    }
    if($_GET['collection_status']==="in_process" && $_GET['payment_type']==="credit_card"){

      echo '<div class="bg-light p-3">Pago en proceso , 
      una vez se apruebe tu pago podras rastrear tu envio  <a href="../envios.php">AQUÍ</a><br><hr>

      Recuerda que mercado pago te enviara al correo todo el proceso de la compra<br>


      <small>Si tienes algún problema con tu pago comunicate con nostros <a href="../envios.php">AQUÍ</a> </small>
      
      </div>';
  }


?>

</div>


  <script src="../librerias/jquery/jquery-3.5.1.js"></script>
  <script src="../librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="../librerias/icons/js/all.js"></script>
  <script src="../js/navigation2.js"></script>
    
</body>
</html>