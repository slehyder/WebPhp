<?php 
session_start();
if(isset($_SESSION['autenticado'])!="SI")
{

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Adri@net</title>
<link href="../imagenes/logito.jpg" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="../css/principal.css"  type="text/css" media="screen">
<link rel="stylesheet" href="../css/lavalamp.css" type="text/css" media="screen">
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

<script type="text/javascript" src="../js/sliderman.1.3.7.js"></script>
<script type="text/javascript" src="../js/jquery-1.2.3.min.js"></script>
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
//restringir campos de caracteres, s�lo letras
	function validarlet(e) {
	tecla=(document.all) ? e.keyCode : e.which; //? = if, : = else
	if (tecla==8) return true;
	patron=/[A-Za-z��\s]/; //l�nea editable, cual restringe
	te=String.fromCharCode(tecla);
	return patron.test(te);
}
</script>
<script type="text/javascript">
//restringir campos de caracteres, s�lo n�meros
	function validarnum(e) {
	tecla=(document.all) ? e.keyCode : e.which; //? = if, : = else
	if (tecla==8) return true;
	patron=/\d/; //l�nea editable, cual restringe
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
<a href="../index.php" >
<img alt="banner" width="300" border="0" height="95"  src="../imagenes/logo.png" />
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
<img  alt="fb" width="30" border="0" height="30"  src="../imagenes/facebook.png" />
</a>
</p>
<p>
<a href="http://www.twitter.com" target="_blank">

<img  alt="tw" width="30" border="0" height="30"  src="../imagenes/twitter.png" />

</a>
</p>
</td>
<td class="mainmenu" width="1%" valign="middle" nowrap="" align="center" 8px;"=" padding-top:="" 15px;="" padding-left:="" #cccccc;="" solid="" 1px=""></td>
<td class="mainmenu" width="50%" valign="middle" nowrap="" align="center" style="border-left: 1px solid #cccccc; padding-left: 15px; padding-top: 8px;">

<div id="banner_top" align="right" style="padding: 0px;">
<FORM METHOD=POST ACTION="../buscador/buscador.php"  name="buscar">
<table border="0" width="100%">
<tr>
<td>
Buscar: 
</td>
<td  width="100%" nowrap="" align="right" style="border-right: 0px;" >
<INPUT TYPE="text" NAME="cadena" required="required" size="50">
</td>
<td>
<input type="image" src="../imagenes/lupa.png" width="25" height="25"  alt="Demo2 first" >
</td>
</tr>
</table>
</FORM> 
</div>
<div a class="toplink" align="right" style="padding: 12px;">
<ul class="lavaLampWithImage" id="1">
    <li class="current"><a href="../registro/registro_usuario.php">Registrate</a></li>
    <li><a href="../inicio_session/inicio_form.php">Ingresa</a></li>
    <li><a href="../contacto/contacto.php">Contacto</a></li>
</ul>
</div>
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
<td valign="top" width="30%" >
</td>
 <td valign="top" >
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
				<tr>
				
				<td  >
				<div id="imagen">

<embed src="../imagenes/recuperar.jpg" quality="high" WIDTH="200" HEIGHT="25"></embed>


</div>
    <form action="" method="post" name="form1" id="form1" class="contacto">
<div>
              <label>	
Ingrese email:</label>
          <input type="text" type='email' required="required" name="email"  size="25"/>
                   </div>

      <div >
        <input type="submit" value="Enviar" name="Enviar" />
      </div>
    </form>
	</div>
	</div>
    <p>&nbsp;</p>
    <p>
     
<?php

	
	if (isset($_POST['Enviar'])){

		require_once("../conexion/conexion.php");
	$db = conectar();
	
	$email=$_POST['email'];
	$q="SELECT * FROM cliente WHERE email='".$_POST['email']."'";
	$sql=mysql_query($q) or die (mysql_error());
	$x=mysql_fetch_array($sql);
	$y=mysql_num_rows($sql);
	if($y==0){
	?>
      <script language="javascript" type="text/javascript">
	alert("No existe ning�n usuario registrado con este correo: <?php echo $email ;?>");
	window.location="recp2.php";
	</script>      <?php
	}
	elseif($_REQUEST['email']!=$x['email']){
	?>
      <script language="javascript" type="text/javascript">
	alert("Datos inv�lidos");
	window.location="recp2.php";
	</script>
      <?php
	}
	else{
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";

$longitudCadena=strlen($str);

$cad = "";

$longitudPass=10;

for($i=1;$i<$longitudPass;$i++) {

$pos=rand(0,$longitudCadena-1);

$cad .= substr($str,$pos,1);
}

$pass= crypt($cad);


//Para enviar datos desde el campo textarea hasta el correo
$to      = $_POST['email'];
$subject = 'Nueva contrase�a, Soporte T�cnico Adri@net';
$message = 'Su nueva contrase�a es:'.$cad ;
$headers = 'From: adrianetadrianet@gmail.com' . "\r\n" .
    'Reply-To: adrianetadrianet@gmail.com' . "\r\n" .
    'Content-Type: text/plain;charset=utf-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$mail=mail($to, $subject, $message, $headers);


		$a="UPDATE cliente SET password='".$pass."' where email='".$email."'";
 		mysql_query($a, $db);
	
	?>
      <script language="javascript" type="text/javascript">
	alert("Su contrase�a nueva a sido enviada al Email. ");
	window.location="../index.php";
	</script>
    <?php


	}
	}
?> 



 </div>
 </td>
</tr>
</tbody>
</table>
</td>
<td valign="top" width="30%" >
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

    <a href="../index.php">Inicio</a>


    								| 

    <a href="../inicio_session/inicio_form.php">Compra</a>


    								| 

    <a href="../registro/registro_usuario.php">Inscribite</a>


    				| 

    <a href="../inicio_session/inicio_form.php">Ingresa</a>


    				| 

    <a href="../contacto/contacto.php">Contactanos</a>

| 

    <a href="../pdf/MANUAL DE USUARIO.pdf">Manual de uso</a>

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

<?php
}
?>