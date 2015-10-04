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
.Estilo1 {font-size: 14px}
-->
<!--
.Estilo3 {
	color: #464646; 
	font-size: 11px;
}
-->
body {
background:#EEEEEE;

}
        .Estilo2 {color: #4778D1}
        </style>
	<script src="../js/jquery.registro.js" type="text/javascript"></script>
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
	
		<title></title>
	    <style type="text/css">
<!--
.Estilo1 {font-size: 14px}
-->
body {
background:#EEEEEE;

}
        .Estilo2 {color: #4778D1}
        </style>
		<link rel="stylesheet" href="../css/principal.css"  type="text/css" media="screen">
		<link rel="stylesheet" href='../js/fancybox/jquery.fancybox-1.3.4.css' type="text/css" media="screen" />
		
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
<td width="2%">
</td>
<td>
	 <div align="center">

 <div class="CSSTableGenerato" >

   <form action="" method="post" id="formu" name="formu" enctype="multipart/form-data">
  <table>
    <tr>
      <td>Datos del deposito realizado.</td>
    </tr>
    <tr>
      <td>Numero de deposito o transferencia:</td>
      <td><input name="num_deposito" type="text"  required="required"  onkeypress="return validarnum(event)" size="23"></td>
	  <td><div align="left" class="Estilo3"> Indique el numero del vaucher si fue un deposito u/o el numero de cuenta si fue una trasferencia. </div> </td>
			            </tr>
    </tr>
		    <tr>
      <td>Nombre del depositante:</td>
      <td><input name="nom_deposit" type="text"  required="required" size="23" ></td>
	  <td><div align="left" class="Estilo3">  	Indique su nombre completo. </div> </td>
			            </tr>
    </tr>
	
	    <tr>
      <td>Cedula del depositante:</td>
      <td><input name="cedulad" type="text"  required="required"  onkeypress="return validarnum(event)" size="10"></td>
	  <td><div align="left" class="Estilo3">  	Si eres Persona Natural o Juridica, ingresa los datos respectivamente </div> </td>
			            </tr>
    </tr>
	    <tr>
      <td>Fecha:</td>
      <td>              <select name="año">
	 <option >2020</option>
	 <option>2019</option>
	 <option>2018</option>
	 <option>2017</option>
	 <option>2016</option>
	 <option>2015</option>
	  
			   <option selected="selected">2014</option>
                 <option>2013</option>
                  
                <option>2012</option>
   <option>2011</option>
                 <option>2010</option>
               <option> 2009</option>
				<option>2008</option>
				<option>2007</option>
				<option>2006</option>
				<option>2005</option>
				<option>2004</option>
				<option>2003</option>
				<option>2002</option>
				<option>2001</option>
				<option>2000</option>
				</select>
        
				
							              <select name="mes">
			   <option>12</option>
                 <option>11</option>
                  
                <option>10</option>
   <option>09</option>
                 <option>08</option>
               <option> 07</option>
				<option>06</option>
				<option>05</option>
				<option>04</option>
				<option>03</option>
				<option>02</option>
				<option>01</option>

				</select>
				
				              <select name="dia">
			   <option>31</option>
                 <option>30</option>
                  
                <option>29</option>
   <option>28</option>
                 <option>27</option>
               <option> 26</option>
				<option>25</option>
				<option>24</option>
				<option>23</option>
				<option>22</option>
				<option>21</option>
				<option>20</option>
				<option>19</option>
				<option>18</option>
				<option>17</option>
				<option>16</option>
				<option>15</option>
				<option>14</option>
				<option>13</option>
				<option>12</option>
				<option>11</option>
				<option>10</option>
				<option>09</option>
				<option>08</option>
				<option>07</option>
				<option>06</option>
				<option>05</option>
				<option>04</option>
				<option>03</option>
				<option>02</option>
				<option>01</option>
				
				</select>
	
				
				</td>
				<td><div align="left" class="Estilo3">  Fecha en la que se realizo el deposito. </div> </td>
			            </tr>
    </tr>
	    <tr>
      <td>Tipo de pago:</td>
      <td>        <label>
          <input type="radio" name="tipo_pago" value="Deposito" />
          Deposito</label>
        
        <label>
          <input type="radio" name="tipo_pago" value="Transferencia" />
          Transferencia</label></td>
		  <td><div align="left" class="Estilo3">  	Indiquenos si fue una transferencia o un deposito bancario el realizado. </div> </td>
			            </tr>
				    <tr>
      <td>Escaneo o foto del comprobante:</td>
      <td>  <input type="file" required="required" name="imagen"/> </td>
	  <td><div align="left" class="Estilo3">  	Seleccione un escaneo del comprobante o foto del mismo legible </div> </td>
			            </tr>			
    </tr>


	<tr>
	<td>
<div align="right">
          <input name="enviar" type="submit" id="enviar" value="Enviar">
      </div></td>
      <td>&nbsp;</td>
    </tr>
  
</form>
</table>
<?php

if (isset($_POST['enviar'])){
$num_deposito=mysql_real_escape_string(strip_tags($_POST['num_deposito']));
$año=$_POST['año'];
$mes=$_POST['mes'];
$dia=$_POST['dia'];
$fecha=$año."/".$mes."/".$dia;
$tipo_pago=$_POST['tipo_pago'];
$nom_deposit=mysql_real_escape_string(strip_tags($_POST['nom_deposit']));
$cedulad=mysql_real_escape_string(strip_tags($_POST['cedulad']));

$rutaEnServidor='fotos';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
$rutaDestinox='../'.$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestinox);

$id_fact=$_REQUEST['id_fact'];




            $tipo='numdeposito';
			$vista='sin ver';
			$sq="insert into notificaciones  values ( null, '".$cedula."', '".$id_fact."', '".$tipo."' , '".$vista."' , now() , now())";
 		mysql_query($sq, $db);
			$q="insert into banco2  values ( '".$id_fact."', '".$fecha."', '".$tipo_pago."', '".$num_deposito."' , '".$nom_deposit."' , '".$cedula."' , '".$rutaDestino."' ,  null)";
 		mysql_query($q, $db);




?>

 <SCRIPT LANGUAGE="JavaScript">
	alert("Se a enviado con exito.");
	 
 </SCRIPT>
 <?php

}



?>


 </div>  
 </div>
</div>
  </td>
<td valign="top" width="2%" >
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

