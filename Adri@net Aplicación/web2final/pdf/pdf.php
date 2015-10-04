<?php

//Recibir detalles de factura
$id_factura = $_REQUEST["id"];


//Llamada al script fpdf
include("../fpdf/fpdf.php");
include("../conexion/conexion.php");
$db=conectar();



$pdf=new FPDF();  //crea el objeto
$pdf->AddPage();  //añadimos una página. Origen coordenadas, esquina superior izquierda, posición por defeto a 1 cm de los bordes.
$saq="SELECT * FROM factura where id_fact='".$id_factura."' ";
$aaq=mysql_query($saq,$db)or die(mysql_error());
$con= mysql_fetch_array($aaq);
$sub_total=$con['sub_total'];
$iva=$con['iva'];
$total=$con['total'];
$fecha_venta=$con['fecha_venta'];
$id_fact=$con['id_fact'];
$cedula=$con['cedula'];
//logo de la tienda
$pdf->Image('../imagenes/logo2.jpg' , 0 ,7, 80 , 25,'JPG', '../administraodr/micuenta_admi.php');

// Encabezado de la factura
$pdf->SetFont('Arial','B',14);
$pdf->Cell(190, 10, "Orden de compra", 0, 2, "C");
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5, "Número de orden: $id_fact"."\n"."Fecha: $fecha_venta", 0, "C", false);
$pdf->Ln(2);

$s="SELECT * FROM contacto ";
$q=mysql_query($s,$db)or die(mysql_error());
$c= mysql_fetch_array($q);
$contacto=$c['contacto'];
$telefono=$c['telefono'];
$rif=$c['rif'];
// Datos de la tienda
$pdf->SetFont('Arial','B',12);
$top_datos=40;
$nombre_tienda='Adri@net';
$pdf->SetXY(40, $top_datos);
$pdf->Cell(190, 10, "Datos de la Empresa:", 0, 2, "J");
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(190, //posición X
5, //posición Y
$nombre_tienda."\n".
"Dirección: ".$contacto."\n".
"Teléfono: ".$telefono."\n".
"RIF: ".$rif,
 0, // bordes 0 = no | 1 = si
 "J", // texto justificado 
 false);
$top_datoss=69;
$que="SELECT * FROM cliente where cedula='".$cedula."' ";
$qe=mysql_query($que,$db)or die(mysql_error());
$co= mysql_fetch_array($qe);
$nom_clie=$co['nom_clie'];
$dire_clie=$co['dire_clie'];
$telf_clie=$co['telf_clie'];


// Datos del cliente
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(40, $top_datoss);
$pdf->Cell(190, 10, "Datos del cliente:", 0, 2, "J");
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(
190, //posición X
5, //posicion Y
"Nombre & Apellido: ".$nom_clie."\n".
"Dirección: ".$dire_clie."\n".
"Cedula: ".$cedula, 
0, // bordes 0 = no | 1 = si
"J", // texto justificado
false);

//Salto de línea
$pdf->Ln(2);




//Creación de la tabla de los detalles de los productos productos
$top_productos = 105;
    $pdf->SetXY(35, $top_productos);
    $pdf->Cell(40, 5, 'UNIDADES', 0, 1, 'C');
    $pdf->SetXY(90, $top_productos);
    $pdf->Cell(40, 5, 'PRODUCTOS', 0, 1, 'C');
    $pdf->SetXY(135, $top_productos);
    $pdf->Cell(40, 5, 'PRECIO', 0, 1, 'C');    
 

$y = 110; // variable para la posición top desde la cual se empezarán a agregar los datos

$t="SELECT * FROM detalle_factu where id_fact='".$id_factura."' ";
$j=mysql_query($t,$db)or die(mysql_error());
while($n= mysql_fetch_array($j))
{

$id_pieza=$n['id_pieza'];
$cant=$n['cant'];
$precio=$n['precio'];

$w="SELECT * FROM producto where id_pieza='".$id_pieza."' ";
$g=mysql_query($w,$db)or die(mysql_error());
$m= mysql_fetch_array($g);

$nombre=$m['nom_pro'];

$pdf->SetFont('Arial','',8);
       
   $pdf->SetXY(35, $y);
    $pdf->Cell(40, 5,$cant, 0, 1, 'C');
    $pdf->SetXY(90, $y);
    $pdf->Cell(40, 5,$nombre, 0, 1, 'C');
    $pdf->SetXY(135, $y);
    $pdf->Cell(40, 5,$precio." Bsf", 0, 1, 'C');
$y = $y + 5;
}

$pdf->Ln(2);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(190, 5, "I.V.A: ".$iva."(12%)", 0, 1, "C");
$pdf->Cell(190, 5, "Subtotal: ".$sub_total." Bsf", 0, 1, "C");
$pdf->Cell(190, 5, "TOTAL: ".$total." Bsf", 0, 1, "C");


$pdf->Output();//cierra el objeto pdf



?>

