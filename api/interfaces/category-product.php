<?php

if(isset($_POST['categoria'])){ 

    require_once '../crud/conexion.php';

    $consulta = '
        select p.id_producto, p.nombre, p.precio, p.img, p.stock
        from productos p, categorias c, categorias_productos x  
        where x.id_categoria='.$_POST['categoria'].' and c.id_categoria=x.id_categoria and p.id_producto=x.id_producto';


    $categorias = null;
    $query = mysqli_query($miconexion->Conectando(),$consulta);

    while($res = mysqli_fetch_assoc($query)){

        $categorias[]=$res;

    }

    if($categorias===null){

        echo json_encode('No se encontraron resultados');

    }else{
        
        echo json_encode($categorias);
    }

}else{

    echo json_encode('No estas enviando nada por POST');

}

?>