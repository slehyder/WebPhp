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
        </style>
		
</head>
	<body>


<?php
include("../conexion/conexion.php");
$db=conectar();

$sql="SELECT * FROM notificaciones WHERE (vista='sin ver') and (tipo='pedido' or tipo='numdeposito') ";
$d=mysql_query($sql,$db)or die(mysql_error());
$numero = mysql_num_rows($d); 



if ($numero==0)
{
   echo "<p>No hay notificaciones pendientes.";
   echo "<hr>";
?>





<?php
}
else
{


$sq="SELECT * FROM notificaciones WHERE (vista='sin ver') and (tipo='pedido' or tipo='numdeposito') ";
$a=mysql_query($sq,$db)or die(mysql_error());
while($s= mysql_fetch_array($a))
{
$cedula=$s['cedula'];
$fecha=$s['fecha'];
$hora=$s['hora'];
$id_fact=$s['id_fact'];
$tipo=$s['tipo'];
$s="SELECT * FROM cliente WHERE cedula='".$cedula."'";
$b=mysql_query($s,$db)or die(mysql_error());
$datos=mysql_fetch_array($b);
$nombre=$datos['nom_clie'];
$cedu=$datos['cedula'];

if($tipo=='pedido')
{
?> <strong>  <a href="consulta_de_usuario2.php?cedula=<?php echo $cedula ?>" style="text-decoration:none" target="_blank"><?php echo $nombre  ?></a> a realizado un pedido<a href="consulta_notificaciones.php?id_fact=<?php echo $id_fact ?>" style="text-decoration:none" target="_blank" >Ver pedido</a> <br></strong>
<span class="Estilo1">Hecho el <?php echo $fecha ?> a las <?php echo $hora ?></span>  <br> 
<hr> 

   <?php
}
if($tipo=='numdeposito')
{
?> <strong>  <a href="consulta_de_usuario2.php?cedula=<?php echo $cedula ?>" style="text-decoration:none" target="_blank"><?php echo $nombre  ?></a>  a enviado los datos pertinentes del deposito<a href="consulta_num_deposito.php?id_fact=<?php echo $id_fact ?>" style="text-decoration:none" target="_blank" >Ver inf.</a> <br></strong>
<span class="Estilo1">Hecho el <?php echo $fecha ?> a las <?php echo $hora ?></span>  <br> 
<hr> 

   <?php
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