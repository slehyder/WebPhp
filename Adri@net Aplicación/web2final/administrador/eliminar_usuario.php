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

$id=$_REQUEST['id'];


$m= "DELETE FROM  cliente WHERE cedula='".$id."'";

$s=mysql_query($m)or die(mysql_error());

?>

 <SCRIPT LANGUAGE="JavaScript">
	alert("El cliente ha sido borrado.");
	window.location="consulta_de_usuario.php";
 </SCRIPT>






