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

<script type="text/javascript" src="../js/sliderman.1.3.7.js"></script>
<script type="text/javascript" src="../js/jquery-1.2.3.min.js"></script>
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
	color: #333333;
	font-weight: bold;
}
.Estilo2 {
	color: #990000;
	font-weight: bold;
}
.Estilo3 {color: #000066}
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
<td  width="10%"></td>
<td>

<div align='center'> 
<div class="CSSTableGenera" >  
 
  <table> 

<?php  
include("../conexion/conexion.php");
$db=conectar();
$id_tipo=$_POST['id_tipo'];
$id_marca=$_POST['id'];


    $_pagi_sql = "select * from producto where (id_cate='$id_tipo' or id_marca='$id_marca') or (id_cate='$id_tipo' and id_marca='$id_marca') order BY id_pieza asc";  
    $_pagi_result = mysql_query($_pagi_sql);  
    $numero_registros = mysql_num_rows($_pagi_result);  

    $_pagi_cuantos = 10;    // Numero de registros por pagina  

            include("../paginator.inc/paginator.inc.php");  

    while ($registro = mysql_fetch_array($_pagi_result)){
		
    $precio_pro=$registro['precio_pro'];
		    $foto="../".$registro['foto']; 
			$nom_pro=$registro['nom_pro'];
			
	 
?>
    <tr>  
      <td width='160' height="130">
	  <ul class="hoverbox">
	  <li>
	  <a href="#"><img src="<?php echo $foto; ?>" width="110" height="100" alt="description"/> <img src="<?php echo $foto; ?>" width="110" height="100"alt="description" class="preview"/></a>	  </li>
	  </ul>
      </td>  
      <td width='160' class="Estilo3"><?php echo $nom_pro; ?></td>   
      <td width='160' class="Estilo2" ><div class="Estilo2"> Bsf <?php echo $precio_pro; ?></div></td> 
	  <td width='160'><a href="../detalles_product/detalles_produc_naveg.php?id=<?php echo $registro['id_pieza']?>"><strong> Ver mas Inf.. </strong></a></td>
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


</div>

</div>


</td>
<td  width="10%"></td>
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