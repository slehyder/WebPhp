<?php 
session_start();
if(isset($_SESSION['autenticado'])!="SI")
{

?>










<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Adri@net</title>
<link href="imagenes/logito.jpg" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="css/principal.css"  type="text/css" media="screen">
<link rel="stylesheet" href="css/lavalamp.css" type="text/css" media="screen">
<link type="text/css" rel="stylesheet" href="css/sliderman.css"  />
<link rel="stylesheet" href='css/hoverbox.css' type="text/css" media="screen" />

<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
<script type="text/javascript" src="js/jquery-1.2.3.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
<script type="text/javascript">
$(function() {
$("#1, #2, #3").lavaLamp({
fx: "backout",
 speed: 700,
});
});
    </script>
<style type="text/css">
.Estilo2 {color: #FFFFFF}
<!--
.Estilo1 {
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
<a href="." >
<img alt="banner" width="300" border="0" height="95"  src="imagenes/logo.png" />
</a>
</td>
<td width="100%" valign="bottom" style="padding-left: 15px;">

<table width="100%" cellspacing="0" cellpadding="0" border="0">


<tbody>
<tr height="">
<td class="mainmenu" width="2%" nowrap="" 8px;"=" padding-top:="" 15px;="" padding-left:="" #cccccc;="" solid="" 1px=""></td>
<td class="mainmenu" width="14%" valign="middle" nowrap="" align="center" style="border-left: 1px solid #cccccc; padding-left: 15px; padding-top: 8px;">
<p>
<a href="http://www.facebook.com" target="_blank">
<img  alt="fb" width="30" border="0" height="30"  src="imagenes/facebook.png" />
</a>
</p>
<p>
<a href="http://www.twitter.com" target="_blank">

<img  alt="tw" width="30" border="0" height="30"  src="imagenes/twitter.png" />

</a>
</p>
</td>
<td class="mainmenu" width="1%" valign="middle" nowrap="" align="center" 8px;"=" padding-top:="" 15px;="" padding-left:="" #cccccc;="" solid="" 1px=""></td>
<td class="mainmenu" width="50%" valign="middle" nowrap="" align="center" style="border-left: 1px solid #cccccc; padding-left: 15px; padding-top: 8px;">

<div id="banner_top" align="right" style="padding: 0px;">
<FORM METHOD=POST ACTION="buscador/buscador.php"  name="buscar">
<table border="0" width="100%">
<tr>
<td>
Buscar: 
</td>
<td  width="100%" nowrap="" align="right" style="border-right: 0px;" >
<INPUT TYPE="text" NAME="cadena" required="required" size="50">
</td>
<td>
<input type="image" src="imagenes/lupa.png" width="25" height="25"  alt="Demo2 first" >
</td>
</tr>
</table>
</FORM> 
</div>
<div a class="toplink" align="right" style="padding: 12px;">
<ul class="lavaLampWithImage" id="1">
    <li class="current"><a href="registro/registro_usuario.php">Registrate</a></li>
    <li><a href="inicio_session/inicio_form.php">Ingresa</a></li>
    <li><a href="contacto/contacto.php">Contacto</a></li>
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
<table width="100%" border="0">
<tbody>
<tr>

<td width="100" valign="middle" align="right">
<br />
<div align="center"  >
<a href="registro/registro_usuario.php">
<embed src="imagenes/descarga.jpg" quality="high" WIDTH="190" style="border-radius: 20px;"  HEIGHT="150"></embed>
</a>

</div>
</td>
<td width="600" valign="middle" align="center">
    <a href="http://www.facebook.com">
        <div align="center" style="padding-top: 3px; padding-bottom: 3px;">
            <table cellspacing="0" cellpadding="1">
                <tbody>
                    <tr>
                        <td align="center">
                            <a target="_blank" href="registro/registro_usuario.php">
							<div id="banner2">
<br />
                                <embed src="imagenes/mientras.swf" quality="high" WIDTH="690" HEIGHT="130"><hr align='right'> </embed>
								</div>                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </a>

</td>

</tr>
</tbody>
</table>
<tr>

    <td colspan="3"></td>

</tr>

    </tbody>

</table>
<table width="100%" border="0">
<tbody>
<tr>

    <td width="22%" valign="top" align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
				<tr>
				
				<td align="center" >
				<div id="tipoprodutostop">
				<br />
				<span class="Estilo2">Tipos De Productos</span>				<br />
				<br />
				</div>

				</td>
								</tr>
								<tr>

    <td valign="middle" align="center" colspan="2" height="2"></td>

</tr>
								
								<tr>
<td>
<div id="tipoprodutos">
<?php
			     $a='1';
                 $b='12';
                 $c='2';
                $z='11';
                 $e='3';
               $f='14';
				$g='5';
				
				$j='6';
				
				$l='7';
				$m='8';
				$n='9';

				$p='10';
				$x='14';
			$�='13';


?>
<br  />

<a href="principal/principal2.php?id=<?php echo $a ;?>" >� Componentes de pc  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $c ;?>" >� Memoria ram  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $e ;?>" >� Procesadores  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $f ;?>" >� Tarjeta madre  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $g ;?>" >� Unidad DVD/CD  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $j ;?>" >� Monitores  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $l ;?>" >� Impresoras  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $m ;?>" >� Routers  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $n ;?>" >� Pendrive  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $p ;?>" >� Tarjeta de video  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $� ;?>" >� Tarjeta de Sonido  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $x ;?>" >� Tarjeta de Red  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $z ;?>" >� Proyectores  </a> <br  /><br  />
<a href="principal/principal2.php?id=<?php echo $b ;?>" >� Disco Duro </a> <br  /><br  />
</div>
</td>

</tr>
<tr>
<td>
<div id="imagen2">
<a href="registro/registro_usuario.php">
<img id="imagen4" src="imagenes/images.jpg" quality="high" height="210" style="border-radius: 20px;" width="200"></a></div>
</a>
</td>
</tr>
								    </tbody>

</table>
</td>

<td width="78%" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">

    <tbody>
        <tr>

<td>
<div id="wrapper">

		<div id="examples_outer">
			<div id="slider_container_2">

				<div id="SliderName_2" class="SliderName_2">
					<img src="imagenes/cerebro.png" width="660" height="253" alt="Demo2 first" title="Demo2 first" usemap="#img1map" />
					<map name="img1map">
						<area href="#img1map-area1" shape="rect" coords="100,100,200,200" />
						<area href="#img1map-area2" shape="rect" coords="300,100,400,200" />
					</map>
					<div class="SliderName_2Description">Su web de confianza:<strong>Adri@net</strong></div>
					<img src="imagenes/mundo.png" width="660" height="253" alt="Demo2 second" title="Demo2 second" />
					<div class="SliderName_2Description">Su web de confianza: <strong>Adri@net</strong></div>
					<img src="imagenes/mundillo.png" width="660" height="253" alt="Demo2 third" title="Demo2 third" />
					<div class="SliderName_2Description">Su web de confianza: <strong>Adri@net</strong></div>
					<img src="imagenes/web.png" width="660" height="253" alt="Demo2 fourth" title="Demo2 fourth" />
					<div class="SliderName_2Description">Su web de confianza: <strong>Adri@net</strong></div>
					
				</div>
				<div class="c"></div>
				<div id="SliderNameNavigation_2"></div>
				<div class="c"></div>

				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 660, height: 245, effects: effectsDemo2,
						display: {
							autoplay: 3000,
							loading: {background: '#000000', opacity: 0.5, image: 'imagenes/loading.gif'},
							buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
							description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
							navigation: {container: 'SliderNameNavigation_2', label: '<img src="imagenes/clear.gif" />'}
						}
					});
				</script>

				<div class="c"></div>
			</div>
			<div class="c"></div>
			
		</div>

		<div class="c"></div>
		
</div>
<br />



</td>
</tr>
<tr>
<td><table>
<tbody>
<tr>

<td width="8%">
</td><td>
				<div id="imagen">

<embed src="imagenes/ingresa2.jpg" quality="high" WIDTH="200" HEIGHT="25"></embed>


</div>
</td>

<td width="8%">
</td>
</tr>
</tbody>
</table>
<table  >
<tr>
<td width="5%">
</td>
<?php  
include("conexion/conexion.php");
$db=conectar();


    $_pagi_sql = "select * from producto order by cant_pro desc";  
    $_pagi_result = mysql_query($_pagi_sql);  
    $numero_registros = mysql_num_rows($_pagi_result);  

    $_pagi_cuantos = 4;    // Numero de registros por pagina  

            include("paginator.inc/paginator.inc.php");  
   
    while ($registro = mysql_fetch_array($_pagi_result)){
		
    $precio_pro=$registro['precio_pro'];
		    $foto=$registro['foto']; 
			$nom_pro=$registro['nom_pro'];
			
	 
?>
 
      <td width='160' height="130" bgcolor="#EAEEFF" align="center">
	  <ul class="hoverbox">
	  <li>
	  <a href="#"><img src="<?php echo $foto; ?>" width="110" height="100" alt="description"/> <img src="<?php echo $foto; ?>" width="110" height="100"alt="description" class="preview"/></a>
	  </li>
	  </ul>
	 <div class="Rstilo3" > <a href="detalles_product/detalles_produc_naveg.php?id=<?php echo $registro['id_pieza']?>"> <?php echo $nom_pro; ?></a> </div> 
	  <div class="Estilo1">  Bsf <?php echo $precio_pro; ?> </div>
	  
      </td>   
    
<?php
}   
// Incluimos las barras de navegacion e informacion



echo "
<td width=5% >
</td>

</tr>  
   </table>  
</div> 

</div>
";
?>  
</td>


</td>
</tr>
<tr>
<td>
<div id="imagen2">
<a href="inicio_session/inicio_form.php">
<img id="imagen4" src="imagenes/producto2.jpg" quality="high" height="200" width="670"></a></div>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tbody>
</table>

</td>
</tr>
</tbody>
</table>
</div>
<div id="piepagina" align="center" style="padding: 5px;">

    <a href=".">Inicio</a>


    								| 

    <a href="inicio_session/inicio_form.php">Compra</a>


    								| 

    <a href="registro/registro_usuario.php">Inscribite</a>


    				| 

    <a href="inicio_session/inicio_form.php">Ingresa</a>


    				| 

    <a href="contacto/contacto.php">Contactanos</a>
| 

    <a href="pdf/MANUAL DE USUARIO.pdf">Manual de uso</a>



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
elseif(isset($_SESSION['perfil']) && $_SESSION['perfil']!="usuario"){

header("location:administrador/micuenta_admi.php");
}
else
{
header("location:usuario/index_usuario.php");

}


?>


