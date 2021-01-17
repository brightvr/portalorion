<?php

if(isset($_POST['nombre-cliente'])){

    require_once '../conexion.php';

    session_start();

  $insert="insert into ventas values(null,'".$_POST['nombre-cliente']."','".$_POST['ciudad-cliente']."','".$_POST['barrio-cliente']."','".$_POST['direccion-cliente']."','".$_POST['celular-cliente']."','".$_SESSION['venta']['subtotal']."','".$_SESSION['venta']['envio']."','".$_POST['metodo-pago']."','".$_SESSION['venta']['estado']."');";
    var_dump($insert);

    if(mysqli_query($miconexion->Conectando(),$insert)){

        $select = "select id_venta from  ventas where nombre_cliente ='".$_POST['nombre-cliente']."' and direccion='".$_POST['direccion-cliente']."'";

        $query=mysqli_query($miconexion->Conectando(),$select);

        while($response=mysqli_fetch_assoc($query)){

            $id_venta[]=$response;
        }

        session_destroy();
        header('Location:../envios.php?response=¡COMPRA EXITOSA! el número de seguimiento de tu pedido es: '.$id_venta[0]['id_venta'].' anótalo');



    }else{
        var_dump("error al actualizar datos");
    }

}else{

    header('Location:https://google.com');
}


?>