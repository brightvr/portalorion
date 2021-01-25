<?php

    

    require_once '../conexion.php';
    require_once '../funcionalidades/autenticacion.php';


    $atuenticar=new Autenticacion($miconexion->Conectando(),$_POST['contraseña'],$_POST['correo']);
    
    
    if($atuenticar->GetHash()===null){

        header('Location:../index.php?response=Error de autenticacion verifique su correo y  contraseña');
    }
    
    
    if($atuenticar->VerifyPassword( $atuenticar->GetHash()['contraseña'])){

        $select="select * from usuarios where correo='{$_POST['correo']}'";

        $query=mysqli_query($miconexion->Conectando(),$select);


        while($res=mysqli_fetch_assoc($query)){

            $response[]=$res;
        }

        session_start();
        $_SESSION['user']=$response;


        header('Location:../index.php');




    }else{

        header('Location:../index.php?response=Error de autenticacion verifique su correo y  contraseña');

    }




?>