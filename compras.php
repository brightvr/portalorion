<?php


session_start();

if(!isset($_SESSION['user'])){

    header('Location:https://google.com');
    
}

require_once 'conexion.php';

$select ="select * from ventas v, venta_usuario u where v.id_venta=u.id_venta and u.id_usuario=".$_SESSION['user'][0]['id_usuario'];

$query=mysqli_query($miconexion->Conectando(),$select);

$compras=null;

while($response=mysqli_fetch_assoc($query)){

  $compras[]=$response;

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
    <title>Mis compras</title>
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
  
    <div class="fondo-verde2 text-light p-2 d-flex justify-content-center"><h3>Mis Compras</h3></div>  
  
  </div>
  <br>
  <br>
  <div style="color:grey;width:90%;margin-left:5%;box-shadow:2px 2px 5px black" class="bg-light p-3">Recuerda que los pagos pendientes no aparecen registrados en tus compras hasta que sean aprovados</div>
  <br>
  <br>
  <div class="container p-3 bg-light d-flex flex-wrap">



    <?php

   //var_dump($compras);
   if($compras===null){

      echo '<div class="container  p-2"><h6 style="color:grey"><li>Todavia no tienes compras registradas</h6></li></div>';

   }else{

      for($i=0;$i<count($compras);$i++){

        echo '


        <div class="card m-4" style="width: 20rem; box-shadow:5px 5px 9px black;">
        <div class="card-header" style="background: green; color:white;">
          Guia No : '.$compras[$i]['id_pedido'].'
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Producto: '.$compras[$i]['nombre_product'].'</li>
          <li class="list-group-item">Cantidad: '.$compras[$i]['cantidad_product'].'</li>
          <li class="list-group-item">Costo productos: '.$compras[$i]['precio_compra'].'</li>
          <li class="list-group-item">Costo Envios: '.$compras[$i]['precio_envio'].'</li>
          <li class="list-group-item">Forma de pago: '.$compras[$i]['forma_de_pago'].'</li>
          <li class="list-group-item">Estado: '.$compras[$i]['estado'].'</li>
          <li class="list-group-item"> <a href="envios.php?response=Guia numero: '.$compras[$i]['id_pedido'].' " class="btn btn-success btn-block">Rastear Pedido</a></li>
        </ul>
      </div>
        
        ';

      }

   }

 


    ?>
   
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