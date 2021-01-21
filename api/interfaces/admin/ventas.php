<?php

session_start();

if(!isset($_SESSION['usuario'])){

    header('Location:https://google.com');
  }
  
  require_once '../../crud/conexion.php';

$consulta="select * from ventas";

$ventas=null;
$query =mysqli_query($miconexion->Conectando(),$consulta);

while($res= mysqli_fetch_assoc($query)){

  $ventas[]=$res;

}

if($ventas===null){

  echo json_encode("No existen ventas disponibles");

}else{
  
  echo json_encode($ventas);
}


?>