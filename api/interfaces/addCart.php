<?php

if(isset($_POST['add-product'])){

    require_once '../crud/conexion.php';
    require_once '../../funcionalidades/carrito.php';
    session_start();
    $cart = new Cart($_SESSION['user'][0]['id_usuario'],$_POST['add-product'],$miconexion->Conectando());
    
    echo json_encode($cart->AddProduct($cart->GetIdCart()[0]['id_carrito']));

}else{

    echo json_encode('No estas enviando nada por post');
}

?>