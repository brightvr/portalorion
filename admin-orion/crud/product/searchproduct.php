<?php


if(!isset($_SESSION['usuario'])){

  header('Location:https://google.com');
}




require_once '../conexion.php';

$consulta='select * from productos where nombre like "%'.$_POST['buscar'].'%";';


$query =mysqli_query($miconexion->Conectando(),$consulta);

while($res= mysqli_fetch_assoc($query)){

  $productos[]=$res;

}



$_SESSION['busqueda']=$productos;


if($_SESSION['busqueda']==null){
    
    $_SESSION['busqueda']="No se se encontraron coincidencias";
}

header('Location:../../inventario.php#productos');

?>