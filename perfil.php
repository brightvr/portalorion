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
    <title>Perfil</title>
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
  
    <div class="fondo-verde p-2 d-flex justify-content-center"><h3><?php echo $_SESSION['user'][0]['nombre'] ?></h3></div>  
  
  </div>
  <br>
  <br>
  <div class="container p-3 bg-light">
  
    <div class="d-flex justify-content-center"><h5>Datos de envio</h5></div>
    <div class="d-flex justify-content-center"><small>

        Los datos que pongas aqui los usaremos para enviar tus pedidos

    
    </small></div> 
    <hr>
    <form class="p-2" action="usuarios/updateuser.php" method="POST">

        <label>Nombre  :</label><br>
        <input name="nombre" type="text" value="<?php echo $_SESSION['user'][0]['nombre'] ?>" required>
        <br><br>

        <label>Correo :</label><br>
        <input name="correo" type="text" value="<?php echo $_SESSION['user'][0]['correo'] ?>" required readonly><br>
        <small>Este dato no lo puedes cambiar</small>
        <br><br>

        <label>Ciudad  :</label><br>
        <input name="ciudad" type="text" value="<?php echo $_SESSION['user'][0]['ciudad'] ?>" required>
        <br><br>

        <label>Barrio/Localidad  :</label><br>
        <input name="barrio" type="text" value="<?php echo $_SESSION['user'][0]['barrio_localidad'] ?>" required>
        <br><br>

        <label>Direccion  :</label><br>
        <input name="direccion" type="text" value="<?php echo $_SESSION['user'][0]['direccion'] ?>" required>
        <br><br>

        <label>Numero de contacto :</label><br>
        <input name="telefono" type="text" value="<?php echo $_SESSION['user'][0]['telefono'] ?>" required>
        <br><br>

       <button type="submit" class="btn btn-success btn-block"><h5>Actualizar datos</h5></button>
    
    </form>
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