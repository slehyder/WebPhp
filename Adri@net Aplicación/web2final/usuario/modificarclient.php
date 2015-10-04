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
<td  width="10%"></td>
<td>
    <div align="center">
	 <div class="CSSTableGenerator"  >
	 
	       <?php

$cedula=$_SESSION['cedula'];
	
$sql="SELECT * FROM cliente where cedula='".$cedula."' ";
$d=mysql_query($sql,$db)or die(mysql_error());
while($s= mysql_fetch_array($d))
{
?>	
	 
     <form action="" method="post" id="form1" name="form1">
  <table>
    <tr>
      <td>Modificacion de Datos</td>
    </tr>
    <tr>
      <td>Cedula:</td>
      <td><?php echo $s["cedula"]?> <input required="required" type="hidden" name="cedula" value="<?php echo $s["cedula"]?>" /></td>
    </tr>
    <tr>
      <td>Nombre y apellido</td>
      <td><input name="nom" type="text"   pattern="[a-zA-Z ]{5,}" required="required" value="<?php echo $s["nom_clie"]?>"  ></td>
    </tr>
    <tr>
      <td>Telefono</td>
      <td><input type="text" name="tlf"  onkeypress="return validarnum(event)" required="required" value="<?php echo $s["telf_clie"]?>"></td>
    </tr>
	    <tr>
      <td>Direccion</td>
      <td><textarea name="dire"   rows='6'><?php echo $s["dire_clie"]?> </textarea> </td>
    </tr>
    <tr>
      <td><div align="right">
          <input name="enviar" type="submit" id="enviar" value="Guardar">
      </div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<?php

 }

 ?>
 
 <?php
 if (isset($_POST['enviar'])){


$cedula=mysql_real_escape_string(strip_tags($_REQUEST['cedula']));
$nom=mysql_real_escape_string(strip_tags($_REQUEST['nom']));
$dire=mysql_real_escape_string(strip_tags($_REQUEST['dire']));
$tlf=mysql_real_escape_string(strip_tags($_REQUEST['tlf']));



		$a="UPDATE cliente SET nom_clie='".$nom."',dire_clie='".$dire."',telf_clie='".$tlf."' where cedula='".$cedula."'";
 		mysql_query($a, $db);
		
		$q="INSERT INTO auditoria (id_auditoria, nom_client, accion, correo, hora, fecha , perfil) VALUES (null, '".$_SESSION['nombre']."', 'Modifico sus datos personales','".$_SESSION['email']."', now() , now() , '".$_SESSION['perfil']."' )";
mysql_query($q, $db);
?>

 <SCRIPT LANGUAGE="JavaScript">
	alert("Sus datos han sido actualizados");
	 window.location="micuenta_usuario.php";
 </SCRIPT>
 <?php
 
}
?>	</div>
</div>

</td>
<td  width="10%"></td>
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

