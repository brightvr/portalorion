<?php


ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


session_start();



require_once 'conexion.php';

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

if(!isset($_POST['buscar-producto'])){

  header('location:categoria.php');
}


$consulta='select * from productos where nombre like "%'.$_POST['buscar-producto'].'%" or info_corta like "%'.$_POST['buscar-producto'].'%" or descripcion like "%'.$_POST['buscar-producto'].'%"';

$query=mysqli_query($miconexion->Conectando(),$consulta);

$productos=null;

while($response= mysqli_fetch_assoc($query)){

  $productos[]=$response;
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'buscar'; ?></title>

    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/icons/css/all.css">
    <link rel="stylesheet" href="css/head.css">

</head>
<body>

<?php

require 'componentes-interfaces/nav.php';

if(isset($_SESSION['user'])){

  $usuario="cliente";

}else{

  $usuario="desconocido";

}

?>

<input class="d-none type-user" type="text" value="<?php echo $usuario ?>">



  <div class="menu-apps">

        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-house-user"></i></div>
        <div class=" vinculo iconos-menu" href="#"><i class="fas fa-store"></i></div>
        <div class=" vinculo iconos-menu" href="#"><i class="fas fa-money-check-alt"></i></div>
        <div class=" vinculo iconos-menu " href="#"><i class="fas fa-truck"></i></div>
      </div>
  <br>











  <div style="width:100%;height:100vh;background:black;z-index:999999999999;position:fixed;margin-top:-70px;" class="contenedor-msg  d-none p-2">

<div style="width:100%;height:100vh;background:black;z-index:999999999999;position:absolute;" class="contenedor-msg  d-none p-2">

  <div class="d-flex justify-content-end p-2 cart-wrogn"><span style="font-size:30px;color:red;"><i class="fas fa-window-close"></i></span></div>
  <br>
  <div style="width:90%;margin-left:5%;color:grey;;border-radius:10px;" class="bg-light p-3">
   <img src="api/assets/img/metodos-pago/oops.png" style="width: 100%;">
   <hr>
    <h6><li id="texto1">Al parecer no eres usuario registrado</li></h6>
    <hr>
    <h6><li id="texto2">Para usar el carrito debes ser usuario registrado</li></h6>


  </div>

</div>

</div>












<div class="d-flex justify-content-end pl-3 pr-3">
<a href="carrito.php" style="box-shadow:2px 2px 5px black;" class="btn btn-warning btn-block ">Carrito  <i class="fas fa-cart-plus"></i></a>
</div>
    
<div style="width:100%;" class=" cont-product p-1">

<hr style="width:80%;margin-left:10%;">
<div class="d-flex justify-content-center" style="color:grey;width:90%;margin-left:5%;"><h6 style="color:grey;"><li>Resultados para: "<?php echo $_POST['buscar-producto'] ?>" </li></h6></div>
<hr style="width:80%;margin-left:10%;">
<?php


//var_dump($productos);

if($productos===null){

  echo '

  <div class="bg-light p-2">

            <img style="width:100%;" src="api/assets/img/metodos-pago/oops.png">
            <h6 style="color:grey;padding:8px;">

                Parece que no se encontraron coincidencias, intenta con otra palabra clave
            
            </h6>
        
        </div>
        <br>
  
  ';

}else{

  for($i=0;$i<count($productos);$i++){

    $price= number_format( floatval($productos[$i]['precio']), 0, '.', ',');
  
    echo '<br>
    <input class="d-none id-product" value="'.$productos[$i]['id_producto'].'">
    <input class="d-none stock" value="'.$productos[$i]['stock'].'">
    <div class="contenedor">
  
    <div style="width: 95%;margin-left:2%;background:white;box-shadow:4px 4px 10px black;" class="micard">
        
          <div class="d-flex">
  
            <div style="width: 50%; padding-top:50px;" class="d-block "><img style=" width: 100%;;" src="'.$productos[$i]['img'].'" alt=""> 
          
            </div>
  
            <div style="width: 50%;" class="d-block p-2 pl-3">
            <h6 style="margin-left:-128%;" class="pl-4"><strong>'.$productos[$i]['nombre'].'</strong></h6>
            <hr>
            <h6><strong>$ '.$price.' pesos</strong></h6>
            <hr>
            <div style="margin-left: -6%;"  class="d-flex p-2 ">
  
                <div class="btn btn-success mr-2 menos"><h5 style="margin-top:-2px;">-</h5></div>
                <input class="cantidad" style="width:40px;" type="number" value="0" min="0" max="'.$productos[$i]['stock'].'" readonly>
                <div class="btn btn-success ml-2 mas"><h5 style="margin-top:-2px;">+</h5></div>
  
            </div>
            </div>
  
          </div>
  
          <div class="d-flex p-2">
          <div style="width: 50%;" class="d-block p-2"> <a href="producto.php?id='.$productos[$i]['id_producto'].'" class="btn btn-danger btn-block">Ver producto</a> </div>     
            <div style=" background: rgba(0, 0, 0, 0.178); width: 1px; height:50px;"></div>
            <div style="width: 50%;" class="d-block p-2"> <div class="btn btn-warning btn-block carrito add-cart">Añadir <i class="fas fa-cart-plus"></i></div> </div>
     
          </div>
        
    </div>
  
  </div>
  <br>
  <hr>';
  
  
  }


}




?>

</div>





  <?php

require_once 'footer.php';

?>

    
    
    <script src="librerias/jquery/jquery-3.5.1.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>
    <script src="js/navigation.js"></script> 
    <script>






     //______________________

   
      $('.cart-wrogn').on('click',function(){
            
            $('.contenedor-msg').addClass('d-none');
        
      });
        







          //increment products for cart
    const ControlMore = (inputCuantity,stock,f)=>{

     

        if(parseInt(inputCuantity[f].value) === parseInt(stock.value)){

            inputCuantity[f].value=parseInt(stock.value);

        }else if(parseInt(stock.value)===0 ){

            inputCuantity[f].value=0;
        
        }else if(parseInt(inputCuantity[f].value)<parseInt(stock.value) &&  parseInt(stock.value)!==0){

            inputCuantity[f].value=parseInt(inputCuantity[f].value)+1;
        }

    }





    //decrement product for cart
    const ControlLess = (inputCuantity,stock,f)=>{

        if(parseInt(inputCuantity[f].value) === parseInt(stock.value) && parseInt(stock.value)!==0){
          
            inputCuantity[f].value=parseInt(inputCuantity[f].value)-1;

        }else if(parseInt(stock.value)===0 ){

            inputCuantity[f].value=0;

        }else if(parseInt(inputCuantity[f].value)<parseInt(stock.value) &&  parseInt(inputCuantity[f].value)!==0){

            inputCuantity[f].value=parseInt(inputCuantity[f].value)-1;

        }else if(parseInt(inputCuantity[f].value)===0){

            inputCuantity[f].value=0;

        }

    }





        

      let mas = document.getElementsByClassName('mas');
      let menos = document.getElementsByClassName('menos');
      let cantidad = document.getElementsByClassName('cantidad');
      let stock = document.getElementsByClassName('stock');
      let cart = document.getElementsByClassName('carrito');
      let idProduct = document.getElementsByClassName('id-product');


      for(let i=0;i<cantidad.length;i++){

        menos[i].addEventListener('click',()=>{

          ControlLess(cantidad,stock[i],i);

        });


        mas[i].addEventListener('click',()=>{

          ControlMore(cantidad,stock[i],i);

        });

        cart[i].addEventListener('click',()=>{

          

          if($('.type-user').val()==="desconocido"){

              $('.contenedor-msg').toggleClass('d-none');
          
          }else{

              

              if(parseInt(cantidad[i].value)===0){

                  $('#texto1').empty();
                  $('#texto2').empty();

                  $('#texto1').append(`No puedes agregar "0" unidades`);
                  $('#texto2').append(`Si no te permite añadir unidades es por que no hay stock disponible`);

                  $('.contenedor-msg').toggleClass('d-none');

              }else{
             
               cart[i].innerHTML=`
               <div class="p-2 d-flex justify-content-center">
                  <div style="width: 2rem; height: 2rem;" class="spinner-border text-success" role="status">
                      
                      <span class="sr-only">Loading...</span>

                  </div>
                </div>
               
               `;

                const addCart = new FormData();
                
                //console.log("<?php //echo $_SESSION['user'][0]['id_usuario'] ?>");
                console.log(idProduct[i].value);
                addCart.append('add-product',idProduct[i].value);

                let path = "api/interfaces/addCart.php";

                fetch(path,{

                  method : 'POST',
                  body : addCart
                
                })
                .then(response=>response.json())
                .then(response=>{

                  cart[i].innerHTML="Añadido";

                })
                


              }

          }


        });

      }




    </script>

    <?php

if(!isset($_SESSION['user'])){

  echo '<script src="js/menuuser.js"></script>';

}else{

  echo '<script src="js/user.js"></script>';

}



?>
</body>
</html>