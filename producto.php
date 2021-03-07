<?php

session_start();

if(isset($_SESSION['venta-pagos'])){

  unset($_SESSION['venta-pagos']);
}


    if(isset($_GET['id'])){

        require_once 'conexion.php';

        $consulta='select * from productos where id_producto='.$_GET['id'].';';
      
      
        $query =mysqli_query($miconexion->Conectando(),$consulta);
      
        $producto=null;
      
        while($res= mysqli_fetch_assoc($query)){
      
        $producto[]=$res;
      
        }

        if($producto===null){

            var_dump("no se encontro producto");
        }else{

            //var_dump($producto);
        }

    }else{

        header('Location:tienda.php');
    }




        //trayendo data productos

        $consulta3=array('select * from productos order by  rand() limit 15');
  
        $allProducts=null;
     
        for($i=0; $i<count($consulta3);$i++){
     
         $query =mysqli_query($miconexion->Conectando(),$consulta3[$i]);
     
         while($res= mysqli_fetch_assoc($query)){
       
             $allProducts[]=$res;
            
              }
     
        }






    //trayendo data envios

    $consulta2=array('select * from eviosContraEntrega','select * from envios');
  
   $envios=null;

   for($i=0; $i<count($consulta2);$i++){

    $query =mysqli_query($miconexion->Conectando(),$consulta2[$i]);

    while($res= mysqli_fetch_assoc($query)){
  
        $envios[]=$res;
       
         }

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" itemprop="image" content="<?php echo $producto[0]['img'] ?>">
    <meta property="og:image"  content="<?php echo $producto[0]['nombre'] ?>">
    <title><?php echo $producto[0]['nombre'] ?></title>
</head>
<body>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/producto.css">
    <script src="librerias/jquery/jquery-3.5.1.js"></script>


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

<a href="https://api.whatsapp.com/send?phone=573192091708&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20desde%20whatsapp" style="box-shadow:2px 2px 4px black;position: fixed;z-index:99999999999999999999999999999999999999999999999;margin-top:85vh;font-size:35px;border-radius:50%;padding-bottom:5px;" class="btn btn-success "><i class="fab fa-whatsapp"></i></a>
<span  style="position: fixed;z-index:99999999999999999999999999999999999999999999999;margin-top:94vh;"><samll class="p-2" style="box-shadow:0px 0px 6px black;background:white;color:grey;">Comprar desde whatsapp</small>
</div>
<!-- btn whatsapp-->




<?php

require 'componentes-interfaces/nav.php';


if(isset($_SESSION['user'])){

  $usuario="cliente";

}else{

  $usuario="desconocido";

}

?>

<input class="d-none type-user" type="text" value="<?php echo $usuario ?>">
  <div class="menu-apps">

        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-house-user"></i></div>
        <div class=" vinculo iconos-menu-escogido" href="#"><i class="fas fa-store"></i></div>
        <div class=" vinculo iconos-menu" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-truck"></i></div>
      </div>
      <br>







      <div style="width:100%;height:100vh;background:black;z-index:999999999999;position:fixed;margin-top:-70px;" class="contenedor-msg  d-none p-2">

<div style="width:100%;height:100vh;background:black;z-index:999999999999;position:absolute;" class="contenedor-msg  d-none p-2">

  <div class="d-flex justify-content-end p-2 cart-wrogn"><span style="font-size:30px;color:red;"><i class="fas fa-window-close"></i></span></div>
  <br>
  <div style="width:90%;margin-left:5%;color:grey;border-radius:10px;" class="bg-light p-3">
    <img src="api/assets/img/metodos-pago/oops.png" style="width: 100%;">
    <hr>
    <h6><li id="texto1">Al parecer no eres usuario registrado</li></h6>
    <hr>
    <h6><li id="texto2">Para usar el carrito debes ser usuario registrado</li></h6>


  </div>

</div>

</div>






     

      <div class="container d-flex justify-content-between">
      <?php

      if(!isset($_SESSION['categoria.php']) && !isset($_SESSION['index.php'])){

        echo '<a href="tienda.php" class="btn btn-success"><i class="fas fa-store"></i>  /  <i class="fas fa-arrow-left"></i> Tienda</a>';
        echo '<a href="tienda.php" class="btn btn-warning"> Carrito <i class="fas fa-arrow-right"></i> / <i class="fas fa-cart-plus"></i></a>';


      }

      if(isset($_SESSION['index.php'])){
       
        echo '<a href="index.php" class="btn btn-success"><i class="fas fa-house-user"></i>  /  <i class="fas fa-arrow-left"></i> Inicio</a>';
        echo '<a href="tienda.php" class="btn btn-warning"> Carrito <i class="fas fa-arrow-right"></i> / <i class="fas fa-cart-plus"></i></a>';

        unset($_SESSION['index.php']);

      }

      if(isset($_SESSION['categoria.php'])){

        echo '<a href="'.$_SESSION['categoria.php'][0].'" class="btn btn-success"><img width="50px;" src="'.$_SESSION['categoria.php'][1].'"> /  <i class="fas fa-arrow-left"></i> Regresar</a>';
        echo '<a href="tienda.php" class="btn btn-warning"> Carrito <i class="fas fa-arrow-right"></i> / <i class="fas fa-cart-plus"></i></a>';

        unset($_SESSION['categoria.php']);

      }
      




      ?>
      
      

      </div>
      
      <br><hr style="width: 80%;margin-left:10%;">

     

<br>

<div class="app-mobile">
       
          <div class="bg-light" style="width: 90%;margin-left:5%;box-shadow:3px 3px 6px black;">
          <input class="d-none id-product-1" value="<?php echo $producto[0]['id_producto'] ?>">
          <div class="fondo-verde2 text-light p-3"><h5 class="d-flex justify-content-center"><?php echo $producto[0]['nombre'] ?></h5></div>

          <img class="img-producto" src="<?php echo $producto[0]['img'] ?>" alt="">
    
          <?php

          
        

        $price= number_format( floatval($producto[0]['precio']), 0, '.', ',');

          ?>
        
      
        <hr style="width:90%; margin-left:5%;">
          <div class="container bg-light  ">
          <h4 class="d-flex justify-content-center p-1">$ <?php echo  $price   ?> pesos cop</h4><hr>
          <img style="width: 100%;"  src="api/assets/img/metodos-pago/MEDIOS-DE-PAGO.png" alt="" srcset="">
          </div>
          <hr style="width:90%; margin-left:5%;">
          <form class="bg-light mt-2 p-3 d-block" action="pagos.php" method="post">
          <input type="text" class="d-none" name="id-producto" value="<?php echo $producto[0]['id_producto'] ?>">
          <input type="text" class="d-none" name="comprar" value="1">
          <input type="text" class="d-none" name="nombre-producto" value="<?php echo $producto[0]['nombre'] ?>">
          <input type="number" class="d-none stock" value="<?php echo $producto[0]['stock'] ?>">
        <h6>
        <label class="" for="">Elige una cantidad : </label>
        <div class="d-flex">
         <?php

        if( intval($producto[0]['stock'])===0){

          $min=0;

        }else{
          $min=1;
        }

         ?>
          <div class="btn btn-success mr-1 menos">-</div>
          <input class="cantidad" name="cantidad-producto" type="number" value="<?php echo $min ?>" min="<?php echo $min ?>" max="<?php echo $producto[0]['stock'] ?>">
          <div class="btn btn-success ml-1 mr-1 mas">+</div>
          <div class="pt-2" style="color: grey;"><?php echo '<small>(disponibles: '.$producto[0]['stock'].')</small>' ?></div>
          </div>
          <br>
          <div class="btn btn-warning btn-block add-carrito-principal">Añadir <i class="fas fa-cart-plus"></i></div>
         
          <br>
          <hr>
          <br>
          <label for="">Elige un destino :</label>
          <select class="destino" >

          <?php

          
                if($envios===null){

                    var_dump("fallo al obtener resultados");

                }else{

                    var_dump($envios);

                    for($f=0;$f<count($envios);$f++){

                        echo '<option value="'.$envios[$f]['nombre_lugar'].'">'.$envios[$f]['nombre_lugar'].'</option>';


                    }

                }


          ?>
          </select><br>
          <small style="color: grey;">Veras el costo del envío en la parte de abajo</small>
          <input type="text" name="destino-producto" id="destino-entrega" value="" class="d-none">
          
         
          
          <br>
          <hr>
          <br>
          <div class="envio">

          <span style="color:#FFAA00"><i class="fas fa-trophy"></i>  Envío Premium : </span>
          
          <span style="color: green;" class="price-envio">$ 6,000 pesos </span><br>

          <br> <div><i class="fas fa-hand-holding-usd"></i>  Pagas cuando recibes el producto</div>

          <br> <span style="color: green;"><i class="fas fa-truck"></i>  Te llega en menos de 24 horas</span>


          </div>

          <br>
          <hr>
         <br>
          <p><i class="fas fa-shield-alt"></i> Garantia : <br>
          <br>
           <p><i class="fas fa-calendar-day"></i> 14 días por defectos de fabrica</p>
         
           <p><i class="fas fa-file-alt"></i> Emitimos factura al realizar la compra</p>
         
             <p><i class="fas fa-lock"></i>  Si no es lo que esperabas te devolvemos tu dinero</p>
           </p>
          <br>
          <hr>

          <?php
          

          if( intval($producto[0]['stock'])===0){

            echo '  <div class="btn comprar btn-block"><h1>NO DISPONIBLE</h1></div>';

          }else{


              echo '  <button type="submit" class="btn comprar btn-block"><h1>COMPRAR</h1></button>
              
              <br>
              <hr>
             
              <div class="container">
                <p>Otras formas de compra :</p>
              <div class="d-flex justify-content-center">
              <a href="'.$producto[0]['mercadolibre'].'"><img style="width:90px;height:60px;margin-right:20px;border-radius:6px;box-shadow:2px 2px 5px black;" src="api/assets/img/metodos-pago/mercadolibre.jpg"></a>
              <a href="https://api.whatsapp.com/send?phone=573192091708&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20este%20articulo%20:%20'.$producto[0]['nombre'].'"><img style="width:90px;height:60px;border-radius:6px;box-shadow:2px 2px 5px black;" src="api/assets/img/metodos-pago/what.jpg"></a>
              <img class="telefofono" style="width:90px;height:60px;margin-left:20px;border-radius:6px;box-shadow:2px 2px 5px black;" src="api/assets/img/metodos-pago/telefono.png">


              </div>

              <div style="color:grey" class="pt-2 mt-2 phone d-flex justify content-center"></div>

              </div>
              
              
              ';


          }

          ?>

        
          <br>
          </h6>
          </form>

          
          </div>
        
          <br>


          <div class="container p-3">
          
          <div class="alert bg-light" style="box-shadow:3px 3px 6px black;">
          
          <div class="d-flex justify-content-center"><h4>Descrpicion</h4></div>
          <hr>
          <div><?php echo $producto[0]['descripcion'] ?></div>

          </div>

          </div>




          <br>







          <div class="container">
          <div class=" container bg-light" style="box-shadow: 3px 3px 5px black;">
          <br>
          <div class=" p-2 bg-light container d-flex justify-content-center"><h5>Compras desde Whatsapp</h5></div>

          
          <div class="d-flex justify-content-center">
          <br>
          <h6 >   Atencion a ventas</h6>
          </div>
          
          <hr>

          <div class="bg-light d-block p-4 ">
              <h6>Horarios:</h6>
              <br>
              <h6>Lunes a viernes : 9:00 a.m. - 6:00 p.m.</h6>
              <br>
              <h6>Sabados : 9:00 a.m. - 4:00 p.m.</h6>
              <br>
              <h6>Domingos y Festivos NO HAY ATENCION A VENTAS </h6>

            <hr>

            <br>
            <a href="https://api.whatsapp.com/send?phone=573192091708&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20este%20articulo%20:%20<?php echo $producto[0]['nombre'] ?>" class="btn btn-success btn-block"><h5>ASESOR 1 <i class="fab fa-whatsapp"></i></h5></a>
            <a href="https://api.whatsapp.com/send?phone=573232043948&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20este%20articulo%20:%20<?php echo $producto[0]['nombre'] ?>" class="btn btn-success btn-block"><h5>ASESOR 2 <i class="fab fa-whatsapp"></i></h5></a>
            <a href="https://api.whatsapp.com/send?phone=573228873812&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20este%20articulo%20:%20<?php echo $producto[0]['nombre'] ?>" class="btn btn-success btn-block"><h5>ASESOR 3 <i class="fab fa-whatsapp"></i></h5></a>

            </div>
          
          <hr>
          </div>
          </div>







                
          <br>
          <hr>
          <br>
          <br>

          <div class="fondo-verde2 text-light  d-flex justify-content-center p-3">
              <h3>Más Productos</h3>
          </div>

          <br>
          <br>
          <div class="container  ">
                
                <?php

              //  var_dump($allProducts);

              for($h=0;$h<count($allProducts);$h++){


                echo '
                <input type="text" value="'.$allProducts[$h]['stock'].'" class="d-none stock-1">
                <input class="d-none id-product" value="'.$allProducts[$h]['id_producto'].'">
                <br>
                <div style="width: 95%;margin-left:2%;background:white;box-shadow:4px 4px 10px black;" class="micard">
                    
                      <div class="d-flex">
            
                        <div style="width: 50%; padding-top:50px;" class="d-block "><img style=" width: 100%;;" src="'.$allProducts[$h]['img'].'" alt=""> 
                      
                        </div>
            
                        <div style="width: 50%;" class="d-block p-2 pl-3">
                        <h6 style="margin-left:-128%;" class="pl-4"><strong>'.$allProducts[$h]['nombre'].'</strong></h6>
                        <hr>
                        <h6><strong>$ '.number_format(floatval($allProducts[$h]['precio']),0,'.',',').' pesos</strong></h6>
                        <hr>
                        <div style="margin-left: -6%;"  class="d-flex p-2 ">
            
                            <div class="btn btn-success mr-2 menos-1"><h5 style="margin-top:-2px;">-</h5></div>
                            <input class="cantidad-1" style="width:40px;" type="number" value="0" min="0" max="'.$allProducts[$h]['stock'].'" readonly>
                            <div class="btn btn-success ml-2 mas-1"><h5 style="margin-top:-2px;">+</h5></div>
            
                        </div>
                        </div>
            
                      </div>
            
                      <div class="d-flex p-2">
                      <div style="width: 50%;" class="d-block p-2"> <a href="producto.php?id='.$allProducts[$h]['id_producto'].'" class="btn btn-danger btn-block">Ver producto</a> </div>     
                        <div style=" background: rgba(0, 0, 0, 0.178); width: 1px; height:50px;"></div>
                        <div style="width: 50%;" class="d-block p-2"> <div class="btn btn-warning btn-block add-carrito-1">Añadir <i class="fas fa-cart-plus"></i></div> </div>
                 
                      </div>
                    
                </div>
                <br>
                <hr>
            
          
                    
            
                
                ';



              }



                ?>
          
          </div>



          
    <br>

    <br>




</div>





<?php

require_once 'footer.php';

?>

    

    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/producto.js"></script>
                


   
          
          </div>





</div>





<?php

require_once 'footer.php';

?>

    

    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/producto.js"></script>
    <?php

if(!isset($_SESSION['user'])){

  echo '<script src="js/menuuser.js"></script>';

}else{

  echo '<script src="js/user.js"></script>';

}



?>

  </body>
  </html>