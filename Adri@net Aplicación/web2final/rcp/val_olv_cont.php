<?php
	require_once("../Conexion/conexion.php");
	$a = conectar();

	$x=mysql_fetch_array($a);
	
	if($_POST['email']!=$x['email']){
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
	window.location="ingreso.php";
	</script>
	<?php
	}
	}
?>