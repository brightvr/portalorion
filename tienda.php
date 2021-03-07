<?php

  ini_set('display_errors',1);
  ini_set('display_startup_errors',1);
  error_reporting(E_ALL);



  session_start();
  require_once 'conexion.php';

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

  $consult= "select * from productos order by rand() limit 20";

  $query=mysqli_query($miconexion->Conectando(),$consult);

  $allProduct=null;

  while($res=mysqli_fetch_assoc($query)){

    $allProduct[]=$res;

  }

  



  $consult2= "select * from productos limit 20";

  $query3=mysqli_query($miconexion->Conectando(),$consult2);

  $allProduct2=null;

  while($res3=mysqli_fetch_assoc($query3)){

    $allProduct2[]=$res3;

  }




  $consult4= "select p.id_producto, p.nombre, p.precio, p.img, p.stock from productos p, categorias c, categorias_productos x where x.id_categoria=6 and p.id_producto=x.id_producto  limit 30";

  $query4=mysqli_query($miconexion->Conectando(),$consult4);

  $LlegaHoy=null;

  while($res4=mysqli_fetch_assoc($query4)){

    $LlegaHoy[]=$res4;

  }





  $consult4= "select p.id_producto, p.nombre, p.precio, p.img, p.stock from productos p, categorias c, categorias_productos x where c.nombre='Supermercado' and x.id_categoria=27 and p.id_producto=x.id_producto";

  $query4=mysqli_query($miconexion->Conectando(),$consult4);

  $supermercado=null;

  while($res4=mysqli_fetch_assoc($query4)){

    $supermercado[]=$res4;

  }





  $miconsulta= "select * from categorias order by nombre ASC";

  $query2 = mysqli_query($miconexion->Conectando(),$miconsulta);

  $category=null;

  while($res2= mysqli_fetch_assoc($query2)){

    $category[]=$res2;

  }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/tienda.css">

</head>
<body>

<?php

require 'componentes-interfaces/nav.php';

?>
  <div class="menu-apps">

        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-house-user"></i></div>
        <div class=" vinculo iconos-menu-escogido" href="#"><i class="fas fa-store"></i></div>
        <div class=" vinculo iconos-menu" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-truck"></i></div>
      </div>
  <br>


  <!--<div class="alert fondo-verde d-flex justify-content-center"><h1>TIENDA</h1></div>-->
  
  <a href="categoria.php?categoria=Todo"><img class="contra-entrega" src="api/assets/img/banner-tienda.gif" alt=""></a>
  <br> 

  
  <?php
 //var_dump($_SESSION['user']);

    if(isset($_SESSION['user'])){

    

      echo '
      <br>
        <div style="width:90%;margin-left:5%;" class="p-2  d-flex justify-content-center">

        <div style="width:100%;color:white; background:green; box-shadow:5px 5px 7px black; border-radius:6px;" class="carrito  ">
        <p style="font-size:22px" class="m-3 p-2"><span style="font-size:22px; color:white;"><i class="fas fa-cart-plus"></i></span> Mi carrito   <span style="margin-left:35px; color:black; font-size:32px;"><i class="fas fa-boxes"></i></span></p>
        <hr class="elcarrito d-none"> 
        <p class="m-3 elcarrito d-none"><small>'.$_SESSION['user'][0]['nombre'].', crea paquetes de hasta 30 productos y paga un solo envío</small></p>
        <hr class="elcarrito d-none">
        <a href="carrito.php" style="width:80%; box-shadow:3px 3px 4px black; margin-left:10%;" class="d-none elcarrito btn btn-light btn-block mb-4"><h4>VER CARRITO</h4></a>
        </div>
        </div>

        
  

      ';
    }

  ?>
  <!--
  <div class="cont-buscador  bg-light">
    <div class="fondo-verde d-flex justify-content-center"><h4>¿Que estás buscando?</h4></div>
    <br>
    <form class="mibuscador" method="POST" action="tienda.php" >
      <input name="buscar" class="form-control mr-sm-2 buscador" type="search" placeholder="Buscar producto" aria-label="Search"><br>
      <button class=" btn-success btn-block my-2 " type="submit"><h3>Buscar producto</h3></button>
    </form>
    <br>
  </div>-->

  <br>
<hr>
<br>

<div class="fondo-verde2 p-1 d-flex justify-content-center"><h3 class="text-light">Llega hoy mismo</h3></div>
<div class="fondo-verde2 p-1 d-flex justify-content-center"><small class="text-light">*Compras realizadas en Bogotá antes de las 2 p.m.</small></div>
    <div class="container d-flex flex-wrap justify-content-center p-1" style="width: 100%;height:450px;overflow-y:scroll;">
    <?php

    if($LlegaHoy===null){

      var_dump('No hay producos disponibles');
    
    }else{

      for($i=0;$i<count($LlegaHoy);$i++){

        echo '

        <a style="text-decoration:none;color:black;" href="producto.php?id='.$LlegaHoy[$i]['id_producto'].'"><div class=" card m-2" style="width: 10rem;  box-shadow:3px 3px 4px black;">
        <img src="'.$LlegaHoy[$i]['img'].'" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">'.$LlegaHoy[$i]['nombre'].'</p>
          <hr>
          <p class="card-text"><h6>$ '.number_format(floatval($LlegaHoy[$i]['precio']),0,'.',',').' pesos </h6></p>
        </div>
       </div></a>
  
        
        ';
  
      }

      }

?>
</div>


 

   
  
  <br>
  <hr>
  <br>
  <div class="fondo-verde2 p-3 d-flex justify-content-center"><h3 class="text-light">Productos destacados</h3></div>
    <div class="container d-flex flex-wrap justify-content-center p-1" style="width: 100%;height:450px;overflow-y:scroll;">
    <?php

    if($allProduct===null){

      var_dump('No hay producos disponibles');
    
    }else{

      for($i=0;$i<count($allProduct);$i++){

        echo '

        <a style="text-decoration:none;color:black;" href="producto.php?id='.$allProduct[$i]['id_producto'].'"><div class=" card m-2" style="width: 10rem;  box-shadow:3px 3px 4px black;">
        <img src="'.$allProduct[$i]['img'].'" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">'.$allProduct[$i]['nombre'].'</p>
          <hr>
          <p class="card-text"><h6>$ '.number_format(floatval($allProduct[$i]['precio']),0,'.',',').' pesos </h6></p>
        </div>
       </div></a>
  
        
        ';
  
      }

      }



    ?>
    </div>



    <br>
  <hr>
  <br>



  <div class="fondo-verde2 p-1 d-flex justify-content-center"><h3 class="text-light">Supermercdo</h3></div>
  <div class="fondo-verde2 p-1 d-flex justify-content-center"><small class="text-light">*Llega hoy comprando antes de las 2 p. m.</small></div>
  <div class="fondo-verde2 p-1 d-flex justify-content-center"><small class="text-light">*Servicio disponible en Bogotá unicmente</small></div>
    <div class="container d-flex flex-wrap justify-content-center p-1" style="width: 100%;height:450px;overflow-y:scroll;">
    <?php

    if($supermercado===null){

      var_dump('No hay producos disponibles');
    
    }else{

      for($i=0;$i<count($supermercado);$i++){

        echo '

        <a style="text-decoration:none;color:black;" href="producto.php?id='.$supermercado[$i]['id_producto'].'"><div class=" card m-2" style="width: 10rem;  box-shadow:3px 3px 4px black;">
        <img src="'.$supermercado[$i]['img'].'" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">'.$supermercado[$i]['nombre'].'</p>
          <hr>
          <p class="card-text"><h6>$ '.number_format(floatval($supermercado[$i]['precio']),0,'.',',').' pesos </h6></p>
        </div>
       </div></a>
  
        
        ';
  
      }

      }

?>
</div>







  <br>
  <hr>
  <br>
 



  <div class="fondo-verde2 p-3 d-flex justify-content-center"><h3 class="text-light">PRODUCTOS 10% OFF</h3></div>
    <div class="container d-flex flex-wrap justify-content-center p-1" style="width: 100%;height:450px;overflow-y:scroll;">
    <?php

    if($allProduct2===null){

      var_dump('No hay producos disponibles');
    
    }else{

      for($i=0;$i<count($allProduct2);$i++){

        echo '

        <a style="text-decoration:none;color:black;" href="producto.php?id='.$allProduct2[$i]['id_producto'].'"><div class=" card m-2" style="width: 10rem;  box-shadow:3px 3px 4px black;">
        <img src="'.$allProduct2[$i]['img'].'" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">'.$allProduct2[$i]['nombre'].'</p>
          <hr>
          <p class="card-text"><h6>$ '.number_format(floatval($allProduct2[$i]['precio']),0,'.',',').' pesos </h6></p>
        </div>
       </div></a>
  
        
        ';
  
      }

      }



    ?>
    </div>




  <br>
  <hr>
  <br>
  <div  style="width:90%;margin-left:5%;box-shadow:2px 2px 5px black;" class="fondo-verde2 p-3 d-flex justify-content-center"><h3 class="text-light">Las mejores categorias</h3></div>
  
  <div style="width:90%;margin-left:5%;box-shadow:2px 2px 5px black;" class="container bg-light p-4">
  <input name="buscar" class="form-control mr-sm-2 buscador-categorias" type="search" placeholder="Buscar categoria" aria-label="Search"><br>
  <button class="buscar-categoria btn-success btn-block my-2 "><h3>Buscar categoria</h3></button>
  <button class="all-category btn-danger btn-block my-2 d-none"><h3>Todas las categorias</h3></button>
  </div>


  <div class="cont-categorias p-2 container d-flex flex-wrap justify-content-center">


    <?php 

    //var_dump($category[0]['card']);
    for($f=0; $f<count($category);$f++){

      
      echo '


      <div class=" p-2  pt-5">
        <div style=" width: 300px; box-shadow:5px 5px 8px black;" class="titulo bg-dark text-light d-flex justify-content-center p-2"><h5>'.$category[$f]['nombre'].'</h5></div>
      <a href="categoria.php?categoria='.$category[$f]['nombre'].'">  <img  src="'.$category[$f]['card'].'" alt="" style="box-shadow:5px 5px 8px black; background:white; width: 300px; height:150px;"></a>
      </div>
      
      ';


    }



    ?>

  </div>

  <br>
  
 


 
 




</div>
<?php

require_once 'footer.php';

?>

    
    
    <script src="librerias/jquery/jquery-3.5.1.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>
    <script src="js/navigation.js"></script>
    <!--<script src="js/PrintCards.js"></script>-->
    <script src="js/tienda.js"></script>
    <?php

if(!isset($_SESSION['user'])){

  echo '<script src="js/menuuser.js"></script>';

}else{

  echo '<script src="js/user.js"></script>';

}



?>
  </body>
  </html>
