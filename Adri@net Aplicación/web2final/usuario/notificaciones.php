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
	<head>
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
		
</head>
	<body>


<?php
include("../conexion/conexion.php");
$db=conectar();
$num=0;
$cedula=$_SESSION['cedula'];
$s="SELECT * FROM factura WHERE  cedula='".$cedula."' ";
$q=mysql_query($s,$db)or die(mysql_error());
while($filas=mysql_fetch_array($q)){

$id_fact=$filas['id_fact'];


$sql="SELECT * FROM notificaciones WHERE (vista='sin ver' and id_fact='$id_fact') and (tipo='baucher' or tipo='cancelado' or tipo='vendido') ";
$d=mysql_query($sql,$db)or die(mysql_error());
$numero = mysql_num_rows($d); 
$num=$num+$numero;
}

if ($num==0)
{
   echo "<p>No hay notificaciones pendientes.";
   echo "<hr>";
?>





<?php
}
else
{

$x="SELECT * FROM factura WHERE  cedula='".$cedula."' ";
$n=mysql_query($x,$db)or die(mysql_error());
while($fi=mysql_fetch_array($n)){

$id_fac=$fi['id_fact'];

$sq="SELECT * FROM notificaciones WHERE (vista='sin ver' and id_fact='$id_fac') and (tipo='baucher' or tipo='cancelado'  or tipo='vendido')";
$a=mysql_query($sq,$db)or die(mysql_error());
while($s= mysql_fetch_array($a))
{
$cedula=$s['cedula'];
$fecha=$s['fecha'];
$hora=$s['hora'];
$id_fat=$s['id_fact'];
$tipo=$s['tipo'];
$s="SELECT * FROM cliente WHERE cedula='".$cedula."'";
$b=mysql_query($s,$db)or die(mysql_error());
$datos=mysql_fetch_array($b);
$nombre=$datos['nom_clie'];
$cedu=$datos['cedula'];

if($tipo=='baucher'){

?> <strong><span class="Estilo2">  <?php echo $nombre  ?> (admin)</span> A enviado los datos para la realizacion del deposito o transferencia <a href="consulta_de_inf_baucher.php?id_fact=<?php echo $id_fac ?>" style="text-decoration:none" target="_blank" >Ver inf.</a> <br>
</strong>
<span class="Estilo1">Hecho el <?php echo $fecha ?> a las <?php echo $hora ?></span>  <br> 
<hr> 

   <?php
}
if($tipo=='cancelado'){

?> <strong><span class="Estilo2">  <?php echo $nombre  ?> (admin)</span> Tu pedido se ha cancelado<a href="consulta_de_inf_cancelado.php?id_fact=<?php echo $id_fac ?>" style="text-decoration:none" target="_blank" >Ver inf.</a> <br>
</strong>
<span class="Estilo1">Hecho el <?php echo $fecha ?> a las <?php echo $hora ?></span>  <br> 
<hr> 

   <?php
}
if($tipo=='vendido'){

?> <strong><span class="Estilo2">  <?php echo $nombre  ?> (admin)</span> Tu pedido se ha procesado con exito<a href="consulta_de_inf_vendido.php?id_fact=<?php echo $id_fac ?>" style="text-decoration:none" target="_blank" >Ver inf.</a> <br>
</strong>
<span class="Estilo1">Hecho el <?php echo $fecha ?> a las <?php echo $hora ?></span>  <br> 
<hr> 

   <?php
}
}
}
?>

<?php


}
?>
   <div align="center"><span class="Estilo1"><a href="ver_notificaciones.php" target="_blank" >Ver todas</a></span></div>
   
 </div>
	</body>
</html>