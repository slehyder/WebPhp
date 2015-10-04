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

require_once '../conexion/ConexionI.php';

$conn= Conexion::db_connect();
$cedula=$_SESSION['cedula'];

$sql="SELECT * FROM cliente where cedula='".$cedula."' ";
$d=$conn->query($sql);
$s= mysqli_fetch_array($d);
$nom_admi=$s['nom_clie'];
$cedula=$s['cedula'];
$num_deposit=$s['num_deposit'];
$tipo_cuenta=$s['tipo_cuenta'];
$id_fact=$_POST['id_fact'];



			$s="insert into banco values ( '".$nom_admi."', '".$cedula."', '".$num_deposit."','".$tipo_cuenta."' , null )";
			$result=$conn->query($s);
 		
$id_pedido=$conn->insert_id;



            $tipo='baucher';
			$vista='sin ver';
			$sq="insert into notificaciones values ( null, '".$cedula."', '".$id_fact."', '".$tipo."' , '".$vista."' , now() , now())";
 		$resut=$conn->query($sq);
		
				$a="UPDATE factura SET id='$id_pedido' where id_fact='".$id_fact."'";
 		$resu=$conn->query($a);
		
		
 ?>
		  <script language="javascript">
 {
 alert('Se a enviado la informacion al usuario.');
 window.location="index_admin.php";
 } 
 </script> 
  
 
 