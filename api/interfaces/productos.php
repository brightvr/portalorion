<?php
require_once '../crud/conexion.php';

$consulta="select * from productos";

$productos=null;
$query =mysqli_query($miconexion->Conectando(),$consulta);

while($res= mysqli_fetch_assoc($query)){

  $productos[]=$res;

}

if($productos===null){

  echo json_encode("Esta categoria se encuentra vacia por el momento");

}else{
  
  echo json_encode($productos);
}

?>