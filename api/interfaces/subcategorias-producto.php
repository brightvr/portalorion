<?php

$consulta="insert into  subcategorias_productos values(null,".$_POST['subcategorias'].",".$_POST['productos'].")";

require_once '../crud/conexion.php';

$miquery=mysqli_query($miconexion->Conectando(),$consulta);

if($miquery){

    echo json_encode("Fila =>  values(null,".$_POST['subcategorias'].",".$_POST['productos'].") insertada correctamente");

}else{

    echo json_encode("Fallo al insertar fila =>  values(null,".$_POST['subcategorias'].",".$_POST['productos'].")");
}

//echo json_encode($consulta);

?>