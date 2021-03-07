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
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portal Orion</title>

  <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="librerias/icons/css/all.css">
  <link rel="stylesheet" href="css/head.css">
  <link rel="stylesheet" href="css/index.css">

</head>
<body>



<!-- btn messenger-->

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="104358894638030"
  theme_color="#67b868"
  logged_in_greeting="Hola, Somos Portal Orion tienda virtual, ¿en que te podemos ayudar?"
  logged_out_greeting="Hola, Somos Portal Orion tienda virtual, ¿en que te podemos ayudar?">
      </div>

<!-- btn messenger-->




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



<div style="width:90%;height:5%;box-shadow:3px 3px 6px black;" class="card container bg-light p-2">



<form class="p-3" action="usuarios/forget.php" method="POST">
<label>Introduce tu correo :</label><br>
<input type="email" name="email" required><br>
<br>
<label>Metodo de recuperacion :</label><br>
<select name="metodo-recuperacion">

<option value="Llamada">Llamada</option><br>
<option value="Whatsapp">Whatsapp</option><br>
<option value="Correo">correo electronico</option><br>


</select>
<br><br>
<button class="btn btn-danger btn-block">Enviar</button>

</form>
</div>
<br>
<br>

<?php

require_once 'footer.php';

?>

    


<script src="librerias/jquery/jquery-3.5.1.js"></script>
<script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>
    <script src="js/navigation.js"></script>
<script src="js/menuuser.js"></script>



  </body>
  </html>