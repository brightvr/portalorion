<?php

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
    <title>Panel de Administración</title>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">

</head>
<body>

    <nav class="navbar navbar-dark bg-dark">

        <span class="navbar-brand mb-0 h1">Panel de administracion</span>

    </nav>
    <br>
    <hr>
    <br>

    <div class="container">

        <form action="crud/autenticacion/autenticacin.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Correo electronico</label>
              <input name="correo" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">Ingreso exclusivo empleados Portal Orion</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input name="contraseña" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-success"><h4>Ingresar</h4></button>
          </form>
    

    </div>
    


    <script src="librerias/jquery/jquery-3.5.1.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>
</body>
</html>