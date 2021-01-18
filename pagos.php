<?php

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
    <title>Portal Orion</title>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/pagos.css">


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
        <div class="vinculo iconos-menu-escogido" ><i class="fas fa-money-check-alt"></i></div>
        <div  class="vinculo iconos-menu " ><i class="fas fa-truck"></i></div>
      </div>
  <br>


  <?php

if(isset($producto[0])){

    echo '
    
    <div class="container">
      
      <a href="producto.php?id='.$producto[0]['id_producto'].'" class="btn btn-success"><h3><img src="'.$producto[0]['img'].'" class="img-ubicacion">  /  <i class="fas fa-arrow-left"></i> Producto</h3></a>

    </div>
    <br>

    
    ';

   
}

?>
<img class="pago-seguro" src="api/assets/img/banner-pagos.gif" alt="">
<br>
<hr>
<br>
<?php




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
    session_start();

    $_SESSION['venta']=[

        "id_producto"=>$producto[0]['id_producto'],
        "producto"=>$producto[0]['nombre'],
        "precioxUnidad"=>$producto[0]['precio'],
        "cantidad"=>$_POST['cantidad-producto'],
        "subtotal"=>$subtotal,
        "envio"=>$costo_envio,
        "total"=>$total_a_pagar,
        "estado"=>"Alistando pedido"
    ];
    



    echo '
    <div class="bg-light p-3">
    <div class="p-2 fondo-verde d-flex justify-content-center"><h3>Datos de la compra</h3></div>
    <br>
        <div class="card" style="width: 100%">
    <h5>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Producto :</strong> '.$_POST['nombre-producto'].'</li>
        <li class="list-group-item"><strong>Unidades : </strong>'.$_POST['cantidad-producto'].'</li>
        <li class="list-group-item"><strong>PrecioxUnidad :</strong> $ '.$producto[0]['precio'].' pesos cop</li>
        <li class="list-group-item"><strong>Subtotal :</strong> $ '.$subtotal.' pesos cop</li>
        <li class="list-group-item"><strong>Envío :</strong> $ '.$costo_envio.' pesos cop</li>
        <li class="list-group-item"><strong>Total :</strong> $ '.$total_a_pagar.' pesos cop</li>

    </ul>
    </h5>
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

        

        //var_dump("Pago contra entrega habilitado");

        echo '
        <br>
        <div class="container alert alert-light">

        <div class="fondo-verde d-flex justify-content-center p-2"><h4>Formas de pago para : '.$_POST['destino-producto'].'</h4></div>
        <hr>
        <a href="formulario1.php" class="btn btn-block btn-success"><h3>Pagar contra-entrega</h3></a>
        <div class="btn btn-block btn-success"><h3>Pagar en efectivo (no contra-entrega)</h3></div>
        <a href="formulario2.php" class="btn btn-block btn-success"><h3>Pagar online</h3> </a>
        
        </div>';

    }else if(!$pago_contra_entrega && intval($subtotal)!=0){

        //var_dump("pago contra entrega deshabilitado");

        echo '
        <br>
        <div class="container alert alert-light">

        <div class="fondo-verde d-flex justify-content-center p-2"><h4>Formas de pago para : '.$_POST['destino-producto'].'</h4></div>
        <hr>
        
        <div class="btn btn-block btn-success"><h3>Pagar en efectivo (no contra-entrega)</h3></div>
        <a href="formulario2.php" class="btn btn-block btn-success"><h3>Pagar online</h3> </a>
        
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






 
 <script src="librerias/jquery/jquery-3.5.1.js"></script>
  <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
  <script src="librerias/icons/js/all.js"></script>
  <script src="js/navigation.js"></script>
</body>
</html>