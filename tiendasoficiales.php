<?php


session_start();

if(!isset($_SESSION['user'])){

    header('Location:https://google.com');
    
}


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
    <title>Tiendas oficales</title>
</head>
<body>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">


</head>
<body>

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
 

  <div class="container">
  
    <div class="fondo-verde p-2 d-flex justify-content-center"><h3>Tiendas Oficiales</h3></div>  
  
  </div>
  <br>
  <br>
  <div class="container p-3 bg-light">
  
    <div class="d-flex justify-content-center"><h5>Encuentra diferentes tiendas por tematicas</h5></div>
    <div class="d-flex justify-content-center"><small>

        Las compras en estas tiendas oficiales son respaldadas por Portal Orion
        </small>
        <br>
        </div>
        <div class="d-flex justify-content-center">
        <small>Las tiendas oficiales desarrollan funcionalidades y tematicas
        propias, descubre nuevas experiencias de compra y venta
        </small></div>
    

  </div>
  <hr>
<div class="container p-3">


    <div class="bg-light p-2" style="box-shadow: 6px 6px 7px black; border-radius:8px;">

        <div class="bg-light p-2 d-flex justify-content-around">

        <img style="width:100px" src="api/assets/runalotus/logo-runalotus.png" alt="" srcset="">

        <h3 style="color: rgb(160, 7, 7);" class="mt-4">Runalotus Artesanias</h3>
        </div>
        <br>
        <hr>
        <strong>¡¡Estamos en construccion!!</strong>
        <br>
        <p class="p-2">Conoce un poco mas de la cultura Colombiana y sus raices ancenstrales,
        Si eres artesano vende tus creaciones en Runalotus Artesanias y muestrale al mundo
        nuestra raices, talento u cultura.
        <br>
        Pagina ideal para artesanos y productores Colombianos que desean vender productos en
        el exterior
        </p>
        <br>
        <a href="https://runalotus.com" class="btn btn-block btn-warning">Ver Tienda</a>


    </div>
    <br>
    <hr>
    <br>
    
    <div class="bg-light p-2" style="box-shadow: 6px 6px 7px black;  border-radius:8px;">

        <div class=" d-flex justify-content-around">

        <img style="width:150px" src="api/assets/img/logo-cannabis-shop.png" alt="" srcset="">

        <h3 style="color: green;" class="mt-4">Cannabis Shop</h3>
        
    </div>
    <br>
        <hr>
        <strong>¡¡Estamos en construccion!!</strong>
        <br>
    <p class="p-2">Aprende sobre el cañamo, su uso medicinal y todo el potencial que posee esta planta
    mas alla del tabu existente al respecto del cannabis, Pagina ideal para aquellos que promueven
    el lado positivo del cannabis, extractos de CBD , cremas , semillas, jardineria y mas.
    <br>
    Si eres vendedor o productor de algún producto relacionado, vende en Cannabis Shop, encuentraras una 
    gran comunidad para ofertar tus productos
    </p>
    <br>
    <a href="https://cannabisshop.portalorion.store" class="btn btn-block btn-success">Ver Tienda</a>
        
</div>




  </div>

<br><br>

<?php

require_once 'footer.php';

?>

     
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