<?php
include("../conexion/conexion.php");

$db=conectar();
$nom_clie=mysql_real_escape_string(strip_tags($_POST['nom']));
$email=mysql_real_escape_string(strip_tags($_POST['email']));
$password=mysql_real_escape_string(strip_tags($_POST['password']));
$dire_clie=mysql_real_escape_string(strip_tags($_POST['dire']));
$telf_clie=mysql_real_escape_string(strip_tags($_POST['tlf']));
$cedu=mysql_real_escape_string(strip_tags($_POST['cedu']));
$pass= crypt($password);

//VALIDAMOS QUE EL CORREO NO EXISTA

 $sql = "SELECT * FROM `cliente` WHERE`email` = '".$email."'";
$c = mysql_query($sql) or die (mysql_error());
$num = mysql_num_rows($c);
if($num!=0){
?>
<script language = "javascript" type="text/javascript">
alert ("Ya existe un usuario registrado con este correo");
window.location="registro_usuario.php";
</script>
<?php
}

else{

 $sq= "SELECT * FROM `cliente` WHERE`cedula` = '".$cedu."'";
$a= mysql_query($sq) or die (mysql_error());
$nu= mysql_num_rows($a);
if($nu!=0){
?>
<script language = "javascript" type="text/javascript">
alert ("Ya existe un usuario registrado con esta cedula");
window.location="registro_usuario.php";
</script>
<?php
}

else{


$sql="INSERT INTO cliente (nom_clie,email,password ,dire_clie,telf_clie,id_perfil,cedula) VALUES ('".$nom_clie."', '".$email."', '".$pass."', '".$dire_clie."', '".$telf_clie."','1','".$cedu."' )";
 		mysql_query($sql, $db) or die (mysql_error());
		 ?>
		  <script language="javascript">
 {
 alert('Registro confirmado');
 window.location="../inicio_session/inicio_form.php";
 } 
 </script> 
<?php
}
} 
?>
  
 
 