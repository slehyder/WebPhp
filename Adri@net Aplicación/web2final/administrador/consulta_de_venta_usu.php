<?php
session_start();

if(isset($_SESSION['autenticado'])!="SI")
{
echo '<script language javascript>
alert("Usuario no Autenticado");
window.location="/web2/inicio_session/inicio_form.php";
</script>';
}

elseif(isset($_SESSION['perfil']) && $_SESSION['perfil']!="Administrador"){

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
<link rel="stylesheet" href="../css/lavalampadmi.css" type="text/css" media="screen">
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
 <script type="text/javascript">
//restringir campos de caracteres, sólo letras
	function validarlet(e) {
	tecla=(document.all) ? e.keyCode : e.which; //? = if, : = else
	if (tecla==8) return true;
	patron=/[A-Za-zñÑ\s]/; //línea editable, cual restringe
	te=String.fromCharCode(tecla);
	return patron.test(te);
}
</script>
<script type="text/javascript">
//restringir campos de caracteres, sólo números
	function validarnum(e) {
	tecla=(document.all) ? e.keyCode : e.which; //? = if, : = else
	if (tecla==8) return true;
	patron=/\d/; //línea editable, cual restringe
	te=String.fromCharCode(tecla);
	return patron.test(te);
}
</script>
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
<a href="../administrador/index_admin.php" >
<img alt="banner" id="banner" width="300" border="0" height="95" src="../imagenes/logo.png" />
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
<img  id="facebook" alt="fb" width="30" border="0" height="30" src="../imagenes/facebook.png" />
</a>
</p>
<p>

<a href="http://www.twitter.com" target="_blank">
<img id="twitter" alt="tw" width="30" border="0" height="30" src="../imagenes/twitter.png" />
</a>
</p>
</td>
<td class="mainmenu" width="1%" valign="middle" nowrap="" align="center" 8px;"=" padding-top:="" 15px;="" padding-left:="" #cccccc;="" solid="" 1px=""></td>
<td class="mainmenu" width="50%" valign="middle" nowrap="" align="center" style="border-left: 1px solid #cccccc; padding-left: 15px; padding-top: 8px;">
<div a class="toplink" align="right" style="padding: 12px;">


<?php
include("../conexion/conexion.php");
$db=conectar();

$sql="SELECT * FROM notificaciones WHERE (vista='sin ver') and (tipo='pedido' or tipo='numdeposito') ";
$d=mysql_query($sql,$db)or die(mysql_error());
$numero = mysql_num_rows($d); 

?>

<ul class="lavaLampWithImage" id="1">
    <li class="current"><a href="micuenta_admi.php">Mi cuenta</a></li>
     <li><a href="../salir/salir.php">Salir</a></li>
		<li><a href="../contacto/contacto_admi.php">Contacto</a></li>
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
<table width="100%" border="0">
<tbody>
<tr>
<td width="5%">
</td>
<td>

<div align="center">
<FORM METHOD=POST ACTION="consulta_de_venta_usu.php" onsubmit="return comprobar()">
  <table>
    <tr>
      <td><div align="right">Cedula:</div></td>
      <td><label>
      <input name="cedula" type="text" id="y" onkeypress="return validarnum(event)" value=''  required="required" />
      </label></td>
	  
	  <td>
	  <input type="submit" name="Enviar" value="Buscar" />
	  </td>
    </tr>
  </table>




</FORM>


 <?php


if (isset($_POST['Enviar']) || isset($_REQUEST['cedula'])){

$cedula=$_REQUEST['cedula'];
 
$sql="SELECT factura.id_fact ,factura.cedula, factura.hora ,factura.fecha_venta,factura.sub_total, factura.iva, factura.total,cliente.cedula,cliente.nom_clie
FROM factura ,cliente
WHERE  cliente.cedula = factura.cedula and cliente.cedula ='".$_REQUEST['cedula']."' ORDER BY 'fecha_venta' DESC";

$d=mysql_query($sql,$db)or die(mysql_error());
 	$x=mysql_num_rows($d);

 } if($x==0){ 

   echo "<p>No hay ventas por este usuario.";
   echo "<hr>";


 }



 else  {

 ?>
 
 
 
<div class="CSSTableGenerato" >
	  
	 	    <table >
	      <tr>
	        <td>Ventas.</td>
	    </tr>

	      <tr>
		  <td>ID:</td>
		  <td>Cedula:</td>
		  <td>hora</td>
	        <td>Fecha:</td>
			<td>Subtotal:</td>
			<td>Iva</td>
			<td>Total:</td>
		<td>Estatus</td>
	   
	    </tr>
	

<?php


while($s= mysql_fetch_array($d))
{
?>
	
	

 <tr> 
					   <?php
					  
					  $id_fact=$s['id_fact'];
					  
					 $sq="SELECT * FROM pedidos where id_fact='".$id_fact."'";
$da=mysql_query($sq,$db)or die(mysql_error());
$datos=mysql_fetch_array($da);
?>		  
                <td><p align="center"><?php echo $s['id_fact'] ?> </p></td>
				<td><p align="center"><?php echo $s['cedula'] ?> </p></td>
  <td><p align="center"><?php echo $s['hora'] ?> </p></td>
  <td><p align="center"><?php echo $s['fecha_venta'] ?> </p></td>
	   <td><p align="center"><?php echo $s['sub_total'] ?> Bsf</p></td>
	   <td><p align="center"><?php echo $s['iva'] ?> Bsf</p></td>
	   <td><p align="center"><?php echo $s['total'] ?> Bsf</p></td>
   <td><p align="center"><?php echo $datos['estatus'] ?> </p> </td>
	   <td ><a href="detalles_de_venta.php?id=<?php echo $s['id_fact']?>"><strong>Ver Detalle</strong></a></td>
	   <td ><a href="modificar_estatus_ventas.php?id=<?php echo $s['id_fact']?>"><strong>Cambiar Estatus</strong></a></td>
	  </tr>


	

 <?php
 }    
 ?>

<?php
	
 }   
 ?>
</table>
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

    <a href="../administrador/index_admin.php">Inicio</a>


    								| 

    <a href="../administrador/index_admin.php">Compra</a>


    								| 

    <a href="../administrador/index_admin.php">Inscribite</a>


    				| 

    <a href="../administrador/index_admin.php">Ingresa</a>


    				| 

    <a href="../contacto/contacto_admi.php">Contactanos</a>



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
