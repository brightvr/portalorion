<?php

   
    var_dump($_SERVER['DOCUMENT_ROOT']);
    var_dump($_POST);
    var_dump($_FILES);
    //die();

    function IdCategoriaProducto($selectData,$conect){
        
        $categoriaProducto=array();

        for ($i=0;$i<count($selectData);$i++){

            $consultas=mysqli_query($conect,$selectData[$i]);

            while ($response = mysqli_fetch_assoc($consultas)) {

                $categoriaProducto[]=$response;
                //var_dump($categoriaProducto);
                

            }
            
        }


        return $categoriaProducto;
    }

    function BD_CategoriaProducto($data,$conexion){

        for ($i=1;$i<count($data);$i++){

            $miinsert="insert into categorias_productos values(null,".$data[0]['id_producto'].",".$data[$i]['id_categoria'].")";


            if(mysqli_query($conexion,$miinsert)){

               // var_dump("relacion categoria producto agregada con exito");
               header('Location:../../admin-orion/inventario.php?response=Producto subido exitosamente');
            
            }else{

                header('Location:../../admin-orion/inventario.php?response=fallo al insertar relacion categoria producto');
               // var_dump("fallo al insertar relacion categoria producto");
            }
        }

       
    }

    //esta funcion es la encargada de guardar la img en el servidor y en la bbdd
    // es booleana , true=oprecion exitosa false=error en la operacion
    function SaveImg($nombre_img,$carpeta_destino,$carpeta_temporal,$dataProducto,$rutaDB,$tiendaOficial,$miconexion){

       
       
        if(move_uploaded_file($carpeta_temporal,$carpeta_destino.$nombre_img)){

            if(intval($dataProducto['stock-producto'])>0){

                $disponibilidad="Unidades disponibles";
            }else{

                $disponibilidad="No disponible";

            }



            $insertProduct="insert into productos values(null,'".$dataProducto['nombre-producto']."','".$dataProducto['precio-producto']."','".$dataProducto['descripcion-producto']."','".$rutaDB."','".$dataProducto['stock-producto']."','".$dataProducto['info-producto']."','".$dataProducto['precio-descuento']."','{$disponibilidad}','".$tiendaOficial."','".$dataProducto['mercado-libre']."')";


            if(mysqli_query($miconexion->Conectando(),$insertProduct)){

                return true;
                
            }else{

                return false;
            }

           
         

           

        }else{

            return true;
        }



    }


    if(isset($_POST['tiendas-oficiales'])){


        if($_POST['tiendas-oficiales'][0]==="Cannabis Shop"){

            $pathSave="../assets/cannabis-shop/img/";
            $pathDB="api/assets/cannabis-shop/img/".$_FILES['img-producto']['name'];
            $tiendaOficial=1;
            
        }

    }
    else{

        $pathSave="../assets/img/";
        $pathDB="api/assets/img/".$_FILES['img-producto']['name'];
        $tiendaOficial=0;


    }


    require_once 'conexion.php';


    if(SaveImg($_FILES['img-producto']['name'],$pathSave,$_FILES['img-producto']['tmp_name'],$_POST,$pathDB,$tiendaOficial,$miconexion)){

        //var_dump('imagen subida con exito '.$pathSave);

        $consultas=array("select nombre, id_producto from productos where nombre='".$_POST['nombre-producto']."';");

        for($f=0;$f<count($_POST['categorias']);$f++){

            $laquery="select nombre, id_categoria from categorias where nombre='".$_POST['categorias'][$f]."';";

            $consultas[]=$laquery;
        }

        //var_dump($consultas);
       

    
      BD_CategoriaProducto( IdCategoriaProducto($consultas,$miconexion->Conectando()),$miconexion->Conectando());

    }else{

        header('Location:../../admin-orion/inventario.php?response=fallo al subir imagen, posiblemente el nombre de la imagen este repetido, intentelo de nuevo');
        //var_dump('fallo al subir imagen, posiblemente el nombre de la imagen este repetido, intentelo de nuevo');
    }


?>