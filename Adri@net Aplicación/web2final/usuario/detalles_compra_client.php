<?php
session_start();

if(isset($_SESSION['autenticado'])!="SI")
{
echo '<script language javascript>
alert("Usuario no Autenticado");
window.location="/web2/inicio_session/inicio_form.php";
</script>';
}

elseif(isset($_SESSION['perfil']) && $_SESSION['perfil']!="usuario"){

echo '<script language javascript>
alert("el acesso del usuario no es correspomdiente con el perfil ");
window.location="/web2/inicio_session/inicio_form.php";
</script>';
}






?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Adri@net</title>
<link href="../imagenes/logito.jpg" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="../css/principal.css"  type="text/css" media="screen">
<link rel="stylesheet" href="../css/lavalampusuario.css" type="text/css" media="screen">
<link type="text/css" rel="stylesheet" href="../css/sliderman.css"  />
<link rel="stylesheet" href='../css/hoverbox.css' type="text/css" media="screen" />
<link rel="stylesheet" href='../js/fancybox/jquery.fancybox-1.3.4.css' type="text/css" media="screen" />



<script type="text/javascript" src="../js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
 <script type="text/javascript" src="../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../js/javascript.js"></script>
<script type="text/javascript" src="../js/sliderman.1.3.7.js"></script>
<script type="text/javascript" src="../js/jquery.easing.min.js"></script>
<script type="text/javascript" src="../js/jquery.lavalamp.min.js"></script>

<script type="text/javascript">
$(function() {
$("#1, #2, #3").lavaLamp({
fx: "backout",
 speed: 700,
});
});
    </script>
	
	<script type="text/javascript"> 
	$(document).ready(function(){
    $("#ifancybox").fancybox({
         'width' : '30%',
         'height' : '75%',
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'type' : 'iframe'
     });
 });
 </script>
        <style type="text/css">
<!--
.Estilo1 {color: #990000}
-->
        </style>	
	
</head>

<body  marginwidth="10" marginheight="10" bgcolor="#f5f6f7" topmargin="5" leftmargin="5" >

<table width="900" cellspacing="0" cellpadding="10" border="0" align="center">

<tbody>
<tr>
<td>
<table width="100%" cellspacing="0" cellpadding="0" border="0">

<tbody>
<tr valign="bottom">
<td valign="middle" style="padding-bottom: 10px;">
<a href="index_usuario.php">
<img alt="banner" width="310" border="0" height="110"src="../imagenes/logo.png" />
</a>



</td>
<td width="100%" valign="bottom" style="padding-left: 15px;">

<table width="100%" cellspacing="0" cellpadding="0" border="0">


<tbody>
<tr height="60">
<td class="mainmenu" width="2%" nowrap="" 8px;"=" padding-top:="" 15px;="" padding-left:="" #cccccc;="" solid="" 1px=""></td>
<td class="mainmenu" width="14%" valign="middle" nowrap="" align="center" style="border-left: 1px solid #cccccc; padding-left: 15px; padding-top: 8px;">
<p>

<a href="http://www.facebook.com" target="_blank">
<img alt="fb" width="30" border="0" height="30" src="../imagenes/facebook.png" />
</a>
</p>
<p>
<a href="http://www.twitter.com" target="_blank">

<img  alt="tw" width="30" border="0" height="30" src="../imagenes/twitter.png" />

</a>

</a>
</p>
</td>
<td class="mainmenu" width="1%" valign="middle" nowrap="" align="center" 8px;"=" padding-top:="" 15px;="" padding-left:="" #cccccc;="" solid="" 1px=""></td>
<td class="mainmenu" width="50%" valign="middle" nowrap="" align="center" style="border-left: 1px solid #cccccc; padding-left: 15px; padding-top: 8px;">
<div id="banner_top" align="right" style="padding: 0px;">
<FORM METHOD=POST ACTION="../buscador/busc_usuario.php"  name="buscar">
<table border="0" width="100%">
<tr>
<td>
Buscar: 
</td>
<td  width="100%" nowrap="" align="right" style="border-right: 0px;" >
<INPUT TYPE="text" NAME="cadena" required="required" size="25">
</td>
<td >
<input type="image" src="../imagenes/lupa.png" width="25" height="25"  alt="Demo2 first" >

</td>

<td style="border-left: 1px solid #cccccc; padding-left: 15px; padding-top: 8px;">
<?php include('../carritocompras/includes/header.php'); ?>
</td>
</tr>
</table>
</FORM> 
</div>

<?php
include("../conexion/conexion.php");
$db=conectar();
$numero=0;
$cedula=$_SESSION['cedula'];
$s="SELECT * FROM factura WHERE  cedula='".$cedula."' ";
$q=mysql_query($s,$db)or die(mysql_error());
while($f=mysql_fetch_array($q)){
$id_fa=$f['id_fact'];
$sql="SELECT * FROM notificaciones WHERE (vista='sin ver' and id_fact='$id_fa') and (tipo='baucher' or tipo='cancelado' or tipo='vendido')   ";
$d=mysql_query($sql,$db)or die(mysql_error());
$num= mysql_num_rows($d); 
$numero=$num+$numero;
}
?>

<ul class="lavaLampWithImage" id="1">
    <li class="current"><a href="micuenta_usuario.php">Mi cuenta</a></li>
  	<li><a href="../salir/salir.php">Salir</a></li>
	<li><a href="../contacto/contacto_client.php">Contacto</a></li>
		<li><a id="ifancybox" href="notificaciones.php" >Notificaciones</a></li>
		<?php 
		if($numero!=0){
		?>
		<span class="notification-bubble" title="Notifications" style="background-color: rgb(245, 108, 126); display: inline;"><?php echo $numero ?>
		<?php
		}
		?>
		 </span> 
</ul>
</div>
</td>
<td class="smallfont" width="1%" nowrap="" style="padding-right: 10px;">

</td>
<td width="12%"></td>
</tr>
</tbody>
</table>
       </td>
        </tr>
    </tbody>

</table>


<div id="fondoprincipal">
<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" style="border-radius: 25px; -moz-border-radius: 25px; 
-webkit-border-radius: 25px;">
<tbody>
<tr>
<td  width="100%">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr valign="top">

<table width="100%" border="0">
<tbody>
<tr>
<td width="5%">
</td>
<td>
<br/>

<?php

$sql="SELECT * FROM factura where id_fact='".$_REQUEST['id']."' ";
$d=mysql_query($sql,$db)or die(mysql_error());
while($s= mysql_fetch_array($d))
{
$id_fact=$s['id_fact'];
$id_banco=$s['id'];
$sub_total=$s['sub_total'];
$iva=$s['iva'];
$total=$s['total'];

$sq="SELECT * FROM banco where id='".$id_banco."' ";
$a=mysql_query($sq,$db)or die(mysql_error());
$v= mysql_fetch_array($a);
if($v!=0){

$num_deposit=$v['num_deposit'];
$nom_admi=$v['nom_admi'];
$tipo_cuenta=$v['tipo_cuenta'];
$banco=$v['banco'];
$cedula=$v['cedula'];

?>
<div align="center">
<div class="CSSTableGenerator" >  
    <table >
	<tr>
	<td>Datos para realizar el deposito</td>
	</tr>
	<tr>
	<td>
       <div align="right">Numero de cuenta:</div></td><td> <?php echo $num_deposit ?>
</td>
</tr>
<tr>
<td>
   <div align="right">Nombre del titular de la cuenta:</div></td><td><?php echo $nom_admi ?>
</td>
</tr>
<tr>
<td>
   <div align="right">Cedula:</div></td><td><?php echo $cedula ?>
</td>
</tr>
<tr>
<td>
  <div align="right">Tipo de cuenta a depositar:</div></td><td><?php echo $tipo_cuenta ?>
</td>
</tr>
<tr>
<td>
  <div align="right">Banco:</div></td><td><?php echo $banco ?>
</td>
</tr>
</table>
</div>
</div>
<br />
  <?php
?>
<a href="enviar_numero_deposito.php?id_fact=<?php echo $id_fact ?>"  style="text-decoration:none" > Enviar información del deposito o transferencia</a>
<hr> 
<?php
}
}
?>

<br  />
    <div align="center">
 
	   <div class="CSSTableGenerato" >
	  
	    <table >
	      <tr>
	        <td>Detalles de factura</td>
	    </tr>

	      <tr>
		  <td>Producto</td>
	        <td>Cantidad</td>
			<td>Sub total</td>
			<td>Precio</td>
			<td>Nº de factura</td>

			
	   
	    </tr>
	      
	       <?php

 $id=$_REQUEST['id'];
	
$sql="SELECT * FROM detalle_factu where id_fact='".$id."' ";
$d=mysql_query($sql,$db)or die(mysql_error());

while($s=mysql_fetch_array($d))
{
?>	
	

 	 

		  	  	      <tr> 
					  <?php
					  
					  $id_product=$s['id_pieza'];
					  
					 $sq="SELECT * FROM producto where id_pieza='".$id_product."' ";
$da=mysql_query($sq,$db)or die(mysql_error());
$datos=mysql_fetch_array($da);
$nombre_pro=$datos['nom_pro'];
$id_pieza=$datos['id_pieza'];
?>

	         <td><p align="center"><a href="../detalles_product/detalles_produc.php?id=<?php echo $id_pieza;?>">
	<?php echo $nombre_pro;?>				
	</a>  </p></td>
	  <td><p align="center"><?php echo $s['cant'] ?> </p></td>
	   <td><p align="center"><?php echo $s['sub_total'] ?> <span class="Estilo1"><strong>Bsf</strong></span></p></td>
	   <td><p align="center"><?php echo $s['precio'] ?> <span class="Estilo1"><strong>Bsf</strong></span></p></td>
	   <td><p align="center"><?php echo $s['id_fact'] ?> </p></td>
	  </tr>
	  


	          <?php
}

?>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>Sub Total: &nbsp; <?php echo $sub_total ?> <span class="Estilo1"><strong>Bsf</strong></span></td>
<td>Iva: &nbsp; <?php echo $iva ?> <span class="Estilo1"><strong>(12%)</strong></span></td>
<td>Total: &nbsp;  <?php echo $total ?><span class="Estilo1"><strong> Bsf</strong></span></td>
</tr>
</table>
</div>
</div>
</div>
  </td>
<td valign="top" width="5%" >
</td>
</tr>
</tbody>
</table>
</td>
</td>
</tr>
</tr>
</tbody>
</table>
</div>
<div id="piepagina" align="center" style="padding: 5px;">


     <a href="index_usuario.php">Inicio</a>


    								| 

    <a href="index_usuario.php">Compra</a>



    				| 

    <a href="../contacto/contacto_client.php">Contactanos</a>

| 

    <a href="../pdf/MANUAL DE USUARIO.pdf">Manual de uso</a>


</div>
<div id="piepagina2" align="center">

     Copyright ©2014 

    <b>


                 Adri@net C.A | Donde comprar tus productos es mas sencillo

    </b>

</div>
            </td>
        </tr>
    </tbody>

</table>
</body>
</html>
