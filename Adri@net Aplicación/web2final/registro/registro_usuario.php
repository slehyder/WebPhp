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
<!--
$(function() {
$("#1, #2, #3").lavaLamp({
fx: "backout",
 speed: 700,
});
});

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
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
function comprobar() {
         var mirarLargo="no";
         var mirarIgual="no";
         var contra1 = document.form1.password
         var contra2 = document.form1.password1
		 var espacios = false;
         var cont = 0;
		 
		 while (espacios && (cont < contra1.value.length)) {
if (contra1.value.charAt(cont) == " ")
espacios = "si";
cont++;
}
 
if (espacios == "si") {
alert ("La contraseña no puede contener espacios en blanco");
return false;
}

         if (contra1.value.length >= 6) {
            mirarLargo = "si"
            }
         else {
		 alert("La contraseña debe tener más de 6 caracteres.");
            
            }
         if (contra1.value == contra2.value) {
            mirarIgual = "si"
            }
         else {
		  alert("La contraseña y su repetición deben ser iguales.");
          
            }
         if (mirarLargo == "no" || mirarIgual == "no") {
            return false
            }
         }

</script>

<style type="text/css">
<!--
.Estilo1 {
	color: #464646; 
	font-size: 11px;
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
<td valign="top" width="10%" >
</td>
<td valign="top" width="80%">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
				<tr>
				
				<td  >							<div id="imagen">

<embed src="../imagenes/ingresa1.jpg" quality="high" WIDTH="200" HEIGHT="25"></embed>


</div>
			
      <form method="post" action="guarda_registro_usuario.php" name="form1"  class='contacto1' id="form1" onsubmit="return comprobar()">
           
			<table>
			<tbody>
			<tr>
			<td>

			 <div>
			<label>
			<div align="right">Nombres y apellidos:</div>
			</label> </td><td><input name="nom" type='text' id="nom_clie" value=''  pattern="[a-zA-Z ]{5,}"  size="23" required="required"/></td> <td> 	<div align="left"  class="Estilo1">Ingrese su nombre completo.</div></td>
			</tr>
            
			            <tr><td><label><div align="right">Cedula:</div></label></td> <td><input name="cedu" type='text' size="23"  id="cedu" onkeypress="return validarnum(event)" value=''  required="required"/>
            </td><td><div align="left" class="Estilo1">  	Si eres Persona Natural o Juridica, ingresa los datos respectivamente </div> </td>
			            </tr>
						
									<tr><td>
              <label><div align="right">Telefono:</div></label></td> <td>
              <input name="tlf" type='text' id="telf_clie" value='' onkeypress="return validarnum(event)" size="23"  required="required" />
		</td><td> <div align="left"  class="Estilo1">	Ingrese su número de teléfono.</div></td></tr>

             <tr><td> <label><div align="right">Crear contrase&ntilde;a:</div></label></td> <td>
              <input name="password" type="password" id="password"  size="23"  required="required"/ >
            </td><td> <div align="left"  class="Estilo1"> 	6 caracteres como mínimo.</div></td></tr>
			
			<tr><td> <label><div align="right">Repita la contrase&ntilde;a:</div></label></td> <td>
              <input name="password1" type="password" id="password1"  size="23"  required="required"/ >
            </td></tr>
			
			           <tr><td> <label><div align="right">Correo Electronico:</div></label></td> <td><input size="23" name="email" type='email' id="email" value='' required="required"/>
            </td><td><div align="left"  class="Estilo1"> ingrese una dirección de correo electrónico válida que puede revisar inmediatamente.</div></td></tr>
            
			
            <tr><td>
              <label><div align="right">Direccion:</div></label></td> <td>
              <textarea name="dire" rows='6' size="23"  id="dire_clie"></textarea>
            </td><td> <div align="left"  class="Estilo1">	Ingrese su dirección.</div></td></tr>

			<tr><td>&nbsp;</td><td><input type='submit' value='Registrar'/></td></div>
  </form>
 </tbody>
 </table>
 
  
 </td>
</tr>
</tbody>
</table>
</td>
<td valign="top" width="10%" >
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

<?php
} 
elseif(isset($_SESSION['perfil']) && $_SESSION['perfil']!="usuario"){

header("location:../administrador/micuenta_admi.php");
}
else
{
header("location:../usuario/index_usuario.php");

}


?>
