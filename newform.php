<?php

if(!isset($_GET['pago'])){

    header('Location:tienda.php');
}

session_start();

if(!isset($_SESSION['user'])){

    header('Location:index.php');
}

   // var_dump($_SESSION);

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


</head>
<body>

<?php

require 'componentes-interfaces/nav.php';

?>
  <div class="menu-apps">

        <div  class="vinculo iconos-menu " href="#"><i class="fas fa-house-user"></i></div>
        <div  class="vinculo iconos-menu" href="#"><i class="fas fa-store"></i></div>
        <div class="vinculo iconos-menu" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div  class="vinculo iconos-menu-escogido " href="#"><i class="fas fa-truck"></i></div>
      </div>
  <br>

  <div class="container">
      
      <a href="producto.php?id=<?php echo $_SESSION['venta']['id_producto'] ?>" class="btn btn-success"><h3><img style="width:80px;" src="<?php echo $_SESSION['venta']['img'] ?>" class="img-ubicacion">  /  <i class="fas fa-arrow-left"></i> Producto</h3></a>

    </div>

      <br>
      <div class="fondo-verde p-3 d-flex justify-content-center"><h3 class="bg-light p-2">TU COMPRA</h3></div>

      <div class="fondo-verde  p-2">

      <h5 class="bg-light p-2"> <?php echo $_SESSION['venta']['producto'] ?> <img style="width: 70px; height:60px;" src="<?php  echo $_SESSION['venta']['img'] ?>"></h5>
      <h5 class="bg-light p-2"> Productos: $ <?php echo number_format( floatval($_SESSION['venta']['subtotal']), 0, ".", ",") ?> pesos cop</h5>
      <h5 class="bg-light p-2"> Envio: $ <?php echo number_format( floatval($_SESSION['venta']['envio']), 0, ".", ",") ?> pesos cop</h4>
      <h5 class="bg-light p-2"> Total a Pagar: $ <?php echo number_format( floatval($_SESSION['venta']['total']), 0, ".", ",") ?> pesos cop</h4>

      </div>
      <hr>
      <?php



      if($_SESSION['user'][0]['barrio_localidad']!=="" &&
        $_SESSION['user'][0]['direccion']!=="" &&
        $_SESSION['user'][0]['telefono']!==""){



            echo '
            
            <div class="container">
            <div class="card" style="width: 97%; box-shadow:5px 5px 7px black;">
        <div class="card-header" style="background:#1D8A1E;color:white;">
          <h5>Formulario automatico COMPLETO</h5><br>
          <small>
          Simplemente haz click en pagar
          </small><br>
          <small>Para alterar estos cambos ve a tu perfil de usuario</small>
        </div>
        <form class=" p-3" action="'.$path.'" method="POST">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-center">
          <h5>Datos del destinatario</h5>
          </li>
          <li class="list-group-item">
          <label>Nombre :</label><br>
          <input type="text" name="nombre-cliente" value="'.$_SESSION["user"][0]["nombre"].'" readonly required>
          </li>
          <li class="list-group-item">
          <label>Numero de contacto : </label><br>
          <input type="text"  name="celular-cliente"  value="'.$_SESSION["user"][0]["telefono"].'" readonly required>
          </li>
          <li class="list-group-item">
          <label>Correo electronico:</label><br>
          <input name="correo-cliente" type="text" value="'.$_SESSION["user"][0]["correo"].'" readonly required>
          </li> 
          <li class="list-group-item">
          <label>Ciudad:</label><br>
          <input type="text" name="ciudad" value="'.$_SESSION["user"][0]["ciudad"].'" readonly required>
          </li> 
          <li class="list-group-item">
          <label>Barrio/Localidad:</label><br>
          <input type="text" name="barrio-localidad" value="'.$_SESSION["user"][0]["barrio_localidad"].'" readonly required>
          </li> 
          <li class="list-group-item">
          <label>Direccion exacta:</label><br>
          <input type="text" name="direccion" value="'.$_SESSION["user"][0]["direccion"].'" readonly required>
          <input class="d-none" name="metodo-pago" value="'.$_GET['pago'].'">
          </li> 
          </ul>
        <hr>
        <input class="d-none" type="text"  name="name-product" value="'.$_SESSION['venta']['producto'].'">
        <input class="d-none" type="text"  name="cantidad-product" value="'.$_SESSION['venta']['cantidad'].'">
        
        <button class="btn btn-block btn-success"><h3>Pagar '.$_GET['pago'].'<h3></button>
        </form>
      </div>
      </div>
            
            
            
            ';


        }else{

            echo '
            
            
            <div class="container">
            <div class="card" style="width: 97%; box-shadow:5px 5px 7px black;">
        <div class="card-header" style="background:#1D8A1E;color:white;">
          <h5>Formulario automatico</h5><br>
          <small>
          Completalo una UNICA vez y paga con un click
          </small>
        </div>
        <form class=" p-3" action="'.$path.'" method="POST">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-center">
          <h5>Datos del destinatario</h5>
          </li>
          <li class="list-group-item">
          <label>Nombre :</label><br>
          <input type="text" name="nombre-cliente" value="'.$_SESSION["user"][0]["nombre"].'" readonly>
          <br><small>No puedes alterar este campo</small>
          </li>
          <li class="list-group-item">
          <label>Numero de contacto : </label><br>
          <input type="text"  name="celular-cliente" required>
          </li>
          <li class="list-group-item">
          <label>Correo electronico:</label><br>
          <input name="correo-cliente" type="text" value="'.$_SESSION["user"][0]["correo"].'" readonly>
          <br><small>No puedes alterar este campo</small>
          </li> 
          <li class="list-group-item">
          <label>Ciudad:</label><br>
          <input type="text" name="ciudad" value="'.$_SESSION["user"][0]["ciudad"].'" readonly>
          <br><small>No puedes alterar este campo</small>
          </li> 
          <li class="list-group-item">
          <label>Barrio/Localidad:</label><br>
          <input type="text" name="barrio-localidad" required>
          </li> 
          <li class="list-group-item">
          <label>Direccion exacta:</label><br>
          <input type="text" name="direccion" required>
          <input class="d-none" name="metodo-pago" value="'.$_GET['pago'].'">
          </li> 
          </ul>
        <hr>
        <input class="d-none" type="text"  name="name-product" value="'.$_SESSION['venta']['producto'].'">
        <input class="d-none" type="text"  name="cantidad-product" value="'.$_SESSION['venta']['cantidad'].'">
        <button class="btn btn-block btn-success"><h3>Pagar '.$_GET['pago'].'</h3></button>
        </form>
      </div>
      </div>
            
            ';
            
        }

        echo '<br><br>';
        if($_GET['pago']==="contra-entrega"){

          $path="usuarios/comprausuario.php";

            echo '
            
            <div class="fondo-verde p-3">
            <div class="bg-light p-2">
             <h5> Recuerda que si el domiciliario no se puede contactar contigo tu 
              pedido sera <strong style="color:red;">CANCELADO</strong>, debes estar pendiente del numero de contacto que pongas en el formulario.</h5>
              <br>
              <h5>La llamada de confirmacion se realiza entre 10 y 15 mintos despues de hacer efectiva la compra </h5>
            </div>
          </div>
          <br>
          
            
            
            ';
        }else{

          $path="mercadopago2.php";

            echo '
            
            <div class="bg-light p-3">
            <h5>Recuerda que para poder pagar debes ser mayor de edad, 
            mercado pago te pedira tu numero de identificacion (cédula de ciudadania)
            para verfificar que seas <strong>mayor de edad </strong>
            </h5>
            </div>
            <br>
            
            ';
        }

      ?>





  <?php

   echo ' <script src="librerias/jquery/jquery-3.5.1.js"></script>';

  ?>
  <br>

  <?php

require_once 'footer.php';

?>

    
  <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="librerias/icons/js/all.js"></script>
  <script src="js/navigation.js"></script>
  <script src="js/index.js"></script> 

  <?php

    if(!isset($_SESSION['user'])){

      echo '<script src="js/menuuser.js"></script>';

    }else{

      echo '<script src="js/user.js"></script>';

    }

   
  ?>
  
  </body>
  </html>