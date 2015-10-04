<?php
	require_once("../Conexion/conexion.php");
	$db = conectar();
	
	$email=$_REQUEST['email'];
	$q="SELECT * FROM cliente WHERE email='".'$email'."'";
	$db=mysql_query($q) or die (mysql_error());
	if(mysql_num_rows($q)==0){
	?>
	<script language="javascript" type="text/javascript">
	alert("No existe ningún usuario registrado con este correo: <?php echo '$email';?>");
	window.location="olv_contra.php";
	</script>
	<?php
	}
	else{
	$x=mysql_fetch_array($q);
	
	if($_POST['$email']!=$x['email']){
	?>
	<script language="javascript" type="text/javascript">
	alert("Datos inválidos");
	window.location="olv_contra.php";
	</script>
	<?php
	}
	else{
	?>
	<script language="javascript" type="text/javascript">
	alert("Su contraseña es: <?php echo $x['password'];?>");
	window.location="index.php";
	</script>
	<?php
	}
	}
?>