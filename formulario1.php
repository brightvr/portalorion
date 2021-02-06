<?php

session_start();

if(isset($_SESSION['user'])){

  header('Location:newform.php');
}

if(!isset($_SESSION['venta'])){

  header('Location:https://google.com');
}

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

<?php

require 'componentes-interfaces/nav.php';

?>
  <div class="menu-apps">

        <div  class="vinculo iconos-menu " ><i class="fas fa-house-user"></i></div>
        <div  class="vinculo iconos-menu" ><i class="fas fa-store"></i></div>
        <div class="vinculo iconos-menu" ><i class="fas fa-money-check-alt"></i></div>
        <div  class="vinculo iconos-menu-escogido " ><i class="fas fa-truck"></i></div>
      </div>
  <br>


  <div class="container">
      
      <a href="producto.php?id=<?php echo $_SESSION['venta']['id_producto'] ?>" class="btn btn-success"><h3><img style="width:80px;" src="<?php echo $_SESSION['venta']['img'] ?>" class="img-ubicacion">  /  <i class="fas fa-arrow-left"></i> Producto</h3></a>

    </div>

<br>
<div class="fondo-verde p-3 d-flex justify-content-center"><h3 class="bg-light p-2">TU COMPRA</h3></div>



<div class="fondo-verde  p-2">

<h5 class="bg-light p-2"> <?php echo $_SESSION['venta']['producto'] ?> <img style="width: 70px; height:60px;" src="<?php  echo $_SESSION['venta']['img'] ?>"></h5>
<h5 class="bg-light p-2"> Productos: $ <?php echo number_format( floatval($_SESSION['venta']['subtotal']), 0, ".", ",") ?> pesos cop</h5>
<h5 class="bg-light p-2"> Envio: $ <?php echo number_format( floatval($_SESSION['venta']['envio']), 0, ".", ",") ?> pesos cop</h4>
<h5 class="bg-light p-2"> Total a Pagar: $ <?php echo number_format( floatval($_SESSION['venta']['total']), 0, ".", ",") ?> pesos cop</h4>

</div>
<hr>
<div class="fondo-verde  d-flex justify-content-center"><h5 style="box-shadow: 4px 4px 6px black;" class="bg-light p-2"><strong>FORMA DE PAGO: CONTRA-ENTREGA</strong></h5></div>

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
  <input name="ciudad-cliente" value="Bogotá/Municpios aledaños" type="text" required readonly>
  <br>
  <br>
  <label for="">Barrio/localidad :</label><br>
  <input name="barrio-cliente" type="text" value="<?php echo $_SESSION['venta']['destino'] ?>" required readonly>
  <br>
  <br>
  <label for="">Direccion exacta :</label><br>
  <input name="direccion-cliente" type="text" required>
  <br>
  <br>
  
  <input class="d-none" type="text"  name="metodo-pago" value="contra-entrega">
  <input class="d-none" type="text"  name="name-product" value="<?php echo $_SESSION['venta']['producto'] ?>">
  <input class="d-none" type="text"  name="cantidad-product" value="<?php echo $_SESSION['venta']['cantidad'] ?>">
  <button type="submit" class="btn btn-block btn-success"><h1>Finalizar compra</h1></button>



  </form>
</div>

<br>



<div class="fondo-verde p-3">
  <div class="bg-light p-2">
   <h5> Recuerda que si el domiciliario no se puede contactar contigo tu 
    pedido sera <strong style="color:red;">CANCELADO</strong>, debes estar pendiente del numero de contacto que pongas en el formulario.</h5>
    <br>
    <h5>La llamada de confirmacion se realiza entre 10 y 15 mintos despues de hacer efectiva la compra </h5>
  </div>
</div>

<br>


<?php

require_once 'footer.php';

?>

    


<hr>
  <script src="librerias/jquery/jquery-3.5.1.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="librerias/icons/js/all.js"></script>
  <script src="js/navigation.js"></script>
  <?php

if(!isset($_SESSION['user'])){

  echo '<script src="js/menuuser.js"></script>';

}else{

  echo '<script src="js/user.js"></script>';

}



?>
</body>
</html>