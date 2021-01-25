<?php

session_start();
//var_dump($_SESSION);


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



          //___________________________________________________________________________________________________

          require_once 'conexion.php';

    $consulta2='select * from envios';


    $query =mysqli_query($miconexion->Conectando(),$consulta2);

    

    while($res= mysqli_fetch_assoc($query)){

        $envios[]=$res;

    }
 //_________________________________________________________________________________________________________


     //___________________________________________________________________________________________________

     $consulta3='select * from  eviosContraEntrega';


     $query =mysqli_query($miconexion->Conectando(),$consulta3);
 
     
 
     while($res= mysqli_fetch_assoc($query)){
 
         $contraEntrega[]=$res;
 
     }
  //_________________________________________________________________________________________________________


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios</title>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/envios.css">




</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fondo-negro  d-flex justify-content-between">
    <a class="navbar-brand" href="index.php"><img class="logo-orion" src="api/assets/img/logo-orion-claro.png" alt=""></a>
    <button class="cont-icon-user" type="button" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icono-user"><i class="fas fa-user"></i></span>
    </button>

  </nav>
  <div class="menu-apps">

        <div  class="vinculo iconos-menu " ><i class="fas fa-house-user"></i></div>
        <div  class="vinculo iconos-menu" ><i class="fas fa-store"></i></div>
        <div class="vinculo iconos-menu" ><i class="fas fa-money-check-alt"></i></div>
        <div  class="vinculo iconos-menu-escogido " ><i class="fas fa-truck"></i></div>
      </div>
  <br>

  <img class="rastrear-pedido" src="api/assets/img/banner-envios.gif" alt="">

  <br>
  <hr>
  <br>


  <?php

if(isset($_SESSION['user'])){

  echo '
  <div class="container d-flex justify-content-center">

    <div class="container card p-2" style="background:#1D8A1E; color:white; width:90%">

    <div class=" p-3 btn-block   " style="width:100%; height:100%; background:#1D8A1E; color:white; font-size:25px;"><i class="fas fa-truck"></i> ¿A donde quieres que enviemos tus pedidos?</div>
    <hr>
    <h5 class="p-2"> '.strtoupper($_SESSION['user'][0]['nombre']).' recuerda que 
    al ser usuario registrado 
    puedes seleccionar una direccion de envio , de esa forma <strong>con un solo click podras comprar</strong>,
   ¡sin volver a llenar formularios!
    </h5> 
    <hr>
    <a href="perfil.php" class="btn btn-dark btn-block" style="font-size:20px;">Registrar direccion de envio</a>
    </div>

    </div>
    <br>

  ';
}

?>


  <br>

  <div class=" p-3 container fondo-verde">

  <div class="bg-light d-flex justify-content-center p-2">
      <h3>Rastreador de pedidos</h3>
  </div>

  <form class="p-3 bg-light" action="envios.php" method="post">

  <label>Numero de seguimiento :</label><br>
  <input  placeholder="Ejemplo: a34lff0a8" type="text" name="id_pedido" required>
  <small id="emailHelp" class="form-text text-muted">Por favor no incluyas el simbolo "#" en la busqueda</small>
  <br>
  <br>
  <button type="submit" class="btn btn-success btn-block"> <h3> Rastrear <i class="fas fa-search-location"></i></h3></button>
  
 </form>

     <?php

     if(isset($_POST['id_pedido'])){

      $consulta4="select * from ventas where id_pedido='".$_POST['id_pedido']."'";


     $query =mysqli_query($miconexion->Conectando(),$consulta4);
 
      
     $Pedido=null;
 
     while($res= mysqli_fetch_assoc($query)){
 
         $Pedido[]=$res;
 
     }

     if($Pedido===null){

      echo '
      <br><br>
      <div class="container bg-light p-2">

      <h3 style="color:red;" class="p-2 d-flex justify-xontent-center">No se encontraron resultados para "'.$_POST['id_pedido'].'", recuerda  poner el codigo de seguimiento sin el "#"</h3>

      
      </div>
      ';

     }else{

      //var_dump($Pedido);

      if($Pedido[0]['forma_de_pago']==="contra-entrega"){

        $tiempo_estimado="Tiempo estimado de entrega:  12 a 24 horas  ";
      
      }else if($Pedido[0]['ciduad']==="bogota"){

        $tiempo_estimado="Tiempo estimado de entrega: 1 a 3 días";
      
      }else{

        $tiempo_estimado="Tiempo estimado de entrega: 1 a 5 días";
      
      }

      if($Pedido[0]['estado']==="Entregado"){

        $tiempo_estimado="Este pedido ha sido entregado satisfactoriamente";
      }

      echo '   
      
        <br>
        <br>

        <div class="container bg-light p-4">
        <h5>
        <p>Nombre destinatario : '.$Pedido[0]['nombre_cliente'].'</p>
        <hr>
        <p>Ciudad destino : '.$Pedido[0]['ciudad'].'</p>
        <hr>
        <p style="color:green;"><i class="fas fa-truck"></i> Estado : '.$Pedido[0]['estado'].'</p>
        <hr>
        <p style="color:green;"><i class="fas fa-truck-loading"></i> '.$tiempo_estimado.'</p>
        <h5>
        <hr>
        <br>
        <a href="">Necesito ayuda con mi pedido</a>
        
        </div>

      
      
      ';



     }



     }


     ?>
 
  </div>


 <br>
 <hr>
 <br>
 
 
 
 <div class=" container fondo-verde d-flex justify-content-center">

 <h2>Tarifas de envíos</h2>
 </div>
<br>
<img class="rastrear-pedido" src="api/assets/img/banner-envios-2.gif" alt="">

 <div class="fondo-verde p-3">
<h5 class="bg-light p-2 d-flex justify-content-center">Costo del envío para pagos contra-entrega</h5>
 <div class="card tarifas">
  <ul class="list-group list-group-flush">
   
<?php
 
 for($i=0;$i<count($contraEntrega);$i++){


    echo '
    <li class="list-group-item">'.$contraEntrega[$i]['nombre_lugar'].' : $ '.$contraEntrega[$i]['precio3kg'].' pesos</li>

    
    ';
 }


 ?>
  </ul>
</div>
</div>




 <br>
<hr>
<br>

<img class="rastrear-pedido" src="api/assets/img/banner-envios-3.gif" alt="">


 <div class="fondo-verde p-3">
<h5 class="bg-light p-2 d-flex justify-content-center">Costo del envío sin pago contra entrega</h5>
 <div class="card tarifas">
  <ul class="list-group list-group-flush">
   
<?php
 
 for($i=0;$i<count($envios);$i++){


    echo '
    <li class="list-group-item">'.$envios[$i]['nombre_lugar'].' : $ '.$envios[$i]['precio3kg'].' pesos</li>

    
    ';
 }


 ?>
  </ul>
</div>
</div>

<br>
<hr>
<br>



<div class="container fondo-verde d-flex justify-content-center p-2">
    <h3>Información importante</h3>
</div>
<br>
<div class="container">
    <div class="bg-light p-3">
        Los enviós en portal orion cuentan con garantia por 
        perdidas o daños del producto, recuerda que el costo del domicilio 
        sin pago contra entrega
         incluye un deposito de seguridad y proteccion para tus pedidos, el deposito de garantia
          por la distancia mas larga(Amazonas - Guajira) es de  $2000 pesos cop aproximadamente,nunca te cobramos mas de $2500 pesos, consulta nuestros términos y condiciones 
        <a href="terminos.php">aquí.</a>
        </div>
</div>
<br>
<div class="container">
    <div class="bg-light p-3">
      
    El costo de los envios de cualquier indole los determina directamente Portal Orion, 
    nos reservamos el derecho de cobro para los envios, este costo se calcula, segun la distancia,
    seguridad y facilidad de acceso al lugar de destino, consulta nuestros términos y condiciones 
        <a href="terminos.php">aquí.</a>
        </div>
</div>
<br>


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