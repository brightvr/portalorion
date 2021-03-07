<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
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


<!-- btn messenger-->

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="104358894638030"
  theme_color="#67b868"
  logged_in_greeting="Hola, Somos Portal Orion tienda virtual, ¿en que te podemos ayudar?"
  logged_out_greeting="Hola, Somos Portal Orion tienda virtual, ¿en que te podemos ayudar?">
      </div>

<!-- btn messenger-->
<!-- btn whatsapp-->
<div style="position:relative" class="pl-1">

<a href="https://api.whatsapp.com/send?phone=573192091708&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20desde%20whatsapp" style="box-shadow:2px 2px 4px black;position: fixed;z-index:99999999999999999999999999999999999999999999999;margin-top:82vh;font-size:35px;border-radius:50%;padding-bottom:5px;" class="btn btn-success "><i class="fab fa-whatsapp"></i></a>
<span  style="position: fixed;z-index:99999999999999999999999999999999999999999999999;margin-top:91vh;"><samll class="p-2" style="box-shadow:0px 0px 6px black;background:white;color:grey;">Comprar desde whatsapp</small>
</div>
<!-- btn whatsapp-->






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
      
      <a href="pagos.php" class="btn btn-success"><h6><i class="fas fa-money-check-alt"></i>  /  <i class="fas fa-arrow-left"></i> Formas de pago</h6></a>

  </div>

<br>
<br>
<div style="width:90%;box-shadow:3px 3px 6px black;margin-left:5%;" class="fondo-verde2 text-light p-2 d-flex justify-content-center btn-data"><h5>Datos de la compra</h5></div>



<div style="width:90%;box-shadow:3px 3px 6px black;margin-left:5%;" class="bg-light data-pay d-none  p-2 ">

<h6 class="bg-light p-2"> <?php echo $_SESSION['venta']['producto'] ?> <img style="width: 50px; height:40px;" src="<?php  echo $_SESSION['venta']['img'] ?>"></h6><hr>
<h6 class="bg-light p-2"> Productos: $ <?php echo number_format( floatval($_SESSION['venta']['subtotal']), 0, ".", ",") ?> pesos cop</h6><hr>
<h6 class="bg-light p-2"> Envio: $ <?php echo number_format( floatval($_SESSION['venta']['envio']), 0, ".", ",") ?> pesos cop</h6><hr>
<h6 class="bg-light p-2"> Total a Pagar: $ <?php echo number_format( floatval($_SESSION['venta']['total']), 0, ".", ",") ?> pesos cop</h6>

</div>
<br>

<br>
<div style="width:90%;margin-left:5%;box-shadow:3px 3px 6px black;" class="fondo-verde2 p-2 text-light  d-flex justify-content-center"><strong>PAGAS ONLINE</strong></div>

<div style="width:90%;margin-left:5%;box-shadow:3px 3px 6px black;" class="bg-light p-2">
<small class="d-flex justify-content-center" style="color:grey;">Enviar  pedido a :</small>

  <form class="bg-light p-3" action="mercadopago.php" method="POST">

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
  <input name="ciudad-cliente" value="<?php echo $_SESSION['venta']['destino'] ?>" type="text" required readonly>
  <br>
  <br>
  <label for="">Barrio/localidad :</label><br>
  <input name="barrio-cliente" type="text" value="" required >
  <br>
  <br>
  <label for="">Direccion exacta :</label><br>
  <input name="direccion-cliente" type="text" required>
  <br>
  <br>
  <small style="color:grey;">Emitimos factura de garantia </small>
  <br>
  
  <input class="d-none" type="text"  name="metodo-pago" value="contra-entrega">
  <input class="d-none" type="text"  name="name-product" value="<?php echo $_SESSION['venta']['producto'] ?>">
  <input class="d-none" type="text"  name="cantidad-product" value="<?php echo $_SESSION['venta']['cantidad'] ?>">
  <button style="box-shadow:3px 3px 6px black;" type="submit" class="btn btn-block btn-success"><h4>Finalizar compra</h4></button>

<br>

  </form>
</div>
<br><br>
<div  style="width:90%;margin-left:5%;box-shadow:3px 3px 6px black;color:grey;" class="bg-light p-3">
<h6>Recuerda que para poder pagar debes ser mayor de edad, 
mercado pago te pedira tu numero de identificacion   ( cédula de ciudadania )
 para verfificar que seas <strong>mayor de edad </strong>
</h6>
</div>
          



<br>
<hr>

<?php

require_once 'footer.php';

?>

    

  <script src="librerias/jquery/jquery-3.5.1.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="librerias/icons/js/all.js"></script>
  <script src="js/navigation.js"></script>


  <script>

    $('.btn-data').on('click',function(){

      $('.data-pay').toggleClass('d-none');

    });
  
  
  </script>

  <?php

if(!isset($_SESSION['user'])){

  echo '<script src="js/menuuser.js"></script>';

}else{

  echo '<script src="js/user.js"></script>';

}



?>

</body>
</html>