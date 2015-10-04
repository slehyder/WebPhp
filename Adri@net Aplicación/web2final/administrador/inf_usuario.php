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










<html>
	<head>
		<title></title>
	    <style type="text/css">
<!--
.Estilo1 {font-size: 14px}
-->
body {
background:#ECECFF;
color:#333333;
}
        </style>
		
</head>
	<body>


<?php
include("../conexion/conexion.php");
$db=conectar();

$cedula=$_REQUEST['id'];
$s="SELECT * FROM cliente WHERE cedula='".$cedula."'";
$b=mysql_query($s,$db)or die(mysql_error());
$datos=mysql_fetch_array($b);
$nombre=$datos['nom_clie'];
$tlf=$datos['telf_clie'];
$dire=$datos['dire_clie'];
$email=$datos['email'];
?>
<div align="center"> <h3> Datos del cliente </h1> </div>

<table  bordercolor="#C4CEFF">

	        <td >Nombre:&nbsp;</td>
        <td><?php echo $datos['nom_clie'] ?> </td>
	  </tr>
			      <tr> 
	        <td>Cedula:&nbsp;</td>
	    <td><?php echo $cedula ?> </td>
	    </tr>
	    
	      <tr>
	        <td> Telefono:&nbsp;</td>
		    <td><?php echo $datos['telf_clie'] ?> </td>
          </tr>
	      
	      <tr>
	        <td>Direcion:&nbsp;</td>
           <td><?php echo $datos['dire_clie'] ?> </td>
		    </tr>
			
				      <tr>
	        <td>Email:&nbsp;</td>
           <td><?php echo $datos['email'] ?> </td>
		    </tr>
			</table>



   
   
 </div>
	</body>
</html>