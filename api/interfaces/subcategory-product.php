<?php

if(isset($_POST['subcategoria'])){ 

    require_once '../crud/conexion.php';

    $consulta = '
        select p.id_producto, p.nombre, p.precio, p.img, p.stock
        from productos p, subcategoria s, subcategorias_productos x  
        where s.nombre="'.$_POST['subcategoria'].'" and s.id_subcategoria=x.id_subcategria and p.id_producto=x.id_producto';


    $subcategorias = null;
    $query = mysqli_query($miconexion->Conectando(),$consulta);

    while($res = mysqli_fetch_assoc($query)){

        $subcategorias[]=$res;

    }

    if($subcategorias===null){

        echo json_encode('No se encontraron resultados');

    }else{
        
        echo json_encode($subcategorias);
    }

}else{

    echo json_encode('No estas enviando nada por POST');

}

?>