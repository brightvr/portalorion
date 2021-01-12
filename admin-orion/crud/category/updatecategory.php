<?php


if(!isset($_SESSION['usuario'])){

    header('Location:https://google.com');
  }
  
  

require_once '../conexion.php';
//var_dump($_POST);

$consulta= "update categorias set nombre= '".$_POST["nuevo-nombre"]."' where id_categoria=".$_POST['id-categoria'];

//var_dump($consulta);

if(mysqli_query($miconexion->Conectando(),$consulta)){

    header('Location:../../inventario.php?response=Categoria actualizada correctamente');
}else{

    header('Location:../../inventario.php?response=Error al actualizar categoria, intentalo mas tarde');
}

?>