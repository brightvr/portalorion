<?php

session_start();

if(!isset($_SESSION['usuario'])){

  header('Location:https://google.com');
}


require_once '../crud/conexion.php';

if(isset($_GET['estado']) && $_GET['estado']==="En camino" || $_GET['estado']==="Entregado"){

    $update="update ventas set estado='".$_GET['estado']."' where id_pedido='".$_GET['pedido']."'";

    if(!mysqli_query($miconexion->Conectando(),$update)){


        var_dump("ERROR DE PEDIDO");
        header('Location:../ventas.php?response=ERROR DE PEDIDO');

    }

   
}





$consulta="select * from ventas where id_pedido='".$_GET['pedido']."'";



$query1=mysqli_query($miconexion->Conectando(),$consulta);


while($response=mysqli_fetch_assoc($query1)){

    $pedido[]=$response;
}


//var_dump($pedido);
//die();

//var_dump($pedido);


require_once 'fpdf/fpdf.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../../api/assets/img/logo-enviosorion.png',5,3,60);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Numero de guia: #'.$_GET['pedido']);
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

$pdf->Ln(10);
$pdf->Cell(170,10,'Tiendas oficiales Portal Orion',0,0,'C');
$pdf->Line(10,50,200,50);
$pdf->Ln(20);

$pdf->Cell(60,5,utf8_decode('Nombre destinatario :'));
$pdf->Cell(60,5,utf8_decode($pedido[0]['nombre_cliente']));
$pdf->Ln(8);


 $pdf->Cell(60,5,utf8_decode('N° de contacto :'));
 $pdf->Cell(60,5,utf8_decode($pedido[0]['telefono']));
 $pdf->Ln(8);

 $pdf->Cell(60,5,utf8_decode('Ciudad:'));
 $pdf->Cell(60,5,utf8_decode($pedido[0]['ciudad']));
 $pdf->Ln(8);

 $pdf->Cell(60,5,utf8_decode('Barrio/Localidad :'));
 $pdf->Cell(60,5,utf8_decode($pedido[0]['barrio']));
 $pdf->Ln(8);

 $pdf->Cell(60,5,utf8_decode('Direccion :'));
 $pdf->Cell(60,5,utf8_decode($pedido[0]['direccion']));
 $pdf->Ln(8);

 $pdf->Cell(60,5,utf8_decode('Producto :'));
 $pdf->Cell(60,5,utf8_decode($pedido[0]['nombre_product']));
 $pdf->Ln(8);

 $pdf->Cell(60,5,utf8_decode('Unidades :'));
 $pdf->Cell(60,5,utf8_decode($pedido[0]['cantidad_product']));
 $pdf->Ln(8);


 $pdf->Cell(60,5,utf8_decode('Costo producto :'));
 $pdf->Cell(60,5,utf8_decode('$ '.$pedido[0]['precio_compra'].' pesos cop'));
 $pdf->Ln(8);

 $pdf->Cell(60,5,utf8_decode('Costo envio :'));
 $pdf->Cell(60,5,utf8_decode('$ '.$pedido[0]['precio_envio'].' pesos cop'));
 $pdf->Ln(8);

 $pdf->Cell(60,5,utf8_decode('Forma de pago :'));
 $pdf->Cell(60,5,utf8_decode($pedido[0]['forma_de_pago']));
 $pdf->Ln(8);

 $pdf->Cell(60,5,utf8_decode('TOTAL A PAGAR :'));

 $total=intval($pedido[0]['precio_compra'])+intval($pedido[0]['precio_envio']);


 $pdf->Cell(60,5,utf8_decode('$ '.$total).' pesos cop');
 $pdf->Ln(8);





$pdf->Output();

?>