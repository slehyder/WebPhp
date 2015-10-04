<?php
session_cache_limiter('public'); 
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

<style type="text/css">
<!--
.Estilo1 {
	color: #990000;
	font-weight: bold;
}
.Estilo2 {color: #000000}
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
<td  width="100%"><span class="Estilo2">
<?php

 require_once('../carritocompras/class/Catalogo.php');
 
 $isbn=$_GET['id'];
 
 $obj= new Catalogo();
 $libro=$obj->get_detalles_libro($isbn);
?>

<h2><?php echo $libro[0]['nom_pro'];?></h2>
<hr  />
<?php
if (is_array($libro))
{	
?>

<table>

<tr>

<td >
<img src="<?php echo "../".$libro[0]['foto']; ?>" border="0" width="220" height="230"/>

</td>

<td style=" border-left: 2px ridge black;">

  <div align="left">
    <ul>
      
      <li><b>Cantidad en existencia:</b> <?php echo $libro[0]['cant_pro'];?> </li><br />
	  
      
      <li><b>Precio:</b> <span class="Estilo1"><?php echo $libro[0]['precio_pro'];?>Bsf.</span>
      </li><br />
	 
      
      <li><b>Descripcion:</b> <?php echo $libro[0]['dec_pro'];?></li>
    </ul>
  </div></td>

</tr>

</table></span>
<?php
}
else
  echo "Los detalles de este producto no pueden ser mostrados en este momento.";
  echo "<hr>"; 
?>
<div id="boton1">
<a href="../carritocompras/ver_carrito.php?new=<?php echo $libro[0]['id_pieza']; ?>">
Agregar al carrito
</a>
</div>
</td>
</tr>
<tr>
<td>
<table width="100%">
<tbody>
<tr>
<td width="10%">
</td>
<td width="80%">
<div id="imagen3">

<a href="../principal/principal.php">
<embed src="../imagenes/producto3.jpg" quality="high" WIDTH="700" HEIGHT="219">

</a>
</div>
</td>
<td width="10%">
</td>
</tbody>
</table>
</td>
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