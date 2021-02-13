<?php

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

?>
  <div class="menu-apps">

        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-house-user"></i></div>
        <div class=" vinculo iconos-menu-escogido" href="#"><i class="fas fa-store"></i></div>
        <div class=" vinculo iconos-menu" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-truck"></i></div>
      </div>
  <br>

 <div class="container">
        <a href="tienda.php" class="btn btn-success"><i class="fas fa-store"></i> / <i class="fas fa-arrow-left"></i> Tienda </a>
 </div>
 <br>

 <div style="width:90%;margin-left:5% ; box-shadow: 5px 5px 6px black;" class="container bg-light btn-categorias">
 
 <br>
 <div  style="background-image:url(<?php echo $categoriaactual[0]['card'] ?>);background-size:100%"  class=" d-flex justify-content-between">

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
    
        <div style="border-radius:5px;" class="btn  btn-block p-2 btn-success m-2">
        <p class="mr-2">'.$_GET['categoria'].' </p> 

         </div>


        ';



    }else{


        for($i=0;$i<count($subcategorias);$i++){

            echo '
    
            <div style="border-radius:5px;  box-shadow:4px 4px 5px black;" class="  d-flex justify-content-around p-2 btn-success m-2">
            <p style="font-size:20px;" class="mr-2">'.$subcategorias[$i]['nombre'].' </p> 
             </div>
    
    
            ';
    
        }


    }


?>

</div>









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



?>
  </body>
  </html>