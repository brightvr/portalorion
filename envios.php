<?php


        if(isset($_GET['response'])){

            echo '<div class="alert alert-success d-flex justify-content-center"><h4>'.$_GET['response'].'</h4></div>';

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
    <title>Portal Orion</title>

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

  <div class=" p-3 container fondo-verde">

  <div class="bg-light d-flex justify-content-center p-2">
      <h3>Rastreador de pedidos</h3>
  </div>

  <form class="p-3 bg-light" action="envios.php" method="post">

  <label>Numero de seguimiento :</label><br>
  <input type="text" name="id_pedido" required>
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
          por la distancia mas larga(Amazonas - Guajira) es de  $1500 pesos cop aproximadamente,nunca te cobramos mas de $2000 pesos, consulta nuestros términos y condiciones 
        <a href="terminos.php">aquí.</a>
        </div>
</div>
<br>
<div class="container">
    <div class="bg-light p-3">
      
    El costo de los envios para pagos contra entrega los determina directamente Portal Orion, 
    nos reservamos el derecho de cobro para pago contra-entrega, este costo se calcula, segun la distancia,
    seguridad y facilidad de acceso al lugar de destino, consulta nuestros términos y condiciones 
        <a href="terminos.php">aquí.</a>
        </div>
</div>
<br>



  <script src="librerias/jquery/jquery-3.5.1.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="librerias/icons/js/all.js"></script>
  <script src="js/navigation.js"></script>
</body>
</html>