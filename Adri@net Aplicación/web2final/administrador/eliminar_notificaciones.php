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



$m= "delete from notificaciones where tipo='pedido' or tipo='numdeposito' ";

$s=mysql_query($m)or die(mysql_error());

?>

 <SCRIPT LANGUAGE="JavaScript">
	alert("Las notificaciones han sido borradas.");
	 window.location="ver_notificaciones.php";
 </SCRIPT>




