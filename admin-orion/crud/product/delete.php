<?php


if(!isset($_SESSION['usuario'])){

    header('Location:https://google.com');
}
  
  
    var_dump($_GET);


    function Borrar($id_producto,$conect){

        $delete1="delete from categorias_productos where id_producto=".$id_producto;
        $delete2="delete from productos where id_producto=".$id_producto;

        $deletes=[$delete1,$delete2];

        for($i=0;$i<count($deletes);$i++){

            if(mysqli_query($conect,$deletes[$i])){

                var_dump("producto y relaciones eliminadas con exito");
                header("Location:../../inventario.php?response=Productos y relaciones eliminadas correctamente");
            
            }else{

                var_dump("error al eliminar producto y relaciones");
                header("Location:../../inventario.php?response=Error al eliminar productos y relaciones");


            }
        }
    }
    
    require_once '../conexion.php';
    
    Borrar($_GET['producto'],$miconexion->Conectando());

?>