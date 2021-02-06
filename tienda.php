<?php

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



if(isset($_POST['buscar'])){


  

  $consulta='select * from productos where nombre like "%'.$_POST['buscar'].'%";';


  $query =mysqli_query($miconexion->Conectando(),$consulta);

  $productos=null;

  while($res= mysqli_fetch_assoc($query)){

  $productos[]=$res;

  }

  if($productos===null){

   echo '    <div class="manta">

   <div class="btn-cerrar"><i class="fas fa-window-close"></i></div>
   
   <div class="manta2 alert alert-success d-flex flex-wrap">

   <div class="alert alert-danger"><h2>No se encontraron resultados para "'.$_POST['buscar'].'"</h2></div>

   </div>
   </div>
   ';
  
  }else{


    echo '
    <div class="manta">
    <div class="btn-cerrar"><i class="fas fa-window-close"></i></div>
    <div class="alert alert-success d-flex justify-content-center"><h5>RESULTADOS PARA: " '.$_POST['buscar'].' "</h5></div>
    
    <div class="manta2 alert alert-success d-flex flex-wrap">';


    for($i=0;$i<count($productos);$i++){
  
      echo '
      
      <div class="card" style="width: 22rem;">
      <img src="'.$productos[$i]['img'].'" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">'.$productos[$i]['nombre'].'</h3>
        <p class="card-text"><h4>$ '.$productos[$i]['precio'].' pesos cop</h4></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Stock disponible : '.$productos[$i]['stock'].' </li>
        <li class="list-group-item">'.$productos[$i]['disponibilidad'].' : '.$productos[$i]['stock'].' </li>
        
      </ul>
      <div class="card-body">
        <a href="producto.php?id='.$productos[$i]['id_producto'].'" class="d-flex justify-content-center p-3 btn-success btn-block"><h1>Comprar</h1></a>
      </div>
    </div>
      
      
      ';
    }
  
    echo '</div></div>';


  }


 
}

unset($_POST);




    $miconsulta= "select * from categorias";

    $query2 =mysqli_query($miconexion->Conectando(),$miconsulta);

    $category=null;

    while($res2= mysqli_fetch_assoc($query2)){

     $category[]=$res2;

    }


 ?>

<!DOCTYPE html>
<html lang="en">
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
  
  <img class="contra-entrega" src="api/assets/img/Graphic Design Website Header Template.gif" alt="">
  <br> 

  
  <?php
 //var_dump($_SESSION['user']);

    if(isset($_SESSION['user'])){

    

      echo '
      <br>
        <div class="p-2  container d-flex justify-content-center">

        <div style="color:white; background:green; box-shadow:5px 5px 7px black; border-radius:6px;" class="carrito  ">
        <p style="font-size:22px" class="m-3 p-2"><span style="font-size:22px; color:white;"><i class="fas fa-cart-plus"></i></span> Mi carrito(vacío)    <span style="margin-left:35px; color:black; font-size:32px;"><i class="fas fa-boxes"></i></span></p>
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
 
  <div class="fondo-verde p-3 d-flex justify-content-center"><h3>Categorias</h3></div>


  <div class="p-2 container d-flex flex-wrap justify-content-center">


    <?php 

    var_dump($category[0]['card']);
    for($f=0; $f<count($category);$f++){

      
      echo '


      <div class=" p-2  pt-5">
        <div style="width: 350px; box-shadow:5px 5px 8px black;" class="titulo bg-light d-flex justify-content-center p-2">'.$category[$f]['nombre'].'</div>
        <img  src="'.$category[$f]['card'].'" alt="" style="box-shadow:5px 5px 8px black; background:white; width: 350px; height:200px;">
      </div>
      
      ';


    }



    ?>

  </div>

  <br>
  
  <br>

  <div class="category fondo-verde d-flex justify-content-center">
   <h2 class="title-categorias"> Ver Categorias</h2>
  </div>
  <div class="categorias   fondo-verde  p-4 d-none">


  </div>
  <br>
  <hr>
  <br>

  <div id="cont-cards" class="contenedor-cards">

 
 




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