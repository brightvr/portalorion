<?php

    if(isset($_POST['buscar'])){ 

        require_once '../crud/conexion.php';

        $consulta='select * from categorias where nombre like "%'.$_POST['buscar'].'%";';

        $categorias=null;
        $query =mysqli_query($miconexion->Conectando(),$consulta);

        while($res= mysqli_fetch_assoc($query)){

        $categorias[]=$res;

        }

        if($categorias===null){

            echo json_encode("Esta categoria se encuentra vacia por el momento");

        }else{
            
            echo json_encode($categorias);
        }
        
    }else{

        echo json_encode('No se encontraron resultados para'.$_POST['buscar']);

    }

?>