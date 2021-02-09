
<?php

session_start();

//var_dump($_SESSION);
//var_dump($_POST);
//die();


use MercadoPago\Shipments;

if(isset($_POST['nombre-cliente'])){


  $_SESSION['cliente']=$_POST;
  $_SESSION['mercado-pago']=true;
  $_SESSION['pago-pendiente']="Pago en proceso";

}else{

  header('Location:https://google.com');
}

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


//var_dump($_SESSION);


/*

GENERADOR DE USUARIOS :

curl -X POST \
-H "Content-Type: application/json" \
-H 'Authorization: Bearer TEST-2420259730214944-011916-eb70a00057e6480e506bae8cf6e2de52-565287926' \
"https://api.mercadopago.com/users/test_user" \
-d '{"site_id":"MCO"}'


USUARIO DE PRUEBA 1 COMPRADOR :
{
  "id":703932518,
  "nickname":"TETE4309602",
  "password":"qatest3929",
  "site_status":"active",
  "email":"test_user_40874876@testuser.com"
}


USUARIO DE PRUEBA 2 VENDEDOR :

{
  "id":703943128,
  "nickname":"TETE434423",
  "password":"qatest610",
  "site_status":"active",
  "email":"test_user_43636318@testuser.com"}

*/


// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-2420259730214944-011916-b0809548eac8d970b4f9e00b66bd6c60-565287926');

$preference = new MercadoPago\Preference();
/*
$preference->back_urls =array(

  "success"=>"http://localhost/portalorion/usuarios/comprausuario.php",
  "failure"=>"http://localhost/portalorion/ventas/pendiente.php",
  "pending"=>"http://localhost/portalorion/ventas/error.php"

);*/
$preference->back_urls =array(

  "success"=>"https://portalorion.store/usuarios/comprausuario.php",
  "failure"=>"https://portalorion.store/ventas/pendiente.php",
  "pending"=>"https://portalorion.store/ventas/error.php"

);


$preference->auto_return = "approved";

$shipment= new Shipments();
$shipment->cost=intval($_SESSION['venta']['envio']);
$shipment->mode="not_specified";



// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = $_SESSION['venta']['producto'];
$item->quantity = intval($_SESSION['venta']['cantidad']);
$item->unit_price = intval($_SESSION['venta']['precioxUnidad']);



// Crea un objeto de preferencia


$preference->items = array($item);
$preference->shipments=$shipment;
$preference->save();



header('Location:'.$preference->init_point);


?>

<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>


<script>

window.Mercadopago.setPublishableKey("APP_USR-dcf2f3c1-0dc9-4bd0-ad5c-bc1d7fbd79ab");


</script>