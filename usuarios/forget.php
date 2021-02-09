<?php 

    require_once '../conexion.php';
    require_once '../funcionalidades/forget.php';

    var_dump($_POST);



    $olvidar=new Olvidar($_POST['email'],$_POST['metodo-recuperacion'],$miconexion->Conectando());

    var_dump($olvidar->CompararDB());

    if($olvidar->CompararDB()===null){

        header('Location:../contraseña.php?response=Error de recuperacion usuario desconocido');
    
    }else{


        if($olvidar->SaveForget()){

            header('Location:../contraseña.php?response=Todo listo, en breve nos comunicaremos contigo, recuerda la recuperacion por '.$_POST['metodo-recuperacion'].' tarda de 3 a 9 minutos');

        }else{

            header('Location:../contraseña.php?response=Error de recuperacion intentalo de nuevo');


        }
    }





?>