<?php

if(isset($_POST['buscar'])){


  require_once 'conexion.php';

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

  <nav class="navbar navbar-expand-lg navbar-dark fondo-negro d-flex justify-content-between ">
    <a class="navbar-brand" href="index.php"><img class="logo-orion" src="api/assets/img/logo-orion-claro.png" alt=""></a>
    <button class="cont-icon-user" type="button" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icono-user"><i class="fas fa-user"></i></span>
    </button>

  </nav>
  <div class="menu-apps">

        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-house-user"></i></div>
        <div class=" vinculo iconos-menu-escogido" href="#"><i class="fas fa-store"></i></div>
        <div class=" vinculo iconos-menu" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-truck"></i></div>
      </div>
  <br>
 
  <img class="contra-entrega" src="api/assets/img/banner-tienda.gif" alt="">
  <br>
  <br>
  <br>
  <br>
  <div class="alert fondo-verde d-flex justify-content-center"><h1>TIENDA</h1></div>
  <br>
  <br>
  <br>
  <div class="cont-buscador  bg-light">
    <div class="fondo-verde d-flex justify-content-center"><h4>¿Que estás buscando?</h4></div>
    <br>
    <form class="mibuscador" method="POST" action="tienda.php" >
      <input name="buscar" class="form-control mr-sm-2 buscador" type="search" placeholder="Buscar producto" aria-label="Search"><br>
      <button class=" btn-success btn-block my-2 " type="submit"><h3>Buscar producto</h3></button>
    </form>
    <br>
  </div>
   
  <br>
  
  <br>

  <div class="category fondo-verde d-flex justify-content-center">
   <h2 class="title-categorias"> Ver Categorias</h2>
  </div>
  <div class="categorias  fondo-verde  p-2 d-none">


  </div>
  <br>
  <hr>
  <br>

  <div id="cont-cards" class="contenedor-cards">

 
 




</div>
    
    <script src="librerias/jquery/jquery-3.5.1.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/PrintCards.js"></script>
    <script src="js/tienda.js"></script>
  </body>
  </html>