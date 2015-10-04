<?php
session_cache_limiter('public');
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

<script language="Javascript"> 
function confirmar(){ 
confirmar=confirm("¿Seguro que desea borrar el producto?"); 
if (confirmar) {
// si pulsamos en aceptar
alert('Has borrado el producto');
document.location.href= "javascript:history.go(-1);";
}
else{
// si pulsamos en cancelar
alert('has cancelado'); 
return false;
}

}
</script>


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
.Estilo1 {color: #000000}
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
<td > </td>
<td width="5%"  valign="top">


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


$num= "select * from producto";
$num1= mysql_query($num,$db);
$datos=mysql_num_rows($num1);
if($datos==0){

   echo "<p>No hay artículos en el inventario";
   echo "<hr>";
   } else {
?>

	 <FORM METHOD=POST ACTION="consulta_producto_tipo.php">
	 
	 <div class="CSSTableGenerator">
	 
  <table border="0">
  <?php

$sq="SELECT * FROM categoria ";
$res=mysql_query($sq,$db)or die(mysql_error());


?>
  
  
  
  <tr>
  <td>Consultar</td>
  </tr>
    <tr>
      <td><div align="right" class="Estilo1">Tipo de producto</div></td>
      <td >
        <select name="tip">
		<?php
		while ($reg=mysql_fetch_array($res))

{ ?>
		<option value="<?php echo $reg["id_cate"];?>"><?php echo $reg["des_cate"];?></option> <?php
}?>
				</select>
</td>

<td>
    <input type="submit" name="Enviar" value="Buscar" />
	</FORM>
</td>
<td>
<div id="boton1" ><a href="consulta_producto_tipostock.php" > Productos por agotarse</a> </div> 
</td>

			</tr>

			 </table>
			    </div>

</td>



</tr>
</table>

<table width="100%" >

<tr>
<td width="85%"></td>
<td >

<div class="CSSTableGenera" >  
    <table >
	      <tr>
	        <td>Productos</td>
	    </tr>

      <tr>
	  <td>Id</td>
	        <td>Descripcion</td>
			<td>Cantidad</td>
			<td>Precio</td>
			<td>Nombre</td>
			<td>Foto</td>
             <td>Stock maximo</td>
			 <td>Stock minimo</td>
			 

	    </tr>


<?php
$_pagi_sql = "select * from producto";
$_pagi_result= mysql_query($_pagi_sql);

    $numero_registros = mysql_num_rows($_pagi_result);  

    $_pagi_cuantos = 10;  
	include("../paginator.inc/paginator.inc.php");
	
while($filas=mysql_fetch_array($_pagi_result)){
	$id=$filas['id_pieza'];
	$cant=$filas['cant_pro'];
    $precio_pro=$filas['precio_pro'];
	    $dec_pro=$filas['dec_pro'];
		    $foto="../".$filas['foto']; 
			$nom_pro=$filas['nom_pro'];
			
			      

?>


		  	  	      <tr> 
					  					   <?php
					  
					  
					  
					 $sq="SELECT * FROM inventario where id_pieza='$id' ";
$da=mysql_query($sq,$db)or die(mysql_error());
$datos=mysql_fetch_array($da);
$stock_max=$datos['stock_max'];
$stock_min=$datos['stock_min'];

?>		
					  
					  
	  <td><p align="center"><?php echo  $id; ?> </p></td>
	  <td><p align="center"><?php echo substr($dec_pro, 0, 50)."...";?> </p></td>
	  <td><p align="center"><?php echo $cant; ?> </p></td>
	  <td><p align="center"><?php echo $precio_pro; ?> </p></td>
	  <td><p align="center"><?php echo $nom_pro; ?> </p></td>
	  <td><p align="center"><img src="<?php echo $foto; ?>" width="101" height="101"> </p></td>
	  <td><p align="center"><?php echo $stock_max; ?> </p></td>
	  <td><p align="center"><?php echo $stock_min; ?> </p></td>
	  <td><p align="center"><a href="cambiar_foto.php?id=<?php echo $filas['id_pieza']?>">cambiar foto</a> </p></td>
	  	  <td><p align="center"><a href="modificar_producto.php?id=<?php echo $filas['id_pieza']?>">modificar</a> </p></td>
	  <td><p align="center"><a  href="eliminar_producto.php?id=<?php echo $filas['id_pieza']?>" onclick="javascript:confirmar()" >eliminar</a></p></td>


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
?>
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