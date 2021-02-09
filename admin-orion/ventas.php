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



require_once 'crud/conexion.php';

$consulta="select * from ventas";
$consulta2="select * from venta_producto";
$consulta3="select precio_compra, precio_envio from ventas ";



$query1=mysqli_query($miconexion->Conectando(),$consulta);
$query2=mysqli_query($miconexion->Conectando(),$consulta2);
$query3=mysqli_query($miconexion->Conectando(),$consulta3);



while($response=mysqli_fetch_assoc($query1)){

    $ventas[]=$response;
}


while($response2=mysqli_fetch_assoc($query2)){

    $venta_producto[]=$response2;
}


while($response3=mysqli_fetch_assoc($query3)){

    $facturacion[]=$response3;
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
      <li class="nav-item ">
        <a class="nav-link" href="bright.php">INICIO</a>
      </li>
      <li class="nav-item active">
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

<div class="container d-flex flex-wrap">

<div class="card m-3 text-white bg-success mb-3" style="width:100%;">
  <div class="card-header d-flex justify-content-center"><h3>DINERO</h3></div>
  <div class="card-body">
    <h5 class="card-title">Total facturado en productos:
     <?php 
    
      for($i=0;$i<count($facturacion);$i++){

        $facturado_productos[]=$facturacion[$i]['precio_compra'];
        $facturado_envios[]=$facturacion[$i]['precio_envio'];
        
      }

      echo '$ '.array_sum( $facturado_productos).' pesos cop';
    
    
    ?> </h5>
    <hr>
    <h5 class="card-title">Total facturado en envios: <?php echo '$ '.array_sum( $facturado_envios).' pesos cop'; ?></h5>
    <hr>
    <h5 class="card-title">Total facturado: <?php echo '$ '.(array_sum( $facturado_productos)+array_sum($facturado_envios)).' pesos cop'; ?></h5>
  </div>
</div>


</div>
<br>
<br>





<br>
<br><br>
<hr>
<br><br>

<style>


.entregado, .en-camino, .pendiente{


  height: 600px;
  background: white;
  overflow-y: scroll;

}

</style>
<br>
<div class="bg-danger p-2  d-flex justify-content-center"><h3>PEDIDOS PENDIENTES</h3></div>

  <div class="container d-flex flex-wrap pendiente p-3" >
  <br>
  <div class="micontainer"><h1>Cargando pedidos pendientes ...</h1></div>


</div>
<br>
<hr>
<br>

<div class="bg-warning p-2  d-flex justify-content-center"><h3>PEDIDOS EN CAMINO</h3></div>

  <div class="container d-flex flex-wrap en-camino p-3">
  <br>
  <div class="micontainer"><h1>Cargando pedidos en camino ...</h1></div>


</div>

<br>
<hr>
<br>

<div class="bg-success p-2  d-flex justify-content-center"><h3>PEDIDOS ENTREGADOS</h3></div>

  <div class="container d-flex flex-wrap entregado p-3" >
  <br>
  <div class="micontainer"><h1>Cargando pedidos entregados ...</h1></div>


</div>





<br><br>

<div class="bg-primary p-2 d-flex justify-content-center"><h3>TODAS LAS VENTAS</h3></div>


<br>
<hr>
<br>



<div class="container d-flex flex-wrap" >

<?php

//var_dump($ventas);

for($i=0;$i<count($ventas);$i++){



    echo '

<div class="card p-2 m-4 " style="width: 20rem;">
<div class="card-header">
  Identifiacdor venta : #'.$ventas[$i]['id_venta'].'
</div>
<form action="">
<ul class="list-group list-group-flush">
<li class="list-group-item">Estado actual: '.$ventas[$i]['estado'].'</li>
  <li class="list-group-item">Destinatario: '.$ventas[$i]['nombre_cliente'].'</li>
  <li class="list-group-item">Precio de la compra: $ '.$ventas[$i]['precio_compra'].' pesos cop</li>
  <li class="list-group-item">Precio del envio: $ '.$ventas[$i]['precio_envio'].' Pesos cop</li>
  <li class="list-group-item">Forma de pago: '.$ventas[$i]['forma_de_pago'].'</li>
  
  </ul>
</form>
</div>

';




}




?>



</div>




<script src="librerias/jquery/jquery-3.5.1.js"></script>
<script src="librerias/bootstrap/js/bootstrap.min.js"></script>
<script src="librerias/icons/js/all.js"></script>


<script>


const UpdatePedidos =()=>{


  fetch("../api/interfaces/admin/ventas.php")
    .then(response=>response.json())
    .then(response=>{

        console.log(response);

        $('.micontainer').remove();
        

        for(let i=0;i<response.length;i++){


          if(response[i].estado==="Alistando pedido"){


            $('.pendiente').append(`

              <div class="micontainer m-2" style="max-width: 19rem;">

              <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
              <div class="card-header">Venta Pendiente</div>
              <div class="card-body">
                  <h5 class="card-title">Pedido numero: #${response[i].id_pedido}</h5>
                  <hr>
                  <h5 class="card-title">Destinatario: ${response[i].nombre_cliente}</h5>
                  <hr>
                  <h5 class="card-title">Numero de contacto: ${response[i].telefono}</h5>
                  <hr>
                  <h5 class="card-title">Ciudad: ${response[i].ciudad}</h5>
                  <hr>
                  <h5 class="card-title">Barrio/localidad: ${response[i].barrio}</h5>
                  <hr>
                  <h5 class="card-title">Direccion : ${response[i].direccion}</h5>
                  <hr>
                  <a href="pdf/pdf.php?pedido=${response[i].id_pedido}&estado=En camino" class="btn btn-block btn-dark">DESCARGAR ETIQUETA</a>
              </div>
              </div>

              </div>




              `);


            
          }




          if(response[i].estado==="En camino"){


            $('.en-camino').append(`

              <div class="micontainer m-2" style="max-width: 19rem;">

              <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
              <div class="card-header">Venta Pendiente</div>
              <div class="card-body">
                  <h5 class="card-title">Pedido numero: #${response[i].id_pedido}</h5>
                  <hr>
                  <h5 class="card-title">Destinatario: ${response[i].nombre_cliente}</h5>
                  <hr>
                  <h5 class="card-title">Numero de contacto: ${response[i].telefono}</h5>
                  <hr>
                  <h5 class="card-title">Ciudad: ${response[i].ciudad}</h5>
                  <hr>
                  <h5 class="card-title">Barrio/localidad: ${response[i].barrio}</h5>
                  <hr>
                  <h5 class="card-title">Direccion : ${response[i].direccion}</h5>
                  <hr>
                  <a href="pdf/pdf.php?pedido=${response[i].id_pedido}&estado=Entregado" class="btn btn-block btn-dark">MARCAR COMO ENTREGADO</a>
                  <a href="pdf/pdf.php?pedido=${response[i].id_pedido}" class="btn btn-block btn-dark">DESCARGAR ETIQUETA</a>
              </div>
              </div>

              </div>




            `);



          }






          if(response[i].estado==="Entregado"){


            $('.entregado').append(`

              <div class="micontainer m-2" style="max-width: 19rem;">

              <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
              <div class="card-header">Venta entregada</div>
              <div class="card-body">
              <h5 class="card-title">Pedido numero: #${response[i].id_pedido}</h5>
                  <hr>
                  <h5 class="card-title">Destinatario: ${response[i].nombre_cliente}</h5>
                  <hr>
                  <h5 class="card-title">Numero de contacto: ${response[i].telefono}</h5>
                  <hr>
                  <h5 class="card-title">Ciudad: ${response[i].ciudad}</h5>
                  <hr>
                  <h5 class="card-title">Barrio/localidad: ${response[i].barrio}</h5>
                  <hr>
                  <h5 class="card-title">Direccion : ${response[i].direccion}</h5>
                  <hr>
                  <a href="pdf/pdf.php?pedido=${response[i].id_pedido}" class="btn btn-block btn-dark">DESCARGAR ETIQUETA</a>
              </div>
              </div>

              </div>




            `);



          }



        }



    })





}//final de la funcion UpdatePedidos



UpdatePedidos();


setInterval(() => {

    UpdatePedidos();
    
}, 39000);




</script>

</body>
</html>