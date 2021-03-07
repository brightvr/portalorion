<?php





if(isset($_GET['response'])){

    echo '
  
      <div  style="width:100%; position:fixed; z-index:9999999999999999;"  class="bg-success respuestas">
      <span class="btn-cerrar" style="font-size:30px; color:red;"><i class="fas fa-window-close"></i></span>
      <div class="container  p-3  text-white d-flex justify-content-center"><h5>'.$_GET['response'].'</h5></div>
      </div>
  
  
  
    ';
  
    echo '
    
    <script>
  
     let btn= document.querySelector(".btn-cerrar");
     btn.addEventListener("click",()=>{
  
  
     
  
      let padre= document.querySelector(".respuestas").parentNode;
      let hijo= document.querySelector(".respuestas")
      padre.removeChild(hijo);
  
    });
  
    </script>
    
    ';
  
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Términos y condiciones</title>
</head>
<body>

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

<a href="https://api.whatsapp.com/send?phone=573192091708&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20desde%20whatsapp" style="box-shadow:2px 2px 4px black;position: fixed;z-index:99999999999999999999999999999999999999999999999;margin-top:85vh;font-size:35px;border-radius:50%;padding-bottom:5spx;" class="btn btn-success "><i class="fab fa-whatsapp"></i></a>
<span  style="position: fixed;z-index:99999999999999999999999999999999999999999999999;margin-top:94vh;"><samll class="p-2" style="box-shadow:0px 0px 6px black;background:white;color:grey;">Comprar desde whatsapp</small>
</div>
<!-- btn whatsapp-->




<?php

require 'componentes-interfaces/nav.php';

?>
  <div class="menu-apps">

        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-house-user"></i></div>
        <div class=" vinculo iconos-menu" href="#"><i class="fas fa-store"></i></div>
        <div class=" vinculo iconos-menu" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-truck"></i></div>
      </div>
  <br>
 


  <div class="container p-4">

    <div class="bg-light p-2">

    <h4>Terminos y condiciones Portal Orion</h4>
    <br>
    <p><h5>Usuarios invitados</h5></p><br>
    <p>
    El usuario que navegue y compre en Portal Orion como invitado
    acepta estos términos y condiciones
    </p><br>
    <p><strong>1.Compras</strong></p>
    <p>
    Los usuarios invitados pueden realizar compras en portal orion y sus tiendas oficiales,
    se excluye la compra de paquetes.<br>
    Portal Orion no se hace responsable por el uso indevido de la paltaforma
    por parte de los usuarios.<br>
    Las compras tienen una garantia de 14 días por fraudes o defectos de fabrica.<br>
    Los fraudes corresponden a productos con publicidad engañosa, y los defectos
    de fabrica corresponden a daños en los productos, recuerda que los productos son fotografeados 
    antes de ser enviados.<br>
    Las compras tienen una garantia por daños de envio de 2 días una vez recibes el producto.<br>
    La garantia por daños de envio abarca situaciones como productos que llegan en mal estado.<br>
    <br><strong>Garantias de compra </strong><br>
    Si la compra cumple con una condicion para hacer valida la garantia,
    se procedera inmediatamente a la  recogida del producto y devolucion del dinero 
    respectivamente, para el caso de Bogotá.<br><br>
     Para el resto del País, el usuario debe enviar de vuelta el pedido, una vez este
    sea recibido, Portal Orion procedera a hacer la devolucion del dinero.<br>
    En caso de devolucion por garantia Portal Orion asume el costo del envio del producto,
    el usuario solo debe esperar la recogida y devolucion del dinero en Bogotá,
    en el resto del pais el usuario simplemente debe reenviar el paquete por la misma transportadora que 
    llego, el costo de la devolucion lo asumira Portal Orion  
    </p><br>
    <p><strong>2.Pagos </strong></p><br>
    <p>Los pagos contra entrega se realizan unicamente en Bogotá y municipios aledaños,
    Portal Orion almacena los datos necesarios para hacer posible el
    pago contra entrega, tus datos son privados, no los compartimos con terceros.<br>
    
    </p>
    <p>Los pagos online se procesan usando mercado pago,
    esto significa que portal orion se excluye de cualquier
    tipo de responsabilidad por problemas en el pago usando mercado pago,recuerda
    que portal orion no guarda registro o informacion del metodo de pago del usuario,
    mercado pago se encarga de hacer seguras las compras online, 
    Sin embargo <strong>Nosotros te cubrimos</strong> si el usuario invitado presenta algun problema al momento del pago
    Portal Orion iniciara una invetigacion al respecto, con el objetivo de
    solucionar cualquier inconveniente. <br>
    <strong>Garantia de pago</strong><br>
    La investigacion por problemas en los pagos tendra una duracion de 8 días, 
    en caso de que el problema con el pago se deba a portal orion, inmediatamente 
    procederemos a devolver tu dinero.

    
     </p>
     <br>
     <p><strong>Envios</strong></p><br>
     <p>Los envios para pago contra entrega
        se  realizan unicamente si portal orion 
        logra establecer comunicacion con el usuario comprador
        en un lapso de 15 a 20 minutos posteriores a la compra.<br>
        Portal Orion se reserva el derecho al cobro para pago contra entrega,
        nuestras tarifas para pago contra entrega se estiman segun la facilidad de acceso 
        seguridad y distancia.<br>
        Portal Orion maneja su propia logistica de envios para pago contra entrega,
        este servicio es fundamental en el optimo desarrollo de la economia digital
        por ende la tarifa de envios para pago contra entrega debe ser justa tanto para
        el usuario como para nuestros mensajeros.<br>
        
        Los pedidos para pago contra entrega  que se agenden  antes del medido día, llegan el mismo día<br>
        Los pedidos para pago contra entrega que se agenden  despues del medio día , llegan entre 24 a 36 horas<br>


     </p>
     <p>
        Los envios que no incluyen pago contra entrega se realizan por cualquier transportadora del pais.<br>
        Portal Orion se reserva el derecho a decidir la transportadora a usar, segun el lugar de destino.<br>
        El costo del envio sin pago contra entrega se calcula haciendo un estimado entre las transportadoras
        Servientrega, Interrapidismo y Envia.<br>
        Portal Orion se reserva el derecho de cobro para el envio sin pago contra entrega.<br>
        Portal Orion tiene una politca de proteccion de envios en la cual se establece
        que el costo del envio tiene un valor agregado de aseguramiento del pedido, este valor
        nunca supera los $ 2.500 pesos cop.<br>
        Protegemos tus pedidos, siempre que compres en portal orion y
        sus tiendas oficiales tus pedidos van asegurados contra perdidas y demoras,
        recuerda que si tu producto no aparece te devolvemos tu dinero.<br>
        Si el envio se extravia o el producto llega en mal estado debido a la transportadora, el usuario
        podra pedir la devolucion del dinero del producto y del envio sin contar el costo del seguro, este 
        costo en ningun caso superara los $ 2.500 pesos cop.<br>
        Portal Orion asume el costo de la devolucion del pedido.<br>
        
     </p><br>
     <p><h5>Usuarios Registrados</h5></p><br>
     <p>Los usuarios registrados estan sujetos a los mismos términos y condiciones d elos usuarios invitados exceptuando:<br>
     
     Los usuarios registrados tienen la opcion de comprar paquetes y pagar un solo envio.<br>
     
     </p>
    </div>
  
  
  </div>


  <br><br>


     
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