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
<link rel="stylesheet" href='../css/hoverbox2.css' type="text/css" media="screen" />
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
.Estilo2 {color: #990000}
-->
        </style>	
		    <style type="text/css">
<!--
.Estilo1 {
	font-family: Arial;
	color: #000000;
	font-size: 13px;
}
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
<a href="../administrador/micuenta_admi.php" >
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
<td class="mainmenu" width="60%" valign="middle" nowrap="" align="center" style="border-left: 1px solid #cccccc; padding-left: 15px; padding-top: 8px;">
<div a class="toplink" align="right" style="padding: 12px;">


<?php
include("../conexion/conexion.php");
$db=conectar();

$sql="SELECT * FROM notificaciones WHERE (vista='sin ver') and (tipo='pedido' or tipo='numdeposito') ";
$d=mysql_query($sql,$db)or die(mysql_error());
$numero = mysql_num_rows($d); 

?>

<ul class="lavaLampWithImage" id="1">
    <li class="current"><a href="index_admin.php">Mi cuenta</a></li>
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

<td ></td>
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
<td width="12%" valign="top">
  	<br/>		
  <div class="CSSTableGenera" >
           <table>
            <tr>
	        <td><div class="accordionButton">Registrar</div>
		<div class="accordionContent">
<div id=content><a href="../registro/registro_producto.php">Producto</a></div>
<div id=content><a href="../administrador/registro_usuario_del_admi.php">Usuario</a></div>
<div id=content><a href="../administrador/registro_marca.php">Marca</a></div>
<div id=content><a href="../administrador/registro_categoria.php">Categoria</a></div>
</div>

 </td>
			</tr>

			 </table>
  </div>

  <div class="CSSTableGenera" >
           <table >
            <tr >
	        <td><div class="accordionButton">Consultas</div>
		<div class="accordionContent">
<div id=content><a href="../administrador/consulta_de_producto.php">Productos</a></div>
<div id=content><a href="../administrador/consulta_de_usuario.php">Usuarios</a></div>
<div id=content><a href="../administrador/consulta_ventas.php">Ventas </a></div>
<div id=content><a href="../administrador/auditoria.php">Auditoria</a></div>
</div>

 </td>
			</tr>

			 </table>
			    </div>

</td>
<td valign="top" >


<br/>

<?php

$sql="SELECT * FROM banco2 where id_fact='".$_REQUEST['id']."' ";
$d=mysql_query($sql,$db)or die(mysql_error());
while($s= mysql_fetch_array($d))
{
if($s!=0){
$fecha=$s['fecha'];
$tipo_pago=$s['tipo_pago'];
$num_baucher=$s['num_baucher'];
$nom_clien=$s['nom_clien'];
$cedula_deposit=$s['cedula_deposit'];
$foto="../".$s['foto_baucher']; 

?>
<table>
<tr>
<td width="50%">

<div align="left">
<div class="CSSTableGenerato" >  
    <table >
	<tr>
	<td>Datos del deposito</td>
	</tr>
	<tr>
	<td>
      <div align="right">Numero del baucher del deposito realizado: </div></td><td><?php echo $num_baucher ?>
</td>
</tr>

	<tr>
	<td>
      <div align="right">Fecha que se realizo el deposito: </div></td><td><?php echo $fecha ?>
</td>
</tr>

	<tr>
	<td>
      <div align="right">Tipo de pago realizado: </div></td><td><?php echo $tipo_pago ?>
</td>
</tr>

	<tr>
	<td>
      <div align="right">Nombre del depositante: </div></td><td><?php echo $nom_clien ?>
</td>
</tr>

	<tr>
	<td>
      <div align="right">Cedula del depositante: </div></td><td><?php echo $cedula_deposit ?>
</td>
</tr>

</table>
</div>

</div>

<?php



}

?>	

</div>
 </div>
</td>
<td width="10%">

</td>

<td width="40%">
  <div align="center"><span class="Estilo1">Escaneo o foto del comprobante:
    </span> <hr />
      <ul class="hoverbox">
        <li>
          <a href="#"><img src="<?php echo $foto; ?>" width="150" height="100" alt="description"/> <img src="<?php echo $foto; ?>" width="150" height="100"alt="description" class="preview"/></a> </li>
      </ul>
  </div></td>
</tr>
</table>
<?php

}
?>
<div align="center">
    <br  />
 
	 
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
			<td>N� de factura</td>

			
	   
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
?>

	         <td><p align="center"><?php    echo $datos['nom_pro'] ?> </p></td>
	  <td><p align="center"><?php echo $s['cant'] ?> </p></td>
	   <td><p align="center"><?php echo $s['sub_total'] ?> <span class="Estilo2"><strong>Bsf</strong></span></p></td>
	   <td><p align="center"><?php echo $s['precio'] ?> <span class="Estilo2"><strong>Bsf</strong></span></p></td>
	   <td><p align="center"><?php echo $s['id_fact'] ?> </p></td>
	  </tr>
	  


	          <?php
}


?>
</table>


 

</div>
 </div>


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

     Copyright �2014 

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

