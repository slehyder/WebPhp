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

<!-- TinyMCE -->
<script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
    selector: "textarea",
    theme: "modern",
    width: 500,
    height: 200,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 
</script>


<script>
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
	 <style type="text/css">
<!--
.Estilo1 {
	color: #464646; 
	font-size: 10px;
}
-->
.Estilo2 {color: #000000}
     .Estilo3 {
	color: #660000;
	font-weight: bold;
}
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

<div align="center">
	 <div class="CSSTableGenera"  >
	 
	       <?php

$id_pieza=$_REQUEST['id'];
	
$sql="SELECT * FROM producto where id_pieza='".$id_pieza."' ";
$d=mysql_query($sql,$db)or die(mysql_error());
while($s= mysql_fetch_array($d))
{
?>	
	 
     <form action="" method="post" id="form1" name="form1">
  <table>
    <tr>
      <td>Modificacion</td>
    </tr>
    <tr>
      <td><span class="Estilo2">ID:</span></td>
      <td><span class="Estilo2"><?php echo $s["id_pieza"]?> <input required="required" type="hidden" name="id_pieza" value="<?php echo $s["id_pieza"]?>" /></td></span>
    </tr>
	

    <tr>
	
	
      <td> <span class="Estilo2">Cantidad</span></td>
      <td><input name="cant" type="text"  onkeypress="return validarnum(event)" required="required" value="<?php echo $s["cant_pro"]?>"  ></td>
	  <td><div align="left"  class="Estilo1">Cantidad de producto que posee</div></td>
    </tr>
    <tr>
      <td><span class="Estilo2">Precio</span></td>
      <td><input type="text" name="precio"  onkeypress="return validarnum(event)" required="required"  value="<?php echo $s["precio_pro"]?>"> <span class="Estilo3">Bsf</span></td>
	  <td><div align="left"  class="Estilo1">Introduzca el precio a vender el articulo</div></td>
    </tr>
	
	    <tr>
      <td><span class="Estilo2">Nombre</span></td>
      <td><input type="text" name="nombre"  required="required"  value="<?php echo $s["nom_pro"]?>"></td>
	  <td><div align="left" class="Estilo1">Nombre para la venta del articulo</div> </td>
    </tr>
	
						  					   <?php
					  
					  
					  
					 $sq="SELECT * FROM inventario where id_pieza='".$id_pieza."' ";
$da=mysql_query($sq,$db)or die(mysql_error());
$datos=mysql_fetch_array($da);

?>		
	
		    <tr>
      <td><span class="Estilo2">Stock maximo</span></td>
      <td><input type="text" name="stock_max"  required="required"  value="<?php echo $datos["stock_max"]?>"></td>
	  <td><div align="left"  class="Estilo1">Introduzca la cantidad maxima que tiene.</div></td>
    </tr>
	
		    <tr>
      <td><span class="Estilo2">Stock minimo</span></td>
      <td><input type="text" name="stock_min"  required="required"  value="<?php echo $datos["stock_min"]?>"></td>
	  <td><div align="left"  class="Estilo1">Introduzca la cantidad minima que pueda llegar a tener.</div></td>
    </tr>
	
  </table>

<div align="left">&nbsp;<span class="Estilo2">Descripcion:
            </span> </div>
				<div align="center">
                  <textarea name="descrip"   id="descrip" <?php echo $s["dec_pro"]?> ></textarea>
                  <br / >
                  <input name="enviar" type="submit" id="enviar" value="Guardar">
                  
                </div>
</form>
<?php

 }

 ?>
 
 <?php
 if (isset($_POST['enviar'])){


$stock_max=mysql_real_escape_string(strip_tags($_REQUEST['stock_max']));
$stock_min=mysql_real_escape_string(strip_tags($_REQUEST['stock_min']));
$id_pieza=mysql_real_escape_string(strip_tags($_REQUEST['id_pieza']));
$descrip=$_REQUEST['descrip'];
$cant=mysql_real_escape_string(strip_tags($_REQUEST['cant']));
$precio=mysql_real_escape_string(strip_tags($_REQUEST['precio']));
$nombre=mysql_real_escape_string(strip_tags($_REQUEST['nombre']));



		$a="UPDATE producto SET dec_pro='".$descrip."',cant_pro='".$cant."' ,precio_pro='".$precio."'  ,nom_pro='".$nombre."'  where id_pieza='".$id_pieza."'";
 		mysql_query($a, $db);
		
		$b="UPDATE inventario SET cant_invent='$cant', stock_max='$stock_max',  stock_min='$stock_min'  where id_pieza='".$id_pieza."'";
 		mysql_query($b, $db);
?>

 <SCRIPT LANGUAGE="JavaScript">
	alert("Los datos del producto han sido actualizados ");
	 window.location="consulta_de_producto.php";
 </SCRIPT>
 <?php

}
?>	
 
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