<?php

session_start();

if(isset($_SESSION['mercado-pago'])){

    $_POST=$_SESSION['cliente'];
}


if(isset($_POST['nombre-cliente'])){

    require_once '../conexion.php';

    

    $longitud=50;
    $clave=substr(md5(microtime()),1,$longitud);

    $longitud2=9;
    $clave2=substr(md5(microtime()),1,$longitud2);
  

  $insert="insert into ventas values(null,'".$_POST['nombre-cliente']."','".$_POST['ciudad-cliente']."','".$_POST['barrio-cliente']."','".$_POST['direccion-cliente']."','".$_POST['celular-cliente']."','".$_SESSION['venta']['subtotal']."','".$_SESSION['venta']['envio']."','".$_POST['metodo-pago']."','".$_SESSION['venta']['estado']."','".$clave."','".$clave2."','".$_POST['name-product']."','".$_POST['cantidad-product']."');";
   
  // var_dump($insert);

    if(mysqli_query($miconexion->Conectando(),$insert)){

        $select = "select id_venta, id_pedido, clave from  ventas where clave ='".$clave."' and direccion='".$_POST['direccion-cliente']."'";

        $query=mysqli_query($miconexion->Conectando(),$select);

        while($response=mysqli_fetch_assoc($query)){

            $id_venta[]=$response;
        }

        $insert2="insert into venta_producto values(null,'".$id_venta[0]['id_venta']."','".$_SESSION['venta']['id_producto']."')";

        //var_dump($insert2);
        //die();

        if(mysqli_query($miconexion->Conectando(),$insert2)){


            $_SESSION['cliente']=$_POST;
            $_SESSION['id_venta']=$id_venta[0]['id_venta'];
            $_SESSION['clave']=$id_venta[0]['clave'];
            $_SESSION['id_pedido']=$id_venta[0]['id_pedido'];
            $_SESSION['stock-update']="Change stock";
    
            header('Location:../compraexitosa.php?compra='.$id_venta[0]['id_pedido']);


        }else{

            var_dump("error venta_producto BBDD");
        }





    }else{
        var_dump("error al actualizar datos");
    }

}else{

    header('Location:https://google.com');
}


?>