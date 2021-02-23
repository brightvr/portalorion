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

require_once 'conexion.php';

if(isset($_POST['comprar'])){

    //___________________________________________________________________________________________________

    $consulta='select * from productos where id_producto='.$_POST['id-producto'].';';


    $query =mysqli_query($miconexion->Conectando(),$consulta);

    

    while($res= mysqli_fetch_assoc($query)){

        $producto[]=$res;

    }
 //_________________________________________________________________________________________________________

    //___________________________________________________________________________________________________

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
}
    //var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos</title>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/pagos.css">


</head>
<body>

<?php

require 'componentes-interfaces/nav.php';

?>
  <div class="menu-apps">

        <div  class="vinculo iconos-menu " ><i class="fas fa-house-user"></i></div>
        <div  class="vinculo iconos-menu" ><i class="fas fa-store"></i></div>
        <div class="vinculo iconos-menu-escogido" ><i class="fas fa-money-check-alt"></i></div>
        <div  class="vinculo iconos-menu " ><i class="fas fa-truck"></i></div>
      </div>
  <br>


  <?php

if(isset($producto[0])){

    echo '
    
    <div class="container">
      
      <a href="producto.php?id='.$producto[0]['id_producto'].'" class="btn btn-success"><h6><img src="'.$producto[0]['img'].'" class="img-ubicacion">  /  <i class="fas fa-arrow-left"></i> Producto</h6></a>

    </div>
    <br>

    
    ';

   
}

?>

<?php

if(!isset($_POST['nombre-producto'])){

    echo '<img class="pago-seguro" src="api/assets/img/banner-pagos.gif" alt="">
    <br>
    <hr>
    <br>';

}



if(isset($_POST['nombre-producto'])){

    for($f=0;$f<count($contraEntrega);$f++){

        if($_POST['destino-producto']===$contraEntrega[$f]['nombre_lugar']){
    
            $costo_envio=$contraEntrega[$f]['precio3kg'];
        }
    }

    for($f=0;$f<count($envios);$f++){
    
        if($_POST['destino-producto']===$envios[$f]['nombre_lugar']){
    
            $costo_envio=$envios[$f]['precio3kg'];
        }
    }


    $subtotal=intval($_POST['cantidad-producto'])*intval($producto[0]['precio']);
    $total_a_pagar=intval($costo_envio)+$subtotal;


    //INICIO DE SESSION DE VENTAS

    $_SESSION['venta']=[

        "id_producto"=>$producto[0]['id_producto'],
        "producto"=>$producto[0]['nombre'],
        "precioxUnidad"=>$producto[0]['precio'],
        "cantidad"=>$_POST['cantidad-producto'],
        "subtotal"=>$subtotal,
        "envio"=>$costo_envio,
        "total"=>$total_a_pagar,
        "estado"=>"Alistando pedido",
        "img"=>$producto[0]['img'],
        "destino"=>$_POST['destino-producto']
    ];
    

    number_format( floatval($subtotal), 0, ".", ",");

    echo '
    <div class="bg-light" style="width:90%;margin-left:5%;box-shadow:3px 3px 6px black;">
    <div class="p-2 fondo-verde2 text-light d-flex justify-content-center"><h4>Datos de la compra</h4></div>
    <br>
        <div class="card" style="width: 100%">
    <h6>
    <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex justify-content-center"><img src="'.$producto[0]['img'].'" style="width:70%;"></li>
        <li class="list-group-item"><strong>Producto :</strong> '.$_POST['nombre-producto'].'</li>
        <li class="list-group-item"><strong>Unidades : </strong>'.$_POST['cantidad-producto'].'</li>
        <li class="list-group-item"><strong>PrecioxUnidad :</strong> $ '.number_format( floatval($producto[0]['precio']), 0, ".", ",").' pesos cop</li>
        <li class="list-group-item"><strong>Subtotal :</strong> $ '.number_format( floatval($subtotal), 0, ".", ",").' pesos cop</li>
        <li class="list-group-item"><strong>Envío :</strong> $ '.number_format( floatval($costo_envio), 0, ".", ",").' pesos cop</li>
        <li class="list-group-item"><strong>Total :</strong> $ '.number_format( floatval($total_a_pagar), 0, ".", ",").' pesos cop</li>

    </ul>
    </h6>
    </div>
    </div>
    
    ';
}
?>



<?php




if(isset($_POST['comprar'])){

 

   // var_dump($envios);

    for($i=0;$i<count($envios);$i++){


        if($_POST['destino-producto']===$envios[$i]['nombre_lugar']){

            $pago_contra_entrega=false;
            break;
        
        }else{

            $pago_contra_entrega=true;
        }

    }

    if($pago_contra_entrega && intval($subtotal)!=0){






        //opciones usuario
        if(isset($_SESSION['user'])){


            $_SESSION['user']['carrito']=$_POST;



            echo '
            
            <br>
            <div class="container alert  alert-light">
        
            <h4>'.strtoupper($_SESSION['user'][0]['nombre']).', COMPRA CON UN SOLO CLICK</h4>
            <hr>
            <div class="fondo-verde d-flex justify-content-center p-2"><h4>Formas de pago para : '.$_POST['destino-producto'].'</h4></div>
            <hr>
            <a href="newform.php?pago=contra-entrega" class="btn btn-success btn-block"><h3>PAGAR CONTRA-ENTREGA</h3></a>
            <a href="newform.php?pago=online" class="btn btn-success btn-block"><h3>PAGAR ONLINE</h3></a>
            <a href="#" class="btn btn-warning btn-block"><h3>CREAR PAQUETE</h3><small><strong>DISPONIBLE PRÓXIMAMENTE</strong></small></a>
            </div>
            <br>
        
           
            ';
        
        
        }


        

        //var_dump("Pago contra entrega habilitado");

        echo '
        <br>
        <div style="width:90%;margin-left:5%;box-shadow:3px 3px 6px black;background:white;" class=" p-3">
        <h6 style="color:grey;">Ya casi es tuyo, pagas como invitado</h6><br>

        <div class="fondo-verde2 text-light d-flex justify-content-center p-2"><h5>¿Cómo deseas pagar?</h5></div>
        <hr>
        <div class="d-flex justify-content-between" style="color:green;">
        <p class="p-1 d-flex justify-content-center">contra-entrega</p>
        <p class="p-1 d-flex justify-content-center">on-line</p>
        </div>
        <div class="d-flex ">
        
               <div style="width:48%;" class="d-block">
               
               <img src="api/assets/img/metodos-pago/pago-contra-entrega3.png" style="width:100%;box-shadow:3px 3px 6px black;margin-right:35px;border:2px solid green;">
               
               </div>


               


               <div style="width:48%;padding:5px;box-shadow:3px 3px 6px black;margin-left:35px;border:2px solid green;" class="d-block">

               <img src="api/assets/img/metodos-pago/online.png" style="width:90%;">
               </div>

        </div>
        
        <br>
        </div>';

/*<a href="formulario1.php" class="btn btn-block btn-success"><h3>Pagar contra-entrega</h3></a>
        <a href="formulario2.php" class="btn btn-block btn-success"><h3>Pagar online (Incluye pagos en efectivo)</h3> </a> */

    }else if(!$pago_contra_entrega && intval($subtotal)!=0){



        //opciones usuario
        if($_SESSION['user']){

            $_SESSION['user']['carrito']=$_POST;

            echo '
            
            <br>
            <div class="container alert text-dark alert-light">
        
            <h6>'.strtoupper($_SESSION['user'][0]['nombre']).', COMPRA CON UN SOLO CLICK;</h6>
            <hr>
            <div class="fondo-verde d-flex justify-content-center p-2"><h4>Formas de pago para : '.$_POST['destino-producto'].'</h4></div>
            <hr>
            <a href="newform.php?pago=online" class="btn btn-success btn-block"><h3>PAGAR ONLINE</h3></a>
            <a href="#" class="btn btn-warning btn-block"><h3>CREAR PAQUETE</h3><small><strong>DISPONIBLE PRÓXIMAMENTE</strong></small></a>
            </div>
            <br>
        
           
            ';
        
        
        }


        //var_dump("pago contra entrega deshabilitado");

        echo '
        <br>
        <div class="container alert alert-light">
        <h4>Pagar como invitado</h4><br>
        <div class="fondo-verde d-flex justify-content-center p-2"><h4>Formas de pago para : '.$_POST['destino-producto'].'</h4></div>
        <hr>
        
       
        <a href="formulario2.php" class="btn btn-block btn-success"><h3>Pagar online (Incluye pagos en efectivo)</h3> </a>
        
        </div>
        <br>
        <br>
        <hr>
        <br>
        <br>
        ';
    }else if($subtotal==0){

        echo '

        <br>
        <div class="container alert alert-light">

        <div class="fondo-verde d-flex justify-content-center p-2"><h4>Formas de pago para : '.$_POST['destino-producto'].'</h4></div>
        <hr>
        
        <div class="btn btn-block btn-danger"><h3>ESTE PRODUCTO ACTUALMENTE NO SE ENCUENTRA DISPONIBLE </h3></div>
     
        
        </div>
        <br>
        <br>
        <hr>
        <br>
        <br>
        
        
        ';
    }


}
if(!isset($_POST['comprar'])){

    require_once 'landingpagos.php';
}


?>



<br>
<hr>
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