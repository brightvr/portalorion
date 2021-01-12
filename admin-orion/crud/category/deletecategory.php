<?php


if(!isset($_SESSION['usuario'])){

    header('Location:https://google.com');
  }
  
  

require_once '../conexion.php';
//var_dump($_POST);


//buscar relaciones entre categoria y producto
$categoriaProducto=null;

$select="select * from categorias_productos where id_categoria=".$_POST['id-categoria'];


$query =mysqli_query($miconexion->Conectando(),$select);

while($res= mysqli_fetch_assoc($query)){

  $categoriaProducto[]=$res;

}


//var_dump($categoriaProducto);
//die();

//_________________________________________________________________________-

//eliminar categoria sin relacion con producto
if($categoriaProducto===null){

    $consulta= "delete  from categorias where id_categoria=".$_POST['id-categoria'];


    if(mysqli_query($miconexion->Conectando(),$consulta)){

        header('Location:../../inventario.php?response=Categoria eliminada correctamente');
    }else{
    
        header('Location:../../inventario.php?response=Error al eliminar categoria, intentalo mas tarde');
    }




}else{



    //_____________________________________________________________________________________________________________________________________


//eliminar categoria relacionada con producto
$consulta_1="delete from categorias_productos where id_categoria_producto=".$categoriaProducto[0]['id_categoria_producto'];
$consulta= "delete  from categorias where id_categoria=".$_POST['id-categoria'];

//var_dump($consulta);

if(mysqli_query($miconexion->Conectando(),$consulta_1)){


    if(mysqli_query($miconexion->Conectando(),$consulta)){

        header('Location:../../inventario.php?response=Categoria eliminada correctamente');
    }else{
    
        header('Location:../../inventario.php?response=Error al eliminar categoria, intentalo mas tarde');
    }


}else{

    header('Location:../../inventario.php?response=Error al eliminar categoria, intentalo mas tarde');


}







}




?>