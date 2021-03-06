<?php

require_once 'conexion.php';
session_start();

if(!isset($_SESSION['user'])){

    header('Location:index.php?response=Opps  al parecer no eres usuario registrado');
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>


    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">

</head>
<body>
<?php

    require 'componentes-interfaces/nav.php';

?>
  <div class="menu-apps">

        <div  class="vinculo iconos-menu " href="#"><i class="fas fa-house-user"></i></div>
        <div  class="vinculo iconos-menu" href="#"><i class="fas fa-store"></i></div>
        <div class="vinculo iconos-menu" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div  class="vinculo iconos-menu " href="#"><i class="fas fa-truck"></i></div>
      </div>
  <br>

  <div class="d-none pantalla-carrito" style="position:fixed;width:100%;height:100%;overflow-y:scroll;background:white;margin-top:-25px;">ff</div>
  <div class="d-none pantalla-buscar" style="position:absolute;width:100%;height:100%;overflow-y:scroll;background:black;">ff</div>





  <div class="container d-flex justify-content-between">

    <div style="box-shadow:2px 2px 5px black;" class="btn btn-warning abrir-carrito">Ver carrito <i class="fas fa-cart-plus"></i></div>
    <div style="box-shadow:2px 2px 5px black;" class="btn btn-success  ">Buscar producto <i class="fas fa-search-location"></i></div>  

  </div>
<br>
  <hr style="width:80%;margin-left:10%;">
<br>
  <div style="color:grey;background:white;width:80%;margin-left:10%;box-shadow:2px 2px 6px  black;border-radius:5px;" class=" p-2">
  
    <h4 class=" container d-flex justify-content-center">Mi carrito</h4>
    <small class="  container d-flex justify-content-center"><li>Agrega hasta 30 productos y paga un solo envío</li></small>
  
  </div>

<br><br>

<div class="contenedor-principal d-flex">

  <div style="width:49%;margin-right:1%;height:500px;background:white;" class="d-block">

    <div class="d-flex justify-content-center fondo-verde2 p-2 text-light">Categorias</div>
    <div  class="contenedor-categorias" style="width:100%;overflow-y:scroll;height:450px;"></div>

  </div>
  <div style="width:49%;margin-left:1%;height:500px;background:white;" class="d-block">

    <div class="d-flex justify-content-center fondo-verde2 p-2 text-light">Productos</div>
    <div  class="contenedor-productos" style="width:100%;overflow-y:scroll;height:450px;"></div>
  </div>

</div>

<br><hr><br>

<div style="width:90%;margin-left:5%;border-radius:5px;box-shadow:2px 2px 8px black;" class="fondo-verde2 text-light  container p-3">
  <div class="d-flex">

   Tienes  <strong class=" ml-1 mr-1"> 10 </strong>  productos en el carrito

  </div>  

  <hr>
  <div class="d-flex">

    Envío : $ 50.000 pesos

  </div>  

  <hr>

  <div class="d-flex">

    Total a pagar : $ 50.000 pesos

  </div>

  <hr>

  <div class="btn btn-dark btn-block abrir-carrito">Ver Carrito <i class="fas fa-cart-plus"></i></div>  
</div>

<br>










<?php

    require_once 'footer.php';

?>

    
    
    <script src="librerias/jquery/jquery-3.5.1.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/carrito.js"></script>
<?php

    if(!isset($_SESSION['user'])){

    echo '<script src="js/menuuser.js"></script>';

    }else{

    echo '<script src="js/user.js"></script>';

    }
?>
</body>
</html>