<?php
require_once '../crud/conexion.php';

$consulta="select * from  productos p, categorias_productos c  where c.id_categoria=17 and p.id_producto=c.id_producto";

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