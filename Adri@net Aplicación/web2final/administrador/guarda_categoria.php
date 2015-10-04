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
$id=mysql_real_escape_string(strip_tags($_POST['id']));
$nom=mysql_real_escape_string(strip_tags($_POST['nom']));


 $sql = "SELECT * FROM `categoria` WHERE`id_cate` = '".$id."'";
$c = mysql_query($sql) or die (mysql_error());
$num = mysql_num_rows($c);
if($num!=0){
?>
<script language = "javascript" type="text/javascript">
alert ("Ya existe una marca con ese codigo");
window.location="registro_categoria.php";
</script>
<?php
}

else{
$sql="INSERT INTO categoria (id_cate, des_cate) VALUES ('".$id."', '".$nom."')";
 		mysql_query($sql, $db) or die (mysql_error());
	}	 ?>
		  <script language="javascript">
 {
 alert('Registro confirmado');
 window.location="index_admin.php";
 } 
 </script> 
  
 
 