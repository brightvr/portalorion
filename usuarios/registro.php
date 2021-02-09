<?php

    require_once '../conexion.php';
    require_once '../funcionalidades/registro.php';


    $registro= new Registro($_POST,$miconexion->Conectando());


    if($registro->VerfyEmail()===null){


        //var_dump("se puede hacer registro");


        if($registro->NewUser($registro->EncriptPassword())){


            
            if($registro->GetNewUser()===null){

                header('Location:../index.php?response=Lo sentimos tuvimos problemas con tu cuenta por favor revisa este correo '.$_POST['correo-usuario']);
            
            }else{
            
                session_start();
                $_SESSION['user']=$registro->GetNewUser();
                header('Location:../index.php');
            }

        }
        else{


            header('Location:../index.php?response=Error al crear usuario porfavor intentalo mas tarde');

        

        }



    }
    else{

        header('Location:../index.php?response=Error el correo '.$_POST['correo-usuario'].' ya existe');
    
    }






?>