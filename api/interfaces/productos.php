<?php
require_once '../crud/conexion.php';

$consulta="select * from productos";


$query =mysqli_query($miconexion->Conectando(),$consulta);

while($res= mysqli_fetch_assoc($query)){

  $productos[]=$res;

}

echo json_encode($productos);

?>