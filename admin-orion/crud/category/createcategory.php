<?php

if(!isset($_SESSION['usuario'])){

    header('Location:https://google.com');
  }
  
  
require_once '../conexion.php';
//var_dump($_POST);

$consulta= "insert into categorias values(null,"."'".$_POST['nombre-categoria']."')";

var_dump($consulta);


if(mysqli_query($miconexion->Conectando(),$consulta)){

    header('Location:../../inventario.php?response=Categoria creada correctamente');
}else{

    header('Location:../../inventario.php?response=Error al crear categoria, intentalo mas tarde');
}

?>