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
    <div align="center">
	 <div class="CSSTableGenerator" >
	 
	       <?php

$id_fact=$_REQUEST['id'];
	
$sql="SELECT * FROM pedidos where id_fact='$id_fact' ";
$d=mysql_query($sql,$db)or die(mysql_error());
while($s= mysql_fetch_array($d))
{
$estatus=$s['estatus'];


?>	
	 
     <form action="" method="post" id="formu" name="formu">
	 
	 	 
  <table>
    <tr>
      <td>Modificacion de Datos</td>
    </tr>

    <tr>
      <td><div align="right">Estatus:</div></td>
      <td>
	  
	  <select name="estatus">

<option value="activo" <?php if($estatus=="activo") echo "selected";?>>activo</option>
<option value="procesando" <?php if($estatus=="procesando") echo "selected";?>>procesando</option>
<option value="vendido" <?php if($estatus=="vendido") echo "selected";?>>vendido</option>
<option value="cancelado" <?php if($estatus=="cancelado") echo "selected";?>>cancelado</option>
</select></td>
    </tr>
      <td><div align="right">
          <input name="enviar" type="submit" id="enviar" value="Guardar">
      </div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</div>

<?php

 }

 ?>
 
 <?php
 if (isset($_POST['enviar'])){


$estatus=$_REQUEST['estatus'];
$id_fact2=$_REQUEST['id'];

	if($estatus=='procesando'){
	
	

		$a="UPDATE pedidos SET estatus='".$estatus."' where id_fact='".$id_fact2."'";
 		mysql_query($a, $db);
		require_once '../conexion/ConexionI.php';

$conn= Conexion::db_connect();
$cedula=$_SESSION['cedula'];

$sq="SELECT * FROM cliente where cedula='".$cedula."' ";
$p=$conn->query($sq);
$a= mysqli_fetch_array($p);
$nom_admi=$a['nom_clie'];
$cedula=$a['cedula'];
$num_deposit=$a['num_deposit'];
$tipo_cuenta=$a['tipo_cuenta'];
$banco=$a['banco'];


			$h="insert into banco values ( '".$nom_admi."', '".$cedula."', '".$num_deposit."','".$tipo_cuenta."' , '".$banco."' , null )";
			$result=$conn->query($h);
 		
$id_pedido=$conn->insert_id;



            $tipo='baucher';
			$vista='sin ver';
			$q="insert into notificaciones values ( null, '".$cedula."', '".$id_fact2."' , '".$tipo."' , '".$vista."' , now() , now())";
 		$resut=$conn->query($q);
		
				$k="UPDATE factura SET id='".$id_pedido."' where id_fact='".$id_fact2."'";
 		$resu=$conn->query($k);
		
		
 ?>
		  <script language="javascript">
 {
 alert('Se a enviado la informacion pertinente al usuario para la realización del deposito u/o Transferencia.');
 window.location="index_admin.php";
 } 
 </script> 

<?php
		
	}	
		

 	if($estatus=='vendido'){
	
	

		$a="UPDATE pedidos SET estatus='$estatus' where id_fact='".$id_fact2."'";
 		mysql_query($a, $db);
		

	
	$t="SELECT * FROM detalle_factu where id_fact='".$id_fact2."' ";
$c=mysql_query($t,$db)or die(mysql_error());
while($b= mysql_fetch_array($c))
{
$id_pieza=$b['id_pieza'];

$cant=$b['cant'];

$z="SELECT * FROM producto where id_pieza='".$id_pieza."' ";
$pro=mysql_query($z,$db)or die(mysql_error());
$cons=mysql_fetch_array($pro);

$cant_pro=$cons['cant_pro'];

$cant_nueva=$cant_pro-$cant;

$f="SELECT * FROM inventario where id_pieza='".$id_pieza."' ";
$pros=mysql_query($f,$db)or die(mysql_error());
$consa=mysql_fetch_array($pros);

$cant_pro_invent=$consa['cant_invent'];

$cant_nueva1=$cant_pro_invent-$cant;

$p="UPDATE producto SET cant_pro='$cant_nueva' where id_pieza='".$id_pieza."'";
 		mysql_query($p, $db);

$h="UPDATE inventario SET cant_invent='$cant_nueva1' where id_pieza='".$id_pieza."'";
 		mysql_query($h, $db);

		$cedula=$_SESSION['cedula'];
		            $tipo='vendido';
			$vista='sin ver';
			$j="insert into notificaciones values ( null, '$cedula', $id_fact, '$tipo' , '$vista' , now() , now())";
            mysql_query($j, $db);
?>

 <SCRIPT LANGUAGE="JavaScript">
	alert("Se cambiado el estatus con exito y se ha disminuido la cantidad de la base de datos.");
	 window.location="micuenta_admi.php";
 </SCRIPT>
 <?php

}


	
	}	
 if($estatus=='cancelado'){
 
 $a="UPDATE pedidos SET estatus='$estatus' where id_fact='".$id_fact2."'";
 		mysql_query($a, $db);
		$cedula=$_SESSION['cedula'];
		            $tipo='cancelado';
			$vista='sin ver';
			$j="insert into notificaciones values ( null, '$cedula', $id_fact, '$tipo' , '$vista' , now() , now())";
            mysql_query($j, $db);
 
 
 ?>

 <SCRIPT LANGUAGE="JavaScript">
	alert("Se cancelo este pedido, y se le envio una notificacion al usuario.");
	 window.location="micuenta_admi.php";
 </SCRIPT>
 <?php
 
 }
 
 
}





?>	</div>
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