<?php

    if(isset($_GET['id'])){

        require_once 'conexion.php';

        $consulta='select * from productos where id_producto='.$_GET['id'].';';
      
      
        $query =mysqli_query($miconexion->Conectando(),$consulta);
      
        $producto=null;
      
        while($res= mysqli_fetch_assoc($query)){
      
        $producto[]=$res;
      
        }

        if($producto===null){

            var_dump("no se encontro producto");
        }else{

            //var_dump($producto);
        }

    }else{

        header('Location:tienda.php');
    }




        //trayendo data productos

        $consulta3=array('select * from productos limit 5');
  
        $allProducts=null;
     
        for($i=0; $i<count($consulta3);$i++){
     
         $query =mysqli_query($miconexion->Conectando(),$consulta3[$i]);
     
         while($res= mysqli_fetch_assoc($query)){
       
             $allProducts[]=$res;
            
              }
     
        }






    //trayendo data envios

    $consulta2=array('select * from eviosContraEntrega','select * from envios');
  
   $envios=null;

   for($i=0; $i<count($consulta2);$i++){

    $query =mysqli_query($miconexion->Conectando(),$consulta2[$i]);

    while($res= mysqli_fetch_assoc($query)){
  
        $envios[]=$res;
       
         }

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">
    <link rel="stylesheet" href="css/producto.css">


</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark fondo-negro d-flex justify-content-between ">
    <a class="navbar-brand" href="index.php"><img class="logo-orion" src="api/assets/img/logo-orion-claro.png" alt=""></a>
    <button class="cont-icon-user" type="button" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icono-user"><i class="fas fa-user"></i></span>
    </button>

  </nav>
  <div class="menu-apps">

        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-house-user"></i></div>
        <div class=" vinculo iconos-menu-escogido" href="#"><i class="fas fa-store"></i></div>
        <div class=" vinculo iconos-menu" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-truck"></i></div>
      </div>
      <br>
      <hr>
     

      <div class="container">
      
      <a href="tienda.php" class="btn btn-success"><h2><i class="fas fa-store"></i>  /  <i class="fas fa-arrow-left"></i> Tienda</h2></a>

      </div>
    
      <br>

      <div class="fondo-verde p-4"><h3 class="d-flex justify-content-center"><?php echo $producto[0]['nombre'] ?></h3></div>

<br>

<div class="app-mobile">

      <div class="container">


      <img class="img-producto" src="<?php echo $producto[0]['img'] ?>" alt="">
      <br><br>

    
      <br>
      <div class="container fondo-verde d-flex justify-content-center p-2">
      <h2>$ <?php echo $producto[0]['precio'] ?> pesos cop</h2>
      </div>

      <form class="fondo-verde mt-2 p-3 d-block" action="pagos.php" method="post">
      <input type="text" class="d-none" name="id-producto" value="<?php echo $producto[0]['id_producto'] ?>">
      <input type="text" class="d-none" name="comprar" value="1">
      <input type="text" class="d-none" name="nombre-producto" value="<?php echo $producto[0]['nombre'] ?>">

    <h5>
      <label for="">Elige una cantidad :</label>
      <input name="cantidad-producto" type="number" value="1" min="0" max="<?php echo $producto[0]['stock'] ?>">
      <br>
      <hr>
      <br>
      <label for="">Elige un destino :</label>
      <select name="destino-producto">
      <?php

      
            if($envios===null){

                var_dump("fallo al obtener resultados");

            }else{

                var_dump($envios);

                for($f=0;$f<count($envios);$f++){

                    echo '<option value="'.$envios[$f]['nombre_lugar'].'">'.$envios[$f]['nombre_lugar'].'</option>';


                }

            }


      ?>
      </select><br>
      <br><br>

      <?php
      

      if( intval($producto[0]['stock'])===0){

        echo '  <div class="btn comprar btn-block"><h1>NO DISPONIBLE</h1></div>';

      }else{

          echo '  <button type="submit" class="btn comprar btn-block"><h1>COMPRAR</h1></button>';
      }

      ?>

    
      <br>
      </h5>
      </form>
      <br>

      
     
      <br>
      
      </div>
    



      <div class="container fondo-verde p-3">
      
      <div class="alert bg-light">
      
      <div class="d-flex justify-content-center"><h4>Descrpicion</h4></div>
      <hr>
      <div><?php echo $producto[0]['descripcion'] ?></div>

      </div>

      </div>




      <br>







      <div class="container">
      <div class=" container fondo-verde">
      <br>
      <div class=" p-2 bg-light container d-flex justify-content-center"><h4>Compras desde Whatsapp</h4></div>
      <br>
      
      <div class="d-flex justify-content-center">
      <br>
      <h5 class="p-2 bg-light container">   Atencion a ventas</h5>
      </div>
      
      <hr>
      <br>
      <div class="bg-light d-block p-4 ">
          <h5>Horarios:</h5>
          <br>
          <h5>Lunes a viernes : 9:00 a.m. - 6:00 p.m.</h5>
          <br>
          <h5>Sabados : 9:00 a.m. - 4:00 p.m.</h5>
          <br>
          <h5>Domingos y Festivos NO HAY ATENCION A VENTAS </h5>

        <hr>

        <br><br>
        <a href="https://api.whatsapp.com/send?phone=573192091708&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20este%20articulo%20:%20<?php echo $producto[0]['nombre'] ?>" class="btn btn-success btn-block"><h4>ASESOR #1</h4></a>
        <a href="https://api.whatsapp.com/send?phone=573232043948&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20este%20articulo%20:%20<?php echo $producto[0]['nombre'] ?>" class="btn btn-success btn-block"><h4>ASESOR #2</h4></a>
        <a href="https://api.whatsapp.com/send?phone=573228873812&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20este%20articulo%20:%20<?php echo $producto[0]['nombre'] ?>" class="btn btn-success btn-block"><h4>ASESOR #3</h4></a>

        </div>
      
      <hr>
      </div>
      </div>





      <?php

      echo '
       <a href="'.$producto[0]['mercadolibre'].'" class="fondo-amarillo p-2 d-flex justify-content-center">
      <h5>Comprar producto en mercado libre</h5>
      </a>
      '

      ?>







            
      <br>
      <hr>
      <br>
      <br>

      <div class="fondo-verde d-flex justify-content-center p-3">
          <h1>MÁS PRODUCTOS</h1>
      </div>

      <br>
      <br>
      <div class="container alert alert-light cont-productos ">
            
            <?php

          //  var_dump($allProducts);

          for($h=0;$h<count($allProducts);$h++){


            echo '
          
           
            <div class="mi-card">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 360 632">
                <defs>
                  <style>
                    .a6659f80-c209-4bef-95dc-dd2e0fd6d2af, .aec2e71c-a97f-49a9-809e-0ac13d78d69b, .efa87712-205c-4cd0-91cd-2e9d1e9f971d {
                      fill: #fff;
                    }
              
                    .ffff8acb-9f86-4e78-974a-d9aa7de3b931 {
                      fill: #5dac38;
                    }
              
                    .bfeb0313-d199-4e53-be46-c0625923963d {
                      fill: #9e9e9e;
                    }
              
                    .eb7c4729-e31d-48b4-a780-3b04696e694b {
                      font-size: 41px;
                    }
              
                    .a1803540-80f4-4717-9018-54cf33252226, .aec2e71c-a97f-49a9-809e-0ac13d78d69b, .b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7, .eb7c4729-e31d-48b4-a780-3b04696e694b, .efa87712-205c-4cd0-91cd-2e9d1e9f971d {
                      font-family: Rockwell;
                    }
              
                    .efa87712-205c-4cd0-91cd-2e9d1e9f971d {
                      font-size: 23px;
                    }
              
                    .adad19a3-d5af-4ad4-81e6-da2d389be2aa {
                      letter-spacing: -0.05em;
                    }
              
                    .a1803540-80f4-4717-9018-54cf33252226 {
                      font-size: 21px;
                    }
              
                    .a906fe84-e21a-4de8-8ced-3cf3d080ffb0 {
                      letter-spacing: -0.02em;
                    }
              
                    .f5316b5f-c080-4a76-b585-7c0f6110d00d {
                      letter-spacing: 0em;
                    }
              
                    .aec2e71c-a97f-49a9-809e-0ac13d78d69b {
                      font-size: 27px;
                    }
              
                    .b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7 {
                      font-size: 15px;
                    }
              
                    .b4dfc1b3-6e62-4ef7-bd34-fd0c219fabc8 {
                      letter-spacing: -0.02em;
                    }
                  </style>
                </defs>
                <g id="eac8f3ff-0e6a-4077-9ef5-b858bf353610" data-name="Fondo">
                  <g>
                    <rect class="a6659f80-c209-4bef-95dc-dd2e0fd6d2af" x="0.5" y="44.5" width="359" height="587"/>
                    <path class="a6659f80-c209-4bef-95dc-dd2e0fd6d2af" d="M359,46V632H1V46H359m1-1H0V633H360V45Z" transform="translate(0 -1)"/>
                  </g>
                </g>
                <g id="f0e62cbf-4ba9-4ad2-883e-19ebe2817a1a" data-name="card">
                  <g>
                    <rect x="0.5" y="519.5" width="359" height="112"/>
                    <path d="M359,521V632H1V521H359m1-1H0V633H360V520Z" transform="translate(0 -1)"/>
                  </g>
                  <g class="comprar-producto" value="${data.id_producto}">
                    <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="23.5" y="541.5" width="313" height="68" rx="1.5"/>
                    <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M335,543a1,1,0,0,1,1,1v65a1,1,0,0,1-1,1H25a1,1,0,0,1-1-1V544a1,1,0,0,1,1-1H335m0-1H25a2,2,0,0,0-2,2v65a2,2,0,0,0,2,2H335a2,2,0,0,0,2-2V544a2,2,0,0,0-2-2Z" transform="translate(0 -1)"/>
                  </g>
                  <g>
                    <rect x="0.5" y="391.5" width="359" height="55"/>
                    <path d="M359,393v54H1V393H359m1-1H0v56H360V392Z" transform="translate(0 -1)"/>
                  </g>
                  <rect class="bfeb0313-d199-4e53-be46-c0625923963d" x="27" y="447" width="309" height="56"/>
                  <g>
                    <rect x="0.5" y="0.5" width="359" height="57"/>
                    <path d="M359,2V58H1V2H359m1-1H0V59H360V1Z" transform="translate(0 -1)"/>
                  </g>
                  <g id="f5b5caf2-cc7e-47e9-bf76-71adababa703" data-name="Capa 16">
                    <g>
                      <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="280.5" y="452.5" width="46" height="43"/>
                      <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M326,454v42H281V454h45m1-1H280v44h47V453Z" transform="translate(0 -1)"/>
                    </g>
                  </g>
                  <g id="a0c5d0e3-40cc-4b22-8274-699a687a664e" data-name="Capa 15">
                    <g>
                      <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="0.5" y="60.5" width="179" height="37"/>
                      <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M179,62V98H1V62H179m1-1H0V99H180V61Z" transform="translate(0 -1)"/>
                    </g>
                    <g>
                      <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="182.5" y="60.5" width="177" height="37"/>
                      <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M359,62V98H183V62H359m1-1H182V99H360V61Z" transform="translate(0 -1)"/>
                    </g>
                  </g>
                </g>
                <g id="f21a9b1d-51db-4323-95f1-a9fc47aa2f39" data-name="stock">
                  <text class="eb7c4729-e31d-48b4-a780-3b04696e694b" transform="translate(281.27 485.96)">'.$allProducts[$h]['stock'].'</text>
                </g>
                <g id="fe99fd18-c861-4898-a1d6-c75f694e2d90" data-name="img">
                  <image width="1322" height="1113" transform="translate(3 102) scale(0.27 0.26)" xlink:href="'.$allProducts[$h]['img'].'"/>
                </g>
                <g id="e27e2678-efb7-4375-976a-ddb950241a7d" data-name="texto1">
                  <text class="efa87712-205c-4cd0-91cd-2e9d1e9f971d" transform="translate(30.58 31.18)">'.$allProducts[$h]['nombre'].' </text>
                </g>
                <g data-name="texto1">
                <text class="efa87712-205c-4cd0-91cd-2e9d1e9f971d" transform="translate(200.58 31.18)"></text>
              </g>
                <g id="a6e8d96e-3b1b-458f-bd5b-c6d76359acb6" data-name="check">
                  <text class="a1803540-80f4-4717-9018-54cf33252226" transform="translate(45.33 480.1)">'.$allProducts[$h]['disponibilidad'].'</text>
                </g>
                <g id="b9f01aeb-e730-46b9-adba-9632a756adc5" data-name="texto2">
                  <text class="aec2e71c-a97f-49a9-809e-0ac13d78d69b" transform="translate(59.76 425.37)">$ '.$allProducts[$h]['precio'].' pesos cop</text>
                </g>
                <g id="f132159d-5e27-46d9-88d9-24d5448e63c7" class="${data.id_producto} comprar-producto"  value="${data.id_producto}"  data-name="comprar">
                  <text class="eb7c4729-e31d-48b4-a780-3b04696e694b" transform="translate(72.34 585.92)">COMPRAR</text>
                </g>
               
                <g class="btn-comprar-card" id="eda4ffe1-6d4b-48d4-a5e3-3e450bfe794a" data-name="texto llega hoy">
                  <text class="b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7" transform="translate(10.8 82.22)">Envios toda Colombia</text>
                </g>
                
                <g id="ac5bb496-1782-4a77-a175-3bd9da31e5f8" data-name="texto agregar">
                  <text class="b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7" transform="translate(184.34 81.42)">'.$allProducts[$h]['info_corta'].'</text>
                </g>
              </svg>
              
        
          </div>
        
            
            ';


          }



            ?>
      
      </div>



      
<br>
<br>
<hr>



<!--herramienta para cotizar envios-->
<div class="container">
      
      <div class="card " >
      <div class="card-header  bg-success text-white">
      <div class="d-flex justify-content-center"> <h4>Cotizacion</h4></div>
      ( Con esta herramienta podras cotizar los costos de tu pedido sin tener que comprar)
      </div>
      <form action="" method="post">
      <ul class="list-group list-group-flush">
      <li class="list-group-item p-3 m-2"><h5>Forma de pago :</h5><br>
             <h5> <select name="forma-pago" id="cars" form="carform">
                  <option value="contra-entrega">Contra entrega (Bogotá )</option>
                  <option value="saab">Efectivo (no contra entrega)</option>
                  <option value="opel">Efecty - Baloto</option>
                  <option value="audi">Tarjetas debito - credito</option>
                  <option value="audi">Transferencia PSE</option>
                  <option value="audi">Nequi - Daviplata</option>
                  <option value="audi">Mercado Pago</option>
              </select></h5>
          </li>
      <li class="list-group-item p-3 m-2 d-flex"><h5>PrecioxUnidad :  <?php echo ' $ '.$producto[0]['precio'].' pesos ' ?></h5></li>
          <li class="list-group-item p-3 m-2 d-flex"><h5>Cantidad :  <input name="cantidad-producto" type="number" value="1" min="0" max="<?php echo $producto[0]['stock'] ?>"></h5></li>
          <li class="list-group-item p-3 m-2"><h5>Envio : (Elige un destino)</h5><br>
          <h5><select name="cars" form="carform">
          <?php 
          

        


          if($envios===null){

              var_dump("fallo al obtener resultados");
          
          }else{

              var_dump($envios);

              for($f=0;$f<count($envios);$f++){

                  echo '<option value="'.$envios[$f]['nombre_lugar'].'">'.$envios[$f]['nombre_lugar'].'</option>';


              }

          }
          
          
          ?>
              </select></h5>
          </li>
          <li class="list-group-item p-3 m-2 d-flex"> <div class="btn btn-success btn-block"><h2>COTIZAR</h2></div> </li>
      </ul>
      </form>
      </div>
      
</div>

<!--final herramienta para cotizar envios-->


</div>

<div class="app-web">
    <br><br>

<div class="container d-flex">

<div class=" ">

<img class="foto" src="<?php echo $producto[0]['img'] ?>" alt="">
</div>

<div class="container">


<div class="container fondo-verde d-flex justify-content-center p-2">
<h2>$ <?php echo $producto[0]['precio'] ?> pesos cop</h2>
</div>

<form class="fondo-verde mt-2 p-3 d-block" action="pagos.php" method="post">

<input type="text" class="d-none" name="id-producto" value="<?php echo $producto[0]['id_producto'] ?>">
<input type="text" class="d-none" name="comprar" value="1">
<input type="text" class="d-none" name="nombre-producto" value="<?php echo $producto[0]['nombre'] ?>">

<h5>
<label for="">Elige una cantidad :</label>
<input name="cantidad-producto" type="number" value="1" min="0" max="<?php echo $producto[0]['stock'] ?>">
<br>
<hr>
<br>
<label for="">Elige un destino :</label>
<select name="destino-producto">
<?php


      if($envios===null){

          var_dump("fallo al obtener resultados");

      }else{

          var_dump($envios);

          for($f=0;$f<count($envios);$f++){

              echo '<option value="'.$envios[$f]['nombre_lugar'].'">'.$envios[$f]['nombre_lugar'].'</option>';


          }

      }


?>
</select><br>
<br><br>

<button type="submit" class="btn comprar btn-block"><h1>COMPRAR</h1></button>
<br>
</h5>
</form>
<br>
<br>


</div>

</div>




<br>
<div class="container fondo-verde d-flex p-3">
      
      <div class="alert bg-light  description">
      
      <div class="d-flex justify-content-center"><h4>Descrpicion</h4></div>
      <hr>
      <div><?php echo $producto[0]['descripcion'] ?></div>

      </div>


      
      <div class="container atencion">
      <div class=" container fondo-verde">
      <br>

      <div class=" p-2 bg-light container d-flex justify-content-center"><h3>Compras desde Whatsapp</h3></div>

      <br>
      <div class="d-flex justify-content-center">
      <br>
      <h5 class="p-2 bg-light container d-flex justify-content-center">   Atencion a ventas</h5>
      </div>
      
      <hr>
      <br>
      <div class="bg-light d-block p-4 ">
          <h5>Horarios:</h5>
          <br>
          <h5>Lunes a viernes : 9:00 a.m. - 6:00 p.m.</h5>
          <br>
          <h5>Sabados : 9:00 a.m. - 4:00 p.m.</h5>
          <br>
          <h5>Domingos y Festivos NO HAY ATENCION A VENTAS </h5>

        <hr>

        <br><br>
        <a href="https://api.whatsapp.com/send?phone=573192091708&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20este%20articulo%20:%20<?php echo $producto[0]['nombre'] ?>" class="btn btn-success btn-block"><h4>ASESOR #1</h4></a>
        <a href="https://api.whatsapp.com/send?phone=5732288738128&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20este%20articulo%20:%20<?php echo $producto[0]['nombre'] ?>" class="btn btn-success btn-block"><h4>ASESOR #2</h4></a>
        <a href="https://api.whatsapp.com/send?phone=573232043948&text=Hola,%20vengo%20del%20catálogo,%20quiero%20comprar%20este%20articulo%20:%20<?php echo $producto[0]['nombre'] ?>" class="btn btn-success btn-block"><h4>ASESOR #3</h4></a>

        </div>
      
      <hr>
      </div>
      </div>




</div>

<br>

<?php

echo '
 <a href="'.$producto[0]['mercadolibre'].'" class="fondo-amarillo p-2 d-flex justify-content-center">
<h4>Comprar producto en mercado libre</h4>
</a>
'

?>





<br>
<hr><br>


<div class="container">

<div class="fondo-verde d-flex justify-content-center p-3">
          <h1>MÁS PRODUCTOS</h1>
      </div>

<div class="container alert alert-light cont-productos ">
            
            <?php

          //  var_dump($allProducts);

          for($h=0;$h<count($allProducts);$h++){


            echo '
          
           
            <div class="mi-card">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 360 632">
                <defs>
                  <style>
                    .a6659f80-c209-4bef-95dc-dd2e0fd6d2af, .aec2e71c-a97f-49a9-809e-0ac13d78d69b, .efa87712-205c-4cd0-91cd-2e9d1e9f971d {
                      fill: #fff;
                    }
              
                    .ffff8acb-9f86-4e78-974a-d9aa7de3b931 {
                      fill: #5dac38;
                    }
              
                    .bfeb0313-d199-4e53-be46-c0625923963d {
                      fill: #9e9e9e;
                    }
              
                    .eb7c4729-e31d-48b4-a780-3b04696e694b {
                      font-size: 41px;
                    }
              
                    .a1803540-80f4-4717-9018-54cf33252226, .aec2e71c-a97f-49a9-809e-0ac13d78d69b, .b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7, .eb7c4729-e31d-48b4-a780-3b04696e694b, .efa87712-205c-4cd0-91cd-2e9d1e9f971d {
                      font-family: Rockwell;
                    }
              
                    .efa87712-205c-4cd0-91cd-2e9d1e9f971d {
                      font-size: 23px;
                    }
              
                    .adad19a3-d5af-4ad4-81e6-da2d389be2aa {
                      letter-spacing: -0.05em;
                    }
              
                    .a1803540-80f4-4717-9018-54cf33252226 {
                      font-size: 21px;
                    }
              
                    .a906fe84-e21a-4de8-8ced-3cf3d080ffb0 {
                      letter-spacing: -0.02em;
                    }
              
                    .f5316b5f-c080-4a76-b585-7c0f6110d00d {
                      letter-spacing: 0em;
                    }
              
                    .aec2e71c-a97f-49a9-809e-0ac13d78d69b {
                      font-size: 27px;
                    }
              
                    .b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7 {
                      font-size: 15px;
                    }
              
                    .b4dfc1b3-6e62-4ef7-bd34-fd0c219fabc8 {
                      letter-spacing: -0.02em;
                    }
                  </style>
                </defs>
                <g id="eac8f3ff-0e6a-4077-9ef5-b858bf353610" data-name="Fondo">
                  <g>
                    <rect class="a6659f80-c209-4bef-95dc-dd2e0fd6d2af" x="0.5" y="44.5" width="359" height="587"/>
                    <path class="a6659f80-c209-4bef-95dc-dd2e0fd6d2af" d="M359,46V632H1V46H359m1-1H0V633H360V45Z" transform="translate(0 -1)"/>
                  </g>
                </g>
                <g id="f0e62cbf-4ba9-4ad2-883e-19ebe2817a1a" data-name="card">
                  <g>
                    <rect x="0.5" y="519.5" width="359" height="112"/>
                    <path d="M359,521V632H1V521H359m1-1H0V633H360V520Z" transform="translate(0 -1)"/>
                  </g>
                  <g class="comprar-producto" value="${data.id_producto}">
                    <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="23.5" y="541.5" width="313" height="68" rx="1.5"/>
                    <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M335,543a1,1,0,0,1,1,1v65a1,1,0,0,1-1,1H25a1,1,0,0,1-1-1V544a1,1,0,0,1,1-1H335m0-1H25a2,2,0,0,0-2,2v65a2,2,0,0,0,2,2H335a2,2,0,0,0,2-2V544a2,2,0,0,0-2-2Z" transform="translate(0 -1)"/>
                  </g>
                  <g>
                    <rect x="0.5" y="391.5" width="359" height="55"/>
                    <path d="M359,393v54H1V393H359m1-1H0v56H360V392Z" transform="translate(0 -1)"/>
                  </g>
                  <rect class="bfeb0313-d199-4e53-be46-c0625923963d" x="27" y="447" width="309" height="56"/>
                  <g>
                    <rect x="0.5" y="0.5" width="359" height="57"/>
                    <path d="M359,2V58H1V2H359m1-1H0V59H360V1Z" transform="translate(0 -1)"/>
                  </g>
                  <g id="f5b5caf2-cc7e-47e9-bf76-71adababa703" data-name="Capa 16">
                    <g>
                      <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="280.5" y="452.5" width="46" height="43"/>
                      <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M326,454v42H281V454h45m1-1H280v44h47V453Z" transform="translate(0 -1)"/>
                    </g>
                  </g>
                  <g id="a0c5d0e3-40cc-4b22-8274-699a687a664e" data-name="Capa 15">
                    <g>
                      <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="0.5" y="60.5" width="179" height="37"/>
                      <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M179,62V98H1V62H179m1-1H0V99H180V61Z" transform="translate(0 -1)"/>
                    </g>
                    <g>
                      <rect class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" x="182.5" y="60.5" width="177" height="37"/>
                      <path class="ffff8acb-9f86-4e78-974a-d9aa7de3b931" d="M359,62V98H183V62H359m1-1H182V99H360V61Z" transform="translate(0 -1)"/>
                    </g>
                  </g>
                </g>
                <g id="f21a9b1d-51db-4323-95f1-a9fc47aa2f39" data-name="stock">
                  <text class="eb7c4729-e31d-48b4-a780-3b04696e694b" transform="translate(281.27 485.96)">'.$allProducts[$h]['stock'].'</text>
                </g>
                <g id="fe99fd18-c861-4898-a1d6-c75f694e2d90" data-name="img">
                  <image width="1322" height="1113" transform="translate(3 102) scale(0.27 0.26)" xlink:href="'.$allProducts[$h]['img'].'"/>
                </g>
                <g id="e27e2678-efb7-4375-976a-ddb950241a7d" data-name="texto1">
                  <text class="efa87712-205c-4cd0-91cd-2e9d1e9f971d" transform="translate(30.58 31.18)">'.$allProducts[$h]['nombre'].' </text>
                </g>
                <g data-name="texto1">
                <text class="efa87712-205c-4cd0-91cd-2e9d1e9f971d" transform="translate(200.58 31.18)"></text>
              </g>
                <g id="a6e8d96e-3b1b-458f-bd5b-c6d76359acb6" data-name="check">
                  <text class="a1803540-80f4-4717-9018-54cf33252226" transform="translate(45.33 480.1)">'.$allProducts[$h]['disponibilidad'].'</text>
                </g>
                <g id="b9f01aeb-e730-46b9-adba-9632a756adc5" data-name="texto2">
                  <text class="aec2e71c-a97f-49a9-809e-0ac13d78d69b" transform="translate(59.76 425.37)">$ '.$allProducts[$h]['precio'].' pesos cop</text>
                </g>
                <g id="f132159d-5e27-46d9-88d9-24d5448e63c7" class="${data.id_producto} comprar-producto"  value="${data.id_producto}"  data-name="comprar">
                  <text class="eb7c4729-e31d-48b4-a780-3b04696e694b" transform="translate(72.34 585.92)">COMPRAR</text>
                </g>
               
                <g class="btn-comprar-card" id="eda4ffe1-6d4b-48d4-a5e3-3e450bfe794a" data-name="texto llega hoy">
                  <text class="b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7" transform="translate(10.8 82.22)">Envios toda Colombia</text>
                </g>
                
                <g id="ac5bb496-1782-4a77-a175-3bd9da31e5f8" data-name="texto agregar">
                  <text class="b06f0b4f-9b97-4524-aea2-9bb3af7bd5e7" transform="translate(184.34 81.42)">'.$allProducts[$h]['info_corta'].'</text>
                </g>
              </svg>
              
        
          </div>
        
            
            ';


          }



            ?>
      
      </div>


</div>
<br>
<br>
<div class="fondo-verde d-flex justify-content-center p-3">
          <h1>COTIZACIONES</h1>
      </div>
      <br>
      <br>
<!--herramienta para cotizar envios-->
<div class="container">
      
      <div class="card " >
      <div class="card-header  bg-success text-white">
      <div class="d-flex justify-content-center"> <h4>Cotizacion</h4></div>
      ( Con esta herramienta podras cotizar los costos de tu pedido sin tener que comprar)
      </div>
      <form action="" method="post">
      <ul class="list-group list-group-flush">
      <li class="list-group-item p-3 m-2"><h5>Forma de pago :</h5><br>
             <h5> <select name="forma-pago" id="cars" form="carform">
                  <option value="contra-entrega">Contra entrega (Bogotá )</option>
                  <option value="saab">Efectivo (no contra entrega)</option>
                  <option value="opel">Efecty - Baloto</option>
                  <option value="audi">Tarjetas debito - credito</option>
                  <option value="audi">Transferencia PSE</option>
                  <option value="audi">Nequi - Daviplata</option>
                  <option value="audi">Mercado Pago</option>
              </select></h5>
          </li>
      <li class="list-group-item p-3 m-2 d-flex"><h5>PrecioxUnidad :  <?php echo ' $ '.$producto[0]['precio'].' pesos ' ?></h5></li>
          <li class="list-group-item p-3 m-2 d-flex"><h5>Cantidad :  <input name="cantidad-producto" type="number" value="1" min="0" max="<?php echo $producto[0]['stock'] ?>"></h5></li>
          <li class="list-group-item p-3 m-2"><h5>Envio : (Elige un destino)</h5><br>
          <h5><select name="cars" form="carform">
          <?php 
          

        


          if($envios===null){

              var_dump("fallo al obtener resultados");
          
          }else{

              var_dump($envios);

              for($f=0;$f<count($envios);$f++){

                  echo '<option value="'.$envios[$f]['nombre_lugar'].'">'.$envios[$f]['nombre_lugar'].'</option>';


              }

          }
          
          
          ?>
              </select></h5>
          </li>
          <li class="list-group-item p-3 m-2 d-flex"> <div class="btn btn-success btn-block"><h2>COTIZAR</h2></div> </li>
      </ul>
      </form>
      </div>
      
</div>

<!--final herramienta para cotizar envios-->

</div>

      <script src="librerias/jquery/jquery-3.5.1.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>
    <script src="js/navigation.js"></script>

  </body>
  </html>