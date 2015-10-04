<?php
require_once("../conexion/conexion.php");
$db= conectar();
$contra=mysql_real_escape_string(strip_tags($_POST['password']));
$email=mysql_real_escape_string(strip_tags($_POST['email']));

//VALIDAMOS QUE EL CORREO EXISTA
$h= "SELECT * FROM cliente WHERE email='".$email."'";
$n=mysql_query($h, $db) or die(mysql_error());
$x = mysql_num_rows($n);
$y = mysql_fetch_array($n);

if($x==0){
echo '<script language="javascript">
alert ("No existe ningún usuario registrado con este correo");
window.location="inicio_form.php";
</script>';
}
//**************************************************************************************************

//VALIDAMOS QUE SEA CORRECTA LA CONTRASEÑA

elseif(crypt($contra, $y['password']) != $y['password']){
echo '<script language="javascript">
alert ("Error de Contraseña");
window.location="inicio_form.php";
</script>';
}
else{
session_start();
$array=explode(" ",$y['nom_clie']);

$_SESSION['nombre'] = $array[0];
$_SESSION['autenticado'] = "SI";
$_SESSION['password']=$y['password'];
$_SESSION['email']=$y['email'];
$_SESSION['cedula']=$y['cedula'];
if($y['id_perfil']==1){

header("location:../usuario/index_usuario.php");
$_SESSION['perfil'] = "usuario";
$sql="INSERT INTO auditoria (id_auditoria, nom_client, accion, correo, hora, fecha , perfil) VALUES (null, '".$_SESSION['nombre']."', 'Inicio session','".$_SESSION['email']."', now() , now() , '".$_SESSION['perfil']."' )";
mysql_query($sql, $db);


}


if($y['id_perfil']==2){
$_SESSION['perfil'] = "Administrador";

$l="INSERT INTO auditoria (id_auditoria, nom_client, accion, correo, hora, fecha , perfil) VALUES (null, '".$_SESSION['nombre']."', 'Inicio session','".$_SESSION['email']."', now() , now() , '".$_SESSION['perfil']."' )";
mysql_query($l, $db);
header("location:../administrador/index_admin.php");


}
} 
?>