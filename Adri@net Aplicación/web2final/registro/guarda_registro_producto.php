
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
$cant_pro=mysql_real_escape_string(strip_tags($_POST['cant_pro']));

$nom_pro=mysql_real_escape_string(strip_tags($_POST['nom_pro']));
$precio_pro=mysql_real_escape_string(strip_tags($_POST['precio_pro']));
$dec_pro=$_POST['dec_pro'];
$tipo_pro=mysql_real_escape_string(strip_tags($_POST['tipo_pro']));
$marca=mysql_real_escape_string(strip_tags($_POST['marca']));
$stock_max=mysql_real_escape_string(strip_tags($_POST['stock_max']));
$stock_min=mysql_real_escape_string(strip_tags($_POST['stock_min']));

$rutaEnServidor='fotos';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
$rutaDestinox='../'.$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestinox);




$num= "select * from num ORDER BY num_id DESC LIMIT 1";
$num1= mysql_query($num,$db);
$datos=mysql_fetch_array($num1);

$numne=$datos['num_id']+1;

$nom_proo=substr($nom_pro,0,3);

$id_pieza=$nom_proo.$tipo_pro.$marca.'-'.$numne;

$inser="insert into num (id_pieza, num_id) values ('$id_pieza', '')";
mysql_query($inser,$db) or die (mysql_error());


$sql="INSERT INTO producto (id_pieza,dec_pro,cant_pro,precio_pro,nom_pro,foto,id_marca,id_cate) VALUES ('".$id_pieza."', '".$dec_pro."' ,'".$cant_pro."', '".$precio_pro."', '".$nom_pro."', '".$rutaDestino."' , '".$marca."' , '".$tipo_pro."')";
 		mysql_query($sql, $db) or die (mysql_error());
		
		$sq="INSERT INTO inventario (id_inventa, cant_invent, stock_max, stock_min, id_pieza) VALUES (null , '".$cant_pro."', '".$stock_max."','".$stock_min."' , '".$id_pieza."')";
 		mysql_query($sq, $db) or die (mysql_error());
		
		 ?>
		  <script language="javascript">
 {
 alert('Registro confirmado');
 window.location="../administrador/consulta_de_producto.php";
 }
 </script>
