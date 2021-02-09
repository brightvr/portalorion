<?php
session_start();

if(!isset($_SESSION['user'])){

    header('Location:https://google.com');
}
var_dump($_POST);
var_dump($_SESSION);

require_once '../conexion.php';
require_once '../funcionalidades/updateuser.php';

$update= new UpdateUser($miconexion->Conectando(),$_SESSION['user'][0]['id_usuario'],$_POST['nombre'],$_POST['ciudad'],$_POST['barrio'],$_POST['direccion'],$_POST['telefono']);

if($update->Update()){

    header('Location:../perfil.php?response=Datos actualizados correctamente');

}else{

    header('Location:../perfil.php?response=Error al actualizar datos intentalo mas tarde');

}

?>