<?php
session_start();


if(!isset($_SESSION['usuario'])){

  header('Location:https://google.com');
}



if(isset($_GET['response'])){

  echo  '<div class="alert alert-success d-flex justify-content-center">'.$_GET['response'].'</div>';
}


require_once 'crud/conexion.php';

$consulta="select * from categorias";


$query =mysqli_query($miconexion->Conectando(),$consulta);

while($res= mysqli_fetch_assoc($query)){

  $categorias[]=$res;

}


//var_dump($categorias[0])

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

    .pantalla2{

      width: 100%;
      height: 100vh;
      position: fixed;
      overflow-y: scroll;
      background: white;
    }
    .cerrar{

      color: red;
      font-size: 40px;

    }

    .subir-producto{

      width: 90%;
      height: 90vh;
      margin-left: 5%;
      margin-top: -250px;
      overflow-y: scroll;

        
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
      <li class="nav-item">
        <a class="nav-link" href="ventas.php">VENTAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pedidos.php">PEDIDOS</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="inventario.php">INVENTARIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="etiquetas.php">ETIQUETAS</a>
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

<div class="container">
    <div class="btn btn-block btn-success btn-productos"><h3>Productos</h3></div>
</div>
<br>
<div class="container">
    <div class="btn btn-block btn-success btn-categorias"><h3>Categorias</h3></div>
</div>




    <script src="librerias/jquery/jquery-3.5.1.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="librerias/icons/js/all.js"></script>

    <script>

    $(window).on('load',function(){



      
      // crear pantalla categoria
      const ScreenCategory =()=>{

        window.location.href="inventario.php#categorias"

        $('body').prepend(`
      
        <div class="pantalla2">
        <br><br><hr><br>
        <div class="cerrar d-flex justify-content-end"><i class="fas fa-window-close"></i></div>
        <br>
        <div class="container">
        
        <div class="bg-success d-flex justify-content-center"><h2>CATEGORIAS</h2></div>
        <br><hr><br>
        <div class="btn btn-block btn-success crear-categoria"><h4>Crear Categoria</h4></div>
        <br>
        <div class="btn btn-block btn-warning editar-categoria"><h4>Editar Categoria</h4></div>
        <br>
        <div class="btn btn-block btn-danger borrar-categoria"><h4>Eliminar  Categoria</h4></div>
        </div>
        <br>
        <div class="contenido-categorias d-flex flex-wrap"></div>
        </div>
      
      `);


      
    //cerrar pantalla2
    $('.cerrar').on('click',function(){

      $('.pantalla2').remove();
      window.location.hash="";
    });





    //click editar categoria
    $('.editar-categoria').on('click',function(){

      $('.contenido-categorias').empty();

      $('.contenido-categorias').append(`

      <?php

     for($i =0;$i<count($categorias);$i++){

      echo ' 
      
      <div class="bg-warning  p-4 container d-flex justify-content-center m-3">
      
      <div class="card" style="width: 18rem;">
      <div class="card-header">
      Categoria : '.$categorias[$i]['nombre'].'
      </div>
      <form action="crud/category/updatecategory.php" method="POST">
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-none"><input type="text" name="id-categoria" value="'.$categorias  [$i]['id_categoria'].'"></li>
        <li class="list-group-item"><label>Nombre: </label> <br><br><input type="text" name="nuevo-nombre"></li>
        
      </ul>
      <button type="submit" class="btn btn-warning m-3"><h3>Actualizar categoria</h3></button>
      </form>
    </div>
      
      </div>
      <br>
      
      ';

     }
      
      ?>
      
      `);

    });//final click editar categoria




      //click borrar categoria
      $('.borrar-categoria').on('click',function(){

        $('.contenido-categorias').empty();

        $('.contenido-categorias').append(`

        <?php

        for($i =0;$i<count($categorias);$i++){

        echo ' 

        <div class="bg-danger  p-4 container d-flex justify-content-center m-3">

        <div class="card" style="width: 18rem;">
        <div class="card-header">
        Categoria : '.$categorias[$i]['nombre'].'
        </div>
        <form action="crud/category/deletecategory.php" method="POST">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-none"><input type="text" name="id-categoria" value="'.$categorias  [$i]['id_categoria'].'"></li>
          <li class="list-group-item d-none"><label>Nombre: </label> <br><br><input type="text" name="nuevo-nombre"></li>
          
        </ul>
        <button type="submit" class="btn btn-danger m-3"><h3>Borrar categoria</h3></button>
        </form>
        </div>

        </div>
        <br>

        ';

        }

        ?>

        `);

});//final click editar categoria








    $('.crear-categoria').on('click', function(){

      $('.contenido-categorias').empty();

      $('.contenido-categorias').append(`
      
      <div class="bg-success  p-4 container d-flex justify-content-center m-3">

         <form action="crud/category/createcategory.php" method="POST" class="bg-light  p-2">
          <div class="form-group">
            <label for="exampleInputEmail1"><h3>Crear Categoria</h3></label>
            <input name="nombre-categoria" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Escribe el nombre de la categoroa</small>
          </div>
          <button type="submit" class="btn btn-success"><h5>CREAR CATEGORIA</h5></button>
        </form>

      </div>
      
      `);


    });// fin click crear categoria





      }//final funcion





            
      // crear pantalla productos
      const ScreenProducts =()=>{

        window.location.href="inventario.php#productos"

        $('body').prepend(`

        <div class="pantalla2">
        <br><br><hr><br>
        <div class="cerrar d-flex justify-content-end"><i class="fas fa-window-close"></i></div>

        <br>
        <div class="container">
        
        
          <div class="btn btn-success btn-block btn-new-p"><h3>SUBIR PRODUCTO</h3></div>
          <div class="btn btn-primary btn-block ver-all"><h3>VER TODOS LOS PRODUCTOS</h3></div>
                 
                 
                 
        </div>
        <br>
        <hr>
        <br>
        
      <br>
      <br>

        <div class=" navbar-light bg-light">
          <br>
          <form action="crud/product/searchproduct.php" method="post" >
            <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Buscar producto" aria-label="Search"><br>
            <button class="btn btn-success btn-block my-2 my-sm-0" type="submit"><h5>Buscar producto</h5></button>
          </form>
          <br>
       </div>
        <br>
        

        <div class="container d-flex flex-wrap justify-content-center">
        
        <?php

        $consulta2="select * from productos";


        $query =mysqli_query($miconexion->Conectando(),$consulta2);

        while($res= mysqli_fetch_assoc($query)){

          $productos[]=$res;

         

        }
        
        //imprimiendo busqueda de productos
        if(isset($_SESSION['busqueda']) && $_SESSION['busqueda']!=='No se se encontraron coincidencias'){


          for($f=0;$f<count($_SESSION['busqueda']);$f++){


            echo '
          
            <div class="card m-4" style="width: 18rem;">
             <img src="'.$_SESSION['busqueda'][$f]['img'].'" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">'.$_SESSION['busqueda'][$f]['nombre'].'</h5>
              <hr>
               <ul class="list-group list-group-flush">
               <li class="list-group-item">Stock disponible : '.$_SESSION['busqueda'][$f]['stock'].'</li>
               <li class="list-group-item">Precio : '.$_SESSION['busqueda'][$f]['precio'].'</li>
               <li class="list-group-item">Precio descuento : '.$_SESSION['busqueda'][$f]['precio_descuento'].'</li>
             </ul>
               
               <a href="crud/product/update.php?producto='.$_SESSION['busqueda'][$f]['id_producto'].'" class="btn btn-warning m-2">Actualizar producto</a>
               <br>
               <a href="crud/product/delete.php?producto='.$_SESSION['busqueda'][$f]['id_producto'].'" class="btn btn-danger m-2">Eliminar producto</a>
             </div>
           </div>
                   
                   
                   ';
  
  
          }//final for

         
          unset($_SESSION['busqueda']);

        }//final if
        else if(isset($_SESSION['busqueda']) && $_SESSION['busqueda']==='No se se encontraron coincidencias'){

          echo '
          
          <div class="alert alert-danger d-flex justify-content-center"><h2>'.$_SESSION['busqueda'].'</h2></div>
          <br><br>
          
          ';

          unset($_SESSION['busqueda']);

        }// final else if
       
        else if(!isset($_SESSION['busqueda'])){


          for($f=0;$f<count($productos);$f++){


            echo '
          
            <div class="card m-4" style="width: 18rem;">
             <img src="../'.$productos[$f]['img'].'" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">'.$productos[$f]['nombre'].'</h5>
              <hr>
               <ul class="list-group list-group-flush">
               <li class="list-group-item">Stock disponible : '.$productos[$f]['stock'].'</li>
               <li class="list-group-item">Precio : '.$productos[$f]['precio'].'</li>
               <li class="list-group-item">Precio descuento : '.$productos[$f]['precio_descuento'].'</li>
             </ul>
               
               <a href="crud/product/update.php?producto='.$productos[$f]['id_producto'].'" class="btn btn-warning m-2">Actualizar producto</a>
               <br>
               <a href="crud/product/delete.php?producto='.$productos[$f]['id_producto'].'" class="btn btn-danger m-2">Eliminar producto</a>
             </div>
           </div>
                   
                   
                   ';
  
  
          }//final for


          

        }
       


        


     



        ?>
        
        </div>

        </div>

        `);

                    //ver todos los productos
            $('.ver-all').on('click',function(){


              window.location.href="inventario.php#productos" ;
              location.reload();

            })



    //cerrar pantalla2
    $('.cerrar').on('click',function(){

      $('.pantalla2').remove();
      window.location.hash="";
    });




    //subir producto
    $('.btn-new-p').on('click', function(){

      $('body').append(`
      
      <div class="subir-producto alert alert-success position-absolute">
      <br>

      <div class="cerrar d-flex justify-content-end"><i class="fas fa-window-close"></i></div>
      <br>
         <form action="../api/crud/subirproducto.php" method="POST"  enctype="multipart/form-data">

          <div class="form-group">
            <label >Nombre del producto:</label>
            <input type="text" name="nombre-producto" class="form-control" >
          </div>
          <br>
          <br>
          <div class="form-group">
            <label>Precio normal:</label>
            <input type="number" name="precio-producto" class="form-control" >
          </div>
          <br>
          <br>
          <div class="form-group">
            <label >Precio con descuento :</label>
            <input type="number" name="precio-descuento" class="form-control" >
          </div>
          <br>
          <br>
          <div class="form-group">
            <label >Stock :</label>
            <input type="number" name="stock-producto" class="form-control" >
          </div>
          <br>
          <br>
          <div class="form-group">
          <label for="exampleFormControlTextarea1">Descripcion :</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion-producto"></textarea>
          </div>
          <br>
          <br>

          <div class="form-group">
            <label>Info corta:</label>
            <input type="text" name="info-producto" class="form-control" >
          </div>
          <br><br>
          
          <div class="form-group">
          <label for="exampleFormControlFile1">Foto del producto :</label>
          <input type="file" name="img-producto" id="exampleFormControlFile1">
          </div>
          <br>
          <br>
         
          <label>Seleccione las categorias o tiendas a las que pertenece este producto :</label><br><br>

          <?php

            $consulta3="select * from categorias";
            $consulta4="select * from tiendasoficiales";


            $query =mysqli_query($miconexion->Conectando(),$consulta3);

            while($res= mysqli_fetch_assoc($query)){

              $categorias2[]=$res;

            

            }


            $query2 =mysqli_query($miconexion->Conectando(),$consulta4);

            while($res1= mysqli_fetch_assoc($query2)){

              $tiendas[]=$res1;

            
            }

            //tiendas
            for($h=0;$h<count($tiendas);$h++){

              echo '

              <br>
              <input type="checkbox" value="'.$tiendas[$h]['nombreTienda'].'"  name="tiendas-oficiales[]">
              <label>'.$tiendas[$h]['nombreTienda'].' </label>
              <br>
              
              
              ';
              
            }
              //categorias
            for($j=0;$j<count($categorias2);$j++){

              echo '

              <br>
              <input type="checkbox" value="'.$categorias2[$j]['nombre'].'" name="categorias[]">
              <label>'.$categorias2[$j]['nombre'].' </label>
              <br>
              
              
              ';
              
            }


            //var_dump($tiendas);
            //var_dump($categorias2);

          ?>            

 


          <br>
          <br>
          <button type="submit" class="btn btn-block btn-primary"><h3>Añadir producto</h3></button>
      </form>
      
      
      </div>
      
      `);

      $('.cerrar').on('click',function(){

        $('.subir-producto').remove();


      });

    });//fin subir producto




      }//final funcion



      //click categorias
    $('.btn-categorias').on('click', function(){
        
      ScreenCategory();

    });//fin on click

      //click categorias
      $('.btn-productos').on('click', function(){
        
        ScreenProducts();
  
      });//fin on click






    //consiciones iniciales

   if(window.location.hash==="#categorias"){

    ScreenCategory();

   }else if(window.location.hash==="#productos"){
   
     ScreenProducts();

   }else{

    $('.pantalla2').remove();
   }
    });


    </script>
</body>
</html>
