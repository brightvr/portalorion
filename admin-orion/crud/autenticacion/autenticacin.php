<?php

var_dump($_POST);

require_once '../conexion.php';

$consulta= "select * from administradores where correo='".$_POST['correo']."'";

$credenciales=null;

$query =mysqli_query($miconexion->Conectando(),$consulta);
while($res= mysqli_fetch_assoc($query)){

    $credenciales[]=$res;
  
  }
  
  var_dump($credenciales);

  if($credenciales===null){

    header('Location:../../index.php?response=Error de autenticacion');

  }else{

    if($credenciales[0]['contraseña']===$_POST['contraseña']){

        session_start();

        $_SESSION['usuario']=$credenciales[0];

        header('Location:../../bright.php');
    
    }else{

        header('Location:../../index.php?response=Error de autenticacion');

    }
  }
?>