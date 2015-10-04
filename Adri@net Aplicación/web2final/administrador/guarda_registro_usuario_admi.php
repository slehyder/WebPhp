

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
window.location="registro_usuario_del_admi.php";
</script>
<?php
}

else{
$sql="INSERT INTO cliente (nom_clie,email,password ,dire_clie,telf_clie,id_perfil,cedula) VALUES ('".$nom_clie."', '".$email."', '".$pass."', '".$dire_clie."', '".$telf_clie."','1','".$cedu."')";
 		mysql_query($sql, $db) or die (mysql_error());
	}	 ?>
		  <script language="javascript">
 {
 alert('Registro confirmado');
 window.location="consulta_de_usuario.php";
 } 
 </script> 
  
 
 