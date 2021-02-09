<?php

session_start();

if(!isset($_SESSION['usuario'])){

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
    <title>Bright</title>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">

</head>
<body>
  <style>

    body{
      background: rgb(238, 236, 236);

    }

    .card{
      box-shadow: 6px 6px 9px black;
    }
  </style>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BRIGHT STUDIO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="bright.php">INICIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ventas.php">VENTAS</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="inventario.php">INVENTARIO</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contabilidad.php">CONTABILIDAD</a>
      </li>

    </ul>
  </div>
</nav>
<br>
<hr>
<br>
<div class="container d-flex justify-content-center flex-wrap">

<div class="card m-2" style="width: 18rem;">
  <img src="assets/ventas.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ventas</h5>
    <p class="card-text">
    Aquí puedes ver el registro completo de las ventas y los clientes<br><br>
    Aquí puedes ver los pedidos pendientes y realizados<br><br>
    Aqui puedes imprimir las etiquetas de los pedidos pendientes
    
    </p>

    <a href="ventas.php" class="btn btn-danger btn-block">Ver aplicación</a>
  </div>
</div>

<div class="card m-2" style="width: 18rem;">
  <img src="assets/inventario.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Inventario</h5>
    <p class="card-text">Aqui puedes manejar el stock de productos, crear, editar y borrar productos</p>
    <a href="inventario.php" class="btn btn-danger btn-block">Ver aplicación</a>
  </div>
</div>
<br>


<div class="card m-2" style="width: 18rem;">
  <img src="assets/contabilidad.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Contabilidad</h5>
    <p class="card-text">Aqui podras manejar la contabilidad de portal orion, base, ganancias, pagos, nomina y más</p>
    <a href="#" class="btn btn-danger btn-block">Ver aplicación</a>
  </div>
</div>
<br>

</div>
<br>
<hr>
<br>

<div class="container">

<div class="btn btn-block btn-danger cerrar-sesion"><h5>Cerrar sesion</h5></div>

<script>

document.querySelector('.cerrar-sesion').addEventListener('click',()=>{

  window.location.href="logout.php";

});

</script>

</div>

<br>
<br>
<hr>
<br>
<br>
<br>


<script src="librerias/jquery/jquery-3.5.1.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>

</body>
</html>