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

<script type="text/javascript">
/* error message */

$("#form1").validate();
.error {
    /* supply height to ensure consistent positioning for every browser */
    height:15px;
    background-color:#FFFE36;
    border:1px solid #E1E16D;
    font-size:11px;
    color:#000;
    padding:3px 10px;
    margin-left:-2px;


    /* CSS3 spicing for mozilla and webkit */
    -moz-border-radius:4px;
    -webkit-border-radius:4px;
    -moz-border-radius-bottomleft:0;
    -moz-border-radius-topleft:0;
    -webkit-border-bottom-left-radius:0;
    -webkit-border-top-left-radius:0;

    -moz-box-shadow:0 0 6px #ddd;
    -webkit-box-shadow:0 0 6px #ddd;
}
</script>



<script type="text/javascript" src="../js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
 <script type="text/javascript" src="../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../js/javascript.js"></script>
<script type="text/javascript" src="../js/sliderman.1.3.7.js"></script>
<script type="text/javascript" src="../js/jquery.easing.min.js"></script>
<script type="text/javascript" src="../js/jquery.lavalamp.min.js"></script>
<script src="../js/jquery.registro.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
$("#1, #2, #3").lavaLamp({
fx: "backout",
 speed: 700,

});
});
    </script>
<style type="text/css">
<!--
.Estilo3 {font-size: 11px;
color:#666666}
-->
</style>

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
	$(document).ready(function(){
    $("#ifancybox1").fancybox({
         'width' : '30%',
         'height' : '40%',
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'type' : 'iframe'
     });
 });
 </script>

 	<script type="text/javascript"> 
	$(document).ready(function(){
    $("#ifancybox2").fancybox({
         'width' : '30%',
         'height' : '40%',
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'type' : 'iframe'
     });
 });
 </script>
 
 	<script type="text/javascript"> 
	$(document).ready(function(){
    $("#ifancybox3").fancybox({
         'width' : '30%',
         'height' : '40%',
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'type' : 'iframe'
     });
 });
 </script>
 
 	<script type="text/javascript"> 
	$(document).ready(function(){
    $("#ifancybox4").fancybox({
         'width' : '30%',
         'height' : '40%',
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'type' : 'iframe'
     });
 });
 </script>
 
 	<script type="text/javascript"> 
	$(document).ready(function(){
    $("#ifancybox5").fancybox({
         'width' : '30%',
         'height' : '40%',
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'type' : 'iframe'
     });
 });
 </script>
 
 	<script type="text/javascript"> 
	$(document).ready(function(){
    $("#ifancybox6").fancybox({
         'width' : '30%',
         'height' : '40%',
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'type' : 'iframe'
     });
 });
 </script>
 
 	<script type="text/javascript"> 
	$(document).ready(function(){
    $("#ifancybox7").fancybox({
         'width' : '30%',
         'height' : '40%',
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'type' : 'iframe'
     });
 });
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
<td width="12%" valign="top">
<?php
	
$sql="SELECT * FROM factura order by fecha_venta desc ";
$d=mysql_query($sql,$db)or die(mysql_error());
$numero = mysql_num_rows($d);
if($numero!=0)
{

?>
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
    
  
	 
	 <FORM METHOD=POST ACTION="consulta_de_venta_usu.php" onsubmit="return comprobar()">
	 
	 <div class="CSSTableGenerator">
	 
  <table border="0">
  
  <tr>
  <td>Consultar</td>
  </tr>
    <tr>
      <td><div align="right"> Cedula:</div></td>
	  
      <td >
        <input name="cedula"  required="required"  onkeypress="return validarnum(event)" type="text" id="cedula" />
</td>

<td>
    <input type="submit" name="Enviar" value="Buscar" />
	</FORM>
</td>
</tr>
<tr>
</FORM>

<FORM METHOD=POST ACTION="consulta_de_venta_fch.php" onsubmit="return comprobar()">
      <td ><div align="right" >Rango de fecha: <br />
        <span class="Estilo3">(Las fechas deben ser de mayor a menor)</span> </div></td>
      <td >
        <div align="center"><span class="Estilo3">Ej:2013-05-20</span> </div>
            <input name="y" type="text"  required="required" id="y" />
              <br />
              <div align="center"> <span class="Estilo3">Ej:2013-09-20</span> </div>
          <input name="y2" type="text"  required="required" id="y2" /> 
          </div></td>
	  <td>
	  <input type="submit" name="Enviar" value="Buscar" />
	  </td>
</FORM>


</tr>
</table>
</div>


	
<div class="CSSTableGenerato" >
	  
	 	    <table >
	      <tr>
	        <td>Ventas.</td>
	    </tr>

	      <tr>
		  <td>ID:</td>
		  <td>Cedula:</td>
	        <td>Fecha:</td>
			<td>hora</td>
			<td>Subtotal:</td>
			<td>Total:</td>
			  <td>Iva</td>
			<td>Estatus</td>
	   
	    </tr>


	     <?php
		   
$_pagi_sql = "select * from factura  order by fecha_venta desc";
$_pagi_result= mysql_query($_pagi_sql);

    $numero_registros = mysql_num_rows($_pagi_result);  

    $_pagi_cuantos = 7;  
	include("../paginator.inc/paginator.inc.php");
$nume=0;
while($filas=mysql_fetch_array($_pagi_result))
{
?>	
	

 <tr> 
					   <?php
					  
					  $id_fact=$filas['id_fact'];
					  
					  $nume=$nume+1;
					  $id_f='ifancybox'.$nume;
					  
					 $sq="SELECT * FROM pedidos where id_fact='".$id_fact."'  ";
$da=mysql_query($sq,$db)or die(mysql_error());
$datos=mysql_fetch_array($da);
?>		  
                <td><p align="center"><?php echo $filas['id_fact'] ?> </p></td>
				<td ><a id="<?php echo $id_f ?>" href="inf_usuario.php?id=<?php echo $filas['cedula']?>"><p align="center"><?php echo $filas['cedula'] ?> </p></a></td>
	         <td><p align="center"><?php echo $filas['fecha_venta'] ?> </p></td>
	  <td><p align="center"><?php echo $filas['hora'] ?> </p></td>
	   <td><p align="center"><?php echo $filas['sub_total'] ?> Bsf</p></td>
	   <td><p align="center"><?php echo $filas['total'] ?> Bsf</p></td>
	   <td><p align="center"><?php echo $filas['iva'] ?> Bsf</p></td>
	   <td><p align="center"><?php echo $datos['estatus'] ?> </p> </td>
	   <td ><a href="detalles_de_venta.php?id=<?php echo $filas['id_fact']?>"><strong>Ver Detalle</strong></a></td>
	   <td ><a href="modificar_estatus_ventas.php?id=<?php echo $filas['id_fact']?>"><strong>Cambiar Estatus</strong></a></td>
	   <td ><a href="../pdf/pdf.php?id=<?php echo $filas['id_fact']?>"><strong>Ver en PDF.</strong></a></td>
	  </tr>
	  

<?php
}   
// Incluimos las barras de navegacion e informacion



echo "
   </table>  
</div> 

<div align='center'>
    <table border='0' width='600' style='font-family: Verdana; font-size: 10pt' id='table1'>
        <tr>
            <td align='center'>&nbsp;</td>
        </tr>
        <tr>
            <td align='center'>".$_pagi_navegacion."</td>
        </tr>
        <tr>
            <td align='center'><p align='right'>Registros ".$_pagi_info."</td>
        </tr>
    </table>
</div>
";
?>  

<?php
}
else
{
   echo "<p>No se ha realizado ninguna compra aun.";
   echo "<hr> <hr>";
}
?>

 

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