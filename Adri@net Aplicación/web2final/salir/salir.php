<?php
session_start();

include("../conexion/conexion.php");
$db=conectar();
$sql="INSERT INTO auditoria (id_auditoria, nom_client, accion, correo, hora, fecha , perfil) VALUES (null, '".$_SESSION['nombre']."', 'Cerro session','".$_SESSION['email']."', now() , now() , '".$_SESSION['perfil']."' )";
mysql_query($sql, $db);



session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Adri@net</title>
<script language = "javascript" type="text/javascript">
alert ("Su salida a sido exitosa");
window.location="../index.php";
</script>
</head>

<body onload="cierre_sesion()">
</body>
</html>
