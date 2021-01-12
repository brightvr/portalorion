<?php

session_start();

if(!isset($_SESSION['usuario'])){

  header('Location:https://google.com');
}



//var_dump($_GET);

require_once '../conexion.php';

$consulta="select * from productos where id_producto=".$_GET['producto'];


$query =mysqli_query($miconexion->Conectando(),$consulta);

while($res= mysqli_fetch_assoc($query)){

  $productos[]=$res;

}


$response=$productos;


if($response==null){
    
    $response="No se se encontraron coincidencias";
    //var_dump($response);
}

//__________________________________________________________________________________________

$categoria_producto=null;
$consulta2="select * from categorias_productos where id_producto=".$_GET['producto'];

$query2=mysqli_query($miconexion->Conectando(),$consulta2);


while($data=mysqli_fetch_assoc($query2)){

    $categoria_producto[]=$data;
}

if($categoria_producto==null){

   $categoria_producto="este producto no pertenece a ninguna categoria";

}
//var_dump($categoria_producto);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../librerias/icons/css/all.css">

</head>
<body>
<br>
<div class="container">
    <a href="../../inventario.php#productos" class="btn btn-block btn-success"><h2>REGRESAR</h2></a>
</div>

<br>
<br>


<div class="container alert alert-dark">

<form action="../../../api/crud/actualizarproducto.php" method="POST"  enctype="multipart/form-data">

<div class="form-group">
  <label >Nombre del producto:</label>
  <input type="text" name="nombre-producto" class="form-control" value="<?php echo $response[0]['nombre'] ?>">
</div>
<br>
<br>
<div class="form-group">
  <label>Precio normal:</label>
  <input type="number" name="precio-producto" class="form-control" value="<?php echo $response[0]['precio'] ?>" >
</div>
<br>
<br>
<div class="form-group">
  <label >Precio con descuento :</label>
  <input type="number" name="precio-descuento" class="form-control" value="<?php echo $response[0]['precio_descuento'] ?>">
</div>
<br>
<br>
<div class="form-group">
  <label >Stock :</label>
  <input type="number" name="stock-producto" class="form-control" value="<?php echo $response[0]['stock'] ?>">
</div>
<br>
<br>
<div class="form-group">
<label for="exampleFormControlTextarea1">Descripcion :</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion-producto" ><?php echo $response[0]['descripcion'] ?></textarea>
</div>
<br>
<br>

<div class="form-group">
  <label>Info corta:</label>
  <input type="text" name="info-producto" class="form-control" value="<?php echo $response[0]['info_corta'] ?>">
</div>
<br><br>

<?php if( isset($categoria_producto[0]['id_categoria_producto'])){

    for($h=0;$h<count($categoria_producto);$h++){


        echo '
        <input 
        type="text" 
        class="d-none" 
        name="id_categoria_producto[]"
        value="'. $categoria_producto[$h]['id_categoria_producto'].'">
        ';
    }

   
}else{

    echo '
    <input 
    type="text" 
    class="d-none" 
    name="id_categoria_producto[]"
    value="'. $categoria_producto.'">
    ';
} 

echo '<input type="number" class="d-none" value="'.$_GET['producto'].'" name="id_producto">';

?>

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
<button type="submit" class="btn btn-block btn-primary"><h3>Actualizar producto</h3></button>
</form>  


</div>
    


    
    <script src="../../librerias/jquery/jquery-3.5.1.js"></script>
    <script src="../../librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../librerias/icons/js/all.js"></script>
</body>
</html>