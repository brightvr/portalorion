<?php

require_once '../crud/conexion.php';

$consulta="select * from categorias";


$query =mysqli_query($miconexion->Conectando(),$consulta);

while($res= mysqli_fetch_assoc($query)){

  $categorias[]=$res;

}

echo json_encode($categorias);

?>