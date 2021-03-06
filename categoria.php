<?php

  session_start();

  if(!isset($_GET['categoria'])){

    header('Location:categoria.php?categoria=Todo');
  }

  //  var_dump($_GET['categoria']);

  require_once 'conexion.php';

  $consulta0="select * from  categorias";

 
  $query0=mysqli_query($miconexion->Conectando(),$consulta0);

  while($response=mysqli_fetch_assoc($query0)){

    $categorias[]=$response;
  }

  //var_dump($categoriaactual);





  $consulta="select * from  categorias where nombre='".$_GET['categoria']."'";

 
  $query=mysqli_query($miconexion->Conectando(),$consulta);

  while($response=mysqli_fetch_assoc($query)){

    $categoriaactual[]=$response;
  }

  //var_dump($categoriaactual);






  $consulta2="select * from subcategoria s, categorias_subcategorias c where c.id_categoria='".$categoriaactual[0]['id_categoria']."' and s.id_subcategoria=c.id_subcategoria";

  $query2=mysqli_query($miconexion->Conectando(),$consulta2);

  $subcategorias=null;
  while($response=mysqli_fetch_assoc($query2)){

    $subcategorias[]=$response;
  }

  //var_dump($subcategorias);





?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET['categoria']?> </title>
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
  <div style="width:90%;margin-left:5%;color:grey;;border-radius:10px;" class="bg-light p-3">
   <img src="api/assets/img/metodos-pago/oops.png" style="width: 100%;">
   <hr>
    <h6><li id="texto1">Al parecer no eres usuario registrado</li></h6>
    <hr>
    <h6><li id="texto2">Para usar el carrito debes ser usuario registrado</li></h6>


  </div>

</div>

</div>




 <div class="container d-flex justify-content-between pl-2 pr-2">
        <a href="tienda.php" class="btn btn-success"><i class="fas fa-store"></i> / <i class="fas fa-arrow-left"></i> Tienda </a>
        <a href="carrito.php" class="btn btn-warning">Carrito <i class="fas fa-arrow-right"></i> / <i class="fas fa-cart-plus"></i>  </a>
 </div>
 <br>

 <div style="width:90%;margin-left:5%; box-shadow: 5px 5px 6px black;" class="container bg-light btn-categorias">
 
 <br>
 <div  style="background-image:url(<?php echo $categoriaactual[0]['card'] ?>);background-size:100%;height:174px;"  class=" d-flex justify-content-between">
 <input class="d-none my-category" type="text" value="<?php echo $categoriaactual[0]['id_categoria'] ?>">

 <h3 ><img class="mr-1 d-none" style="width: 300px;" src=""></h3>
 <h1 style="height:50px;width:44px; box-shadow:2px 2px 3px black;" class="p-2  btn-success flecha-categoria "><span style="font-size:30px; position:absolute;margin-left:4px;"><i class="fas fa-angle-down miflecha"></i><i class="fas fa-angle-up d-none miflecha"></i></span></h1>
 
 </div>
 <hr>

 <div class="categorias d-none" style="height:360px; overflow-y:scroll;">
 <?php 

 for($f=0;$f<count($categorias);$f++)
{
    echo '
    
        <a href="categoria.php?categoria='.$categorias[$f]['nombre'].'"  class="d-block ">
        <div style="width:90%; font-size:22px; box-shadow:4px 4px 5px black; " class=" pb-3 p-3 m-2  btn-success btn-block">
        '.$categorias[$f]['nombre'].'  </div>
        <input type="text" class="d-none categoria" value="'.$categorias[$f]['nombre'].'">
        </a>
    
    ';
}
 ?>
 </div>
 
 </div>
<br>
<div class="bg-light container d-flex justify-content-center p-2"><h4>Subcategorias</h4></div>

<div style="overflow-x:scroll;" class="container bg-light p-2  d-flex">

<?php 
    if($subcategorias===null){

                    
        echo '
    
        <div style="border-radius:5px;" class="ver-todo  btn  btn-block p-2 btn-success m-2">
        <p class="mr-2">'.$_GET['categoria'].' </p> 

         </div>


        ';



    }else{

      echo '
      <div style="border-radius:5px;  box-shadow:4px 4px 5px black;" class=" ver-todo  d-flex justify-content-around p-2 btn-success m-2">
        <p style="font-size:20px;" class="mr-2">Ver Todo</p> 
       </div>';


        for($i=0;$i<count($subcategorias);$i++){

            echo '
    
            <div style="border-radius:5px;  box-shadow:4px 4px 5px black;" class=" btn-subcategoria d-flex justify-content-around p-2 btn-success m-2">
            <p style="font-size:20px;" class="mr-2">'.$subcategorias[$i]['nombre'].' </p> 
             </div>
    
    
            ';
    
        }


    }


?>

</div>


<br><br>


<div class="container-cards">
<br>




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
    <script src="js/tienda-categoria.js"></script>

    <?php

if(!isset($_SESSION['user'])){

  echo '<script src="js/menuuser.js"></script>';

}else{

  echo '<script src="js/user.js"></script>';

}

$_SESSION['categoria.php']=[

  'categoria.php?categoria='.$categoriaactual[0]['nombre'],
  $categoriaactual[0]['card'],
  $categoriaactual[0]['nombre']
];

if(isset($_SESSION['index.php'])){

  unset($_SESSION['index.php']);
}

?>
  </body>
  </html>
