<?php

/*

1 determinar tipo de cambio

*/

var_dump($_POST);
var_dump($_FILES);


function KnowChange($data,$file){

    if(isset($data['categorias']) && $file['img-producto']['name']=='' && isset($data['tiendas-oficiales'])){

        return "cambiar todo menos img";

    }else if(isset($data['categorias']) && isset($_FILES['img-producto']['name']) && isset($data['tiendas-oficiales'])){

        return "cambio total";

    }else if(!isset($data['categorias']) && $file['img-producto']['name']=='' && isset($data['tiendas-oficiales'])){

        return "cambio info producto y tienda";

    }else if(isset($data['categorias']) && $file['img-producto']['name']=='' && !isset($data['tiendas-oficiales'])){

        return "cambio info producto y categoira";

    }else if(!isset($data['categorias']) && $file['img-producto']['name']=='' && !isset($data['tiendas-oficiales'])){

        return "cambio solo info producto";

    }else if(!isset($data['categorias']) && isset($_FILES['img-producto']['name']) && !isset($data['tiendas-oficiales'])){

        return "cambio img e info producto";

    }else if(!isset($data['categorias']) && isset($_FILES['img-producto']['name']) && isset($data['tiendas-oficiales'])){

        return "cambio img y tienda";

    }else if(isset($data['categorias']) && isset($_FILES['img-producto']['name']) && !isset($data['tiendas-oficiales'])){

        return "cambio img y categorias ";

    }else{

        return 'otro tipo de cambio';
    }
}



//cambiando solo datos del producto

function ChangeJustDataProduct($data,$conect){

    if(intval($data['stock-producto'])>0){
        
        $stock="Unidades disponibles";
    }else{

        $stock="No disponible";

    }

    $consulta="update productos set nombre='".$data['nombre-producto']."', precio='".$data['precio-producto']."', descripcion='".$data['descripcion-producto']."', stock='".$data['stock-producto']."', info_corta='".$data['info-producto']."', precio_descuento='".$data['precio-descuento']."', disponibilidad='".$stock."' where id_producto=".$data['id_producto'];

    if(mysqli_query($conect,$consulta)){


        //var_dump("actualizacion correcta");
        header('Location:../../admin-orion/inventario.php?response=Producto actualizado exitosamente');


    }else{

        //var_dump("Error al actualizar producto");
        header('Location:../../admin-orion/inventario.php?response=Error al actualizar el producto');

    }
}



function ChangeImgAdnData($data, $img, $conect){

    //borrar img anterior
    $select="select img from productos where id_producto=".$data['id_producto'];
    $query=mysqli_query($conect,$select);

    while($response=mysqli_fetch_assoc($query)){

        $img_antigua[]=$response;
    }

    if(file_exists('../../'.$img_antigua[0]['img'])){

        if(unlink('../../'.$img_antigua[0]['img'])){


             //subir imagen nueva

            $carpeta_destino='../assets/img/'.$img['img-producto']['name'];

         
          if(move_uploaded_file($img['img-producto']['tmp_name'],$carpeta_destino)){

            //actualizar info producto

            if(intval($data['stock-producto'])>0){
                
                $stock="Unidades disponibles";

            }else{

                $stock="No disponible";
            }

            $update="
            update productos set nombre='".$data['nombre-producto']."', precio='".$data['precio-producto']."', descripcion='".$data['descripcion-producto']."', img='api/assets/img/".$img['img-producto']['name']."', stock='".$data['stock-producto']."', info_corta='".$data['info-producto']."', precio_descuento='".$data['precio-descuento']."', disponibilidad='".$stock."' where id_producto=".$data['id_producto']."
            
            ";

            if(mysqli_query($conect,$update)){

               // var_dump("Producto actualizado correctamente");
               header('Location:../../admin-orion/inventario.php?response=Producto actualizado exitosamente');

            
            }else{

               // var_dump("errro al actualizar el producto");
               header('Location:../../admin-orion/inventario.php?response=Error al actualizar el producto');

            }


          }else{

           // var_dump("error al subir la imagen nueva");
            header('Location:../../admin-orion/inventario.php?response=Error al subir la imagen nueva');

          } 

        
            }else{
        
                //var_dump("error al eliminar imagen");
                header('Location:../../admin-orion/inventario.php?response=Error al eliminar imagen antigua');

            }

    }else{
            //subir imagen nueva


                         //subir imagen nueva

            $carpeta_destino='../assets/img/'.$img['img-producto']['name'];

         
          if(move_uploaded_file($img['img-producto']['tmp_name'],$carpeta_destino)){

            //actualizar info producto

            if(intval($data['stock-producto'])>0){
                
                $stock="Unidades disponibles";

            }else{

                $stock="No disponible";
            }

            $update="
             update productos set nombre='".$data['nombre-producto']."', precio='".$data['precio-producto']."', descripcion='".$data['descripcion-producto']."', img='api/assets/img/".$img['img-producto']['name']."', stock='".$data['stock-producto']."', info_corta='".$data['info-producto']."', precio_descuento='".$data['precio-descuento']."', disponibilidad='".$stock."' where id_producto=".$data['id_producto']."
            
            ";

            if(mysqli_query($conect,$update)){

                //var_dump("Producto actualizado correctamente");
                header('Location:../../admin-orion/inventario.php?response=Producto actualizado exitosamente');

            
            }else{

                //var_dump("errro al actualizar el producto");
                header('Location:../../admin-orion/inventario.php?response=Error al actualizar el producto');

            }


          }else{

            //var_dump("error al subir la imagen nueva");
            header('Location:../../admin-orion/inventario.php?response=Error al subir la imagen nueva');

          } 

    }

    
}


function ChangeDataAndCategory($id_producto,$categorias,$relaciones,$conect){

    $data_read=[];
    
    for ($i=0; $i <count($categorias); $i++) { 

        
        $consultas="select * from categorias where nombre='".$categorias[$i]."'";
        
       
        $miquery=mysqli_query($conect,$consultas);
        
        
        while($res= mysqli_fetch_assoc($miquery)){
        
                $data_read[]=$res;
        }
        
    }



        //var_dump($data_read);



    if($relaciones[0]==="este producto no pertenece a ninguna categoria"){

        
        for($f=0;$f<count($data_read);$f++){

            $miinsert="insert into categorias_productos values(null,".$id_producto.",".$data_read[$f]['id_categoria'].")";

            if(mysqli_query($conect,$miinsert)){

                //var_dump($miinsert);
               // var_dump("relacion creada correctamente");

                $response_total=true;

            }else{

                //var_dump("no se pudo crear relacion");
                $response_total=false;
                header('Location:../../admin-orion/inventario.php?response=No se pudo crear las realciones categoria_producto');
            }


        }
       
    }else{


        for($h=0;$h<count($relaciones);$h++){

            $delete="delete from categorias_productos where id_categoria_producto=".$relaciones[$h];

            if(mysqli_query($conect,$delete)){

                //var_dump("categorias viejas eliminadas correctamente");

                $response_delete=true;

            }else{

                //var_dump("Las categorias no se pudiero eliminar");

                header('Location:../../admin-orion/inventario.php?response=No se pudieron eliminar las realciones categoria_producto viejas');

            }
        }

        if($response_delete){

            for($f=0;$f<count($data_read);$f++){

                $miinsert="insert into categorias_productos values(null,".$id_producto.",".$data_read[$f]['id_categoria'].")";
    
                if(mysqli_query($conect,$miinsert)){
    
                    //var_dump($miinsert);
                    //var_dump("relacion creada correctamente");
                    $response_total=true;
    
                }else{
                    $response_total=false;
                    header('Location:../../admin-orion/inventario.php?response=No se pudieron crear las realciones categoria_producto nuevas');

                    //var_dump("no se pudo crear relacion");
                }
    
    
            }
        }else{
            //var_dump("error al borrar las categorias viejas");
            $response_total=false;
            header('Location:../../admin-orion/inventario.php?response=No se pudieron borrar las realciones categoria_producto viejas');

        }



    }

return $response_total;

}





require_once 'conexion.php';



if(KnowChange($_POST,$_FILES)==="cambio solo info producto"){


    ChangeJustDataProduct($_POST,$miconexion->Conectando());

}else if(KnowChange($_POST,$_FILES)==='cambio img e info producto'){

    //var_dump(KnowChange($_POST,$_FILES));
   // die();
    ChangeImgAdnData($_POST,$_FILES,$miconexion->Conectando());
    
}else if(KnowChange($_POST,$_FILES)==="cambio info producto y categoira"){

  if(ChangeDataAndCategory($_POST['id_producto'],$_POST['categorias'],$_POST['id_categoria_producto'],$miconexion->Conectando())){

    ChangeJustDataProduct($_POST,$miconexion->Conectando());
  }

}





?>