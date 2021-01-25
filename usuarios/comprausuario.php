<?php

    session_start();
    //var_dump($_SESSION);
    //die();

    require_once '../conexion.php';
    require_once '../funcionalidades/comprausuario.php';

    if(isset($_SESSION['mercado-pago']) && !isset($_POST['celular-cliente'])){

        $_POST=$_SESSION['cliente'];
    }

    $addCompra= new Comprar($miconexion->Conectando(),$_SESSION['user'][0],$_SESSION['venta'],$_POST);

    if($addCompra->InsertVenta($addCompra->IdPedido(),$addCompra->Clave())){

        $ventaProducto=$addCompra->InsertRelacion('venta_producto',$addCompra->GetIdVenta()[0]['id_venta'],$_SESSION['venta']['id_producto']);
        $ventaUsuario=$addCompra->InsertRelacion('venta_usuario',$addCompra->GetIdVenta()[0]['id_venta'],$_SESSION['user'][0]['id_usuario']);


        if($ventaProducto && $ventaUsuario){



            if(isset($_POST['celular-cliente']) && $_POST['celular-cliente']===""){


                $updateUsuario= $addCompra->UpdateUsuer($_SESSION['user'][0]['id_usuario'],$_POST['barrio-localidad'],$_POST['direccion'],$_POST['celular-cliente']);

                if($updateUsuario){
        
                // var_dump("Venta, relaciones y actualizacion generada correctamente");
        
                    $select="select * from usuarios where id_usuario='".$_SESSION['user'][0]['id_usuario']."'";
        
                    $query=mysqli_query($miconexion->Conectando(),$select);
        
                    while($res=mysqli_fetch_assoc($query)){
        
                        $response[]=$res;
                    }
        
                    $_SESSION['user']="";
                    $_SESSION['user']=$response;
                    $_SESSION['stock-update']="Change stock";

                    header('Location:../compraexitosa2.php');
        
                }else{
        
                    var_dump("Error al actualizar datos de usuario");
        
                }

                
            }else{

                //var_dump("Venta y relaciones  generadas correctamente");
                $_SESSION['stock-update']="Change stock";
                header('Location:../compraexitosa2.php');


            }



        }else{

            var_dump("Error al crear relaciones venta-usuario venta-producto");
        }
    }else{

        var_dump("erro al insertar nueva venta");
    }

?>