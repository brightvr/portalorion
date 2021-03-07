<?php

session_start();
//var_dump($_SESSION);


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



          //___________________________________________________________________________________________________

          require_once 'conexion.php';

    $consulta2='select * from envios';


    $query =mysqli_query($miconexion->Conectando(),$consulta2);

    

    while($res= mysqli_fetch_assoc($query)){

        $envios[]=$res;

    }
 //_________________________________________________________________________________________________________


     //___________________________________________________________________________________________________

     $consulta3='select * from  eviosContraEntrega';


     $query =mysqli_query($miconexion->Conectando(),$consulta3);
 
     
 
     while($res= mysqli_fetch_assoc($query)){
 
         $contraEntrega[]=$res;
 
     }
  //_________________________________________________________________________________________________________


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios</title>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/envios.css">




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

  <img class="rastrear-pedido" src="api/assets/img/banner-envios.gif" alt="">

  <br>

  <br>


  <?php

if(isset($_SESSION['user'])){

 
}

?>


  <br>

  <div style="border-radius:4px;box-shadow:3px 3px 6px black; width:90%;margin-left:5%;" class=" ">

  <div  class="fondo-verde2 text-light p-2 d-flex justify-content-center pt-1 ">
      <h5 class="">Rastreador de pedidos</h5>
      
  </div>
  
  <form  class="p-3 bg-light" action="envios.php" method="post">
  <hr>
  <label>Numero de seguimiento :</label><br>
  <input  placeholder="Ejemplo: a34lff0a8" type="text" name="id_pedido" required>
  <hr>
  <small id="emailHelp" class="form-text text-muted"><li>No incluyas el simbolo "#" en la busqueda</li></small>
  <small id="emailHelp" class="form-text text-muted"><li>El numero de guia lo encuentras en la factura </li></small>
  <br>
  <br>
  <button type="submit" class="btn btn-success btn-block"> <h5> Rastrear <i class="fas fa-search-location"></i></h5></button>
  
 </form>
 </div>

     <?php

     if(isset($_POST['id_pedido'])){

      $consulta4="select * from ventas where id_pedido='".$_POST['id_pedido']."'";


     $query =mysqli_query($miconexion->Conectando(),$consulta4);
 
      
     $Pedido=null;
 
     while($res= mysqli_fetch_assoc($query)){
 
         $Pedido[]=$res;
 
     }

     if($Pedido===null){

      echo '
      <div id="rastreo">
        <br>
        <br>
        <div style="padding:30px;width:100%;height:100vh;background: rgba(0, 0, 0, 0.541);position:absolute;margin-top:-700px;margin-left:0px;">
        <br>
        <br>
        <br><br><br>
        <div class="cerrar btn btn-block btn-danger"><h5>CERRAR</h5></div>
        <div style="" class="container bg-light p-3">
        <h6>
        No se encotraron resultados para "'.$_POST['id_pedido'].'"
        <h6>
        <hr>
        <br>
   
        </div>

      
      </div>
      ';

     }else{

      //var_dump($Pedido);

      if($Pedido[0]['forma_de_pago']==="contra-entrega"){

        $tiempo_estimado="Tiempo estimado de entrega:  12 a 24 horas  ";
      
      }else if($Pedido[0]['ciduad']==="bogota"){

        $tiempo_estimado="Tiempo estimado de entrega: 1 a 3 días";
      
      }else{

        $tiempo_estimado="Tiempo estimado de entrega: 1 a 5 días";
      
      }

      if($Pedido[0]['estado']==="Entregado"){

        $tiempo_estimado="Este pedido ha sido entregado satisfactoriamente";
      }

      echo '   
      <div id="rastreo">
        <br>
        <br>
        <div style="padding:30px;width:100%;height:100vh;background: rgba(0, 0, 0, 0.541);position:absolute;margin-top:-700px;margin-left:0px;">
        <br>
        <br>
        <br><br><br>
        <div class="cerrar btn btn-block btn-danger"><h5>CERRAR</h5></div>
        <div style="" class="container bg-light p-3">
        <h6>
        <p>Nombre destinatario : '.$Pedido[0]['nombre_cliente'].'</p>
        <hr>
        <p>Ciudad destino : '.$Pedido[0]['ciudad'].'</p>
        <hr>
        <p style="color:green;"><i class="fas fa-truck"></i> Estado : '.$Pedido[0]['estado'].'</p>
        <hr>
        <p style="color:green;"><i class="fas fa-truck-loading"></i> '.$tiempo_estimado.'</p>
        <h6>
        <hr>
        <br>
        <a href="">Necesito ayuda con mi pedido</a>
        
        </div>

      
      </div>
      ';

  


     }



     }


     ?>
 
  </div>

<br>
 <br>
 <hr>
 <br>
 <br>
 
 
 <div class=" container fondo-verde2 text-light p-2 d-flex justify-content-center">

 <h2>Tarifas de envíos</h2>
 </div>
<br><br>
<img class="rastrear-pedido" src="api/assets/img/banner-envios-2.gif" alt="">
<br><br>
 <div style="width: 90%; margin-left:5%;box-shadow:3px 3px 6px black;border-radius:5px;" class="bg-light p-3">
 <h6 style="background:black;" class="text-warning pl-2 p-3">ENVÍOS PREMIUM <span style="font-size:25px;"><i class="fas fa-trophy"></i></span></h6>
<hr>
<h6 class="bg-light pl-2 ">PAGAS CUANDO RECIBES EL PRODUCTO</h6>
<hr>
<h6 class="bg-light pl-2">TE LLEGA EN 24 HORAS </h6>
<hr>
<h6 class=" pl-2 p-3 text-light bg-success">TARIFA ENVIOS PREMIUM :</h6>


 <div class="card tarifas">
  <ul class="list-group list-group-flush">
   
<?php
 
 for($i=0;$i<count($contraEntrega);$i++){

    $price=number_format( floatval($contraEntrega[$i]['precio3kg']), 0, '.', ',');

    echo '
    <li class="list-group-item">'.$contraEntrega[$i]['nombre_lugar'].' : $ '.$price.' pesos</li>

    
    ';
 }


 ?>
  </ul>
</div>
</div>



<br>
 <br>
<hr>
<br><br>

<img class="rastrear-pedido" src="api/assets/img/banner-envios-3.gif" alt="">
<br>
<br>
<div style="width: 90%; margin-left:5%;box-shadow:3px 3px 6px black;border-radius:5px;" class="bg-light p-3">
 <h6 style="background:black;" class="text-warning pl-2  p-3">ENVIOS EXPRESS <span style="font-size:25px; "><i class="fas fa-award"></i></span> </h6>
<hr>
<h6 class="bg-light pl-2 ">PAGO SEGURO USANDO MERCADOPAGO</h6>
<hr>
<h6 class="bg-light pl-2">ENVIOS A TRAVES DE LAS MEJORES EMPRESAS DE MENSAJERIA<br><br>
<a href="#">-Interrapidisimo</a><br>
<a href="#">-Servientrega</a><br>
<a href="#">-Coordinadora</a><br>
</h6>
<hr>
<h6 class="bg-light pl-2 ">ENVIOS A TODA COLOMBIA</h6>
<hr>
<h6 class=" pl-2 p-3 text-light bg-success">TARIFA ENVIOS EXPRESS :</h6>


 <div class="card tarifas">
  <ul class="list-group list-group-flush">
   
<?php
 
 for($i=0;$i<count($envios);$i++){

    $price=number_format( floatval($envios[$i]['precio3kg']), 0, '.', ',');
    echo '
    <li class="list-group-item">'.$envios[$i]['nombre_lugar'].' : $ '.$price.' pesos</li>

    
    ';
 }


 ?>
  </ul>
</div>
</div>

<br>
<hr>
<br>



<div class="container fondo-verde2 text-light d-flex justify-content-center p-2">
    <h3>Información importante</h3>
</div>
<br>
<div class="container">
    <div style="box-shadow:3px 3px 6px black;" class="bg-light p-3">
        Los enviós en portal orion cuentan con garantia por 
        perdidas o daños del producto, recuerda que el costo del domicilio 
        sin pago contra entrega
         incluye un deposito de seguridad y proteccion para tus pedidos, el deposito de garantia
          por la distancia mas larga(Amazonas - Guajira) es de  $2000 pesos cop aproximadamente,nunca te cobramos mas de $2500 pesos, consulta nuestros términos y condiciones 
        <a href="terminos.php">aquí.</a>
        </div>
</div>
<br>
<div class="container">
    <div style="box-shadow:3px 3px 6px black;" class="bg-light p-3">
      
    El costo de los envios de cualquier indole los determina directamente Portal Orion, 
    nos reservamos el derecho de cobro para los envios, este costo se calcula, segun la distancia,
    seguridad y facilidad de acceso al lugar de destino, consulta nuestros términos y condiciones 
        <a href="terminos.php">aquí.</a>
        </div>
</div>
<br>


<?php

require_once 'footer.php';

?>

    
  <script src="librerias/jquery/jquery-3.5.1.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="librerias/icons/js/all.js"></script>
  <script src="js/navigation.js"></script>
  <script>

  $('.cerrar').on('click',function(){

    $('#rastreo').remove();

  });


  </script>

  <?php

if(!isset($_SESSION['user'])){

  echo '<script src="js/menuuser.js"></script>';

}else{

  echo '<script src="js/user.js"></script>';

}

if(isset($_POST['id_pedido'])){

  unset($_POST['id_pedido']);

}


?>
</body>
</html>