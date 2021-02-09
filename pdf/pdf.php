<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

session_start();


require_once 'fpdf/fpdf.php';
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../api/assets/img/logo-orion-png-oscuro.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Factura con numero de guia: #'.$_SESSION['id_pedido']);
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
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);


    //cabeceras principales titulos
    $pdf->Cell(70,10,utf8_decode(' Destinatario'),1,0,'C',0);
    $pdf->Cell(60,10,utf8_decode(' Producto '),1,0,'C',0);
    $pdf->Cell(40,10,utf8_decode(' PrecioxUnidad '),1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode(' Cantidad '),1,1,'C',0);

    //datos usuario 
    $pdf->Cell(70,10,utf8_decode($_SESSION['cliente']['nombre-cliente']),1,0,'C',0);
    $pdf->Cell(60,10,utf8_decode($_SESSION['venta']['producto']),1,0,'C',0);
    $pdf->Cell(40,10,utf8_decode('$ '.$_SESSION['venta']['precioxUnidad'].' pesos cop'),1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($_SESSION['venta']['cantidad']),1,0,'C',0);


    //espaciado
    $pdf->Cell(60,10,utf8_decode(' '),0,1,'C',0);
    $pdf->Cell(60,10,utf8_decode(' '),0,1,'C',0);
    $pdf->Cell(60,10,utf8_decode(' '),0,1,'C',0);

    //cabecera 2 titulos
    $pdf->Cell(63,10,utf8_decode(' Subtotal '),1,0,'C',0);
    $pdf->Cell(63,10,utf8_decode(' Envio '),1,0,'C',0);
    $pdf->Cell(63,10,utf8_decode(' Total '),1,1,'C',0);

 
    $pdf->Cell(63,10,utf8_decode('$ '.$_SESSION['venta']['subtotal'].' pesos cop'),1,0,'C',0);
    $pdf->Cell(63,10,utf8_decode('$ '.$_SESSION['venta']['envio'].' pesos cop'),1,0,'C',0);
    $pdf->Cell(63,10,utf8_decode('$ '.$_SESSION['venta']['total'].' pesos cop'),1,0,'C',0);

        //espaciado
        $pdf->Cell(60,10,utf8_decode(' '),0,1,'C',0);
        $pdf->Cell(60,10,utf8_decode(' '),0,1,'C',0);
        $pdf->Cell(60,10,utf8_decode(' '),0,1,'C',0);


 $pdf->Cell(195,10,utf8_decode('Esta factura es la garantia de tu compra por favor gardarla, recuerda consultar nuestros términos y condiciones'),0,1,'C',0);
 $pdf->Cell(195,10,utf8_decode('en https://portalorion.store , no olvides que tienes 14 días de proteccion contra fraudes y perdidas'),0,1,'C',0);

$pdf->Output();

unset($_SESSION['venta']);
unset($_SESSION['cliente']);

?>