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



 <?php

include("../conexion/conexion.php");
$db=conectar();
$id_pieza=mysql_real_escape_string(strip_tags($_REQUEST['id_pieza']));

$rutaEnServidor='fotos';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
$rutaDestinox='../'.$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestinox);

		$a="UPDATE producto SET foto='".$rutaDestino."' where id_pieza='".$id_pieza."'";
 		mysql_query($a, $db);
?>

 <SCRIPT LANGUAGE="JavaScript">
	alert("La foto ha sido actualizada");
	window.location="consulta_de_producto.php";
 </SCRIPT>
