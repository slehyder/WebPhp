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
<a href="../usuario/index_usuario.php">
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
<div id="banner_top" align="right" style="padding: 12px;">
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
$s="SELECT * FROM factura WHERE  cedula=$cedula ";
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
    <li class="current"><a href="../usuario/micuenta_usuario.php">Mi cuenta</a></li>
  	<li><a href="../salir/salir.php">Salir</a></li>
	<li><a href="../contacto/contacto_client.php">Contacto</a></li>
		<li><a id="ifancybox" href="../usuario/notificaciones.php" >Notificaciones</a></li>
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
<td width="100%">
<table width="776" border="0">
<tbody>
<tr>
<td width="264" valign="middle" align="left"></td>
<td width="600" valign="middle" align="center">
    <a href="http://www.facebook.com">
        <div align="center" style="padding-top: 3px; padding-bottom: 3px;">
            <table cellspacing="0" cellpadding="1">
                <tbody>
                    <tr>
                        <td align="center">
                            <a target="_blank" href="../registro/registro_usuario.php">
							<div id="banner2">
<br />
                                <embed src="../imagenes/mientras.swf" quality="high" WIDTH="600" HEIGHT="180"><hr align='right'> </embed>
								</div>                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </a>

</td>
<td width="240" valign="middle" align="center"></td>
</tr>
</tbody>
</table>
<tr>

    <td colspan="3"></td>

</tr>

    </tbody>

</table>
<table width="100%" border="0" align="center">
<tbody>
<tr>
<td valign="top" width="20%" >
</td>
 <td valign="top" >
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
				<tr>
				
				<td  >

<?php



	
$sql="SELECT * FROM contacto where id_contacto='1' ";
$d=mysql_query($sql,$db)or die(mysql_error());
while($s= mysql_fetch_array($d))
{
?>	

<strong><?php echo $s["contacto"]?> <br />

<?php echo $s["telefono"]?>

<br />

RIF: <?php echo$s["rif"]?></strong><br />

<img id="contacto" alt="ct" src="../imagenes/llamando.gif.gif" />



<?php

 }

 ?>
 </td>
</tr>
</tbody>
</table>
</td>
<td valign="top" width="20%" >
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
     <a href="../usuario/index_usuario.php">Inicio</a>


    								| 

    <a href="../usuario/index_usuario.php">Compra</a>



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