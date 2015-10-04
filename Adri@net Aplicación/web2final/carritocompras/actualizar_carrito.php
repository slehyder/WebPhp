<?php
//Iniciamos una Sesion
session_start();

//Cargamos la Libreria Catalogo para poder hacer uso de sus respectivos metodos.
require_once('class/Catalogo.php');

//Capturamos en Variables lo que viene via POST, tambien se pudo haber usado la funcion Extract....
$isbn=$_POST['isbn'];
$cant=$_POST['cantidad'];

//Si no viene via POST la variable cant o si se ingresa cero en la cantidad, inicializar cantidad en 1.
if(!isset($cant) or $cant==0 or !is_numeric($cant))
{
	$cant=1;
	//Actualizamos la cantidad que tiene el carro por la que viene VIA POST.
$_SESSION['cart'][$isbn]=$cant;

//Calculamos la cantidad  de items, que el usuarios va a comprar
// mediante el metodo estatico calcular_items y dicho valor lo almacenamos en la variable de sesion
//item. ($_SESSION['items'])
$_SESSION['items']=	Catalogo::calcular_items($_SESSION['cart']);
		
//Calculamos el total a pagar por el usuario, mediante el metodo estatico calcular_total,
//dicho valor obtenido lo almacenamos en la variable de sesion total ($_SESSION['total'])
$_SESSION['total']= Catalogo::calcular_total($_SESSION['cart']);
	
echo "<script type=\"text/javascript\">
           history.go(-1);
       </script>";
}
 else
  {
include("../conexion/conexion.php");
$db=conectar();
$num= "select * from producto where id_pieza='".$isbn."'";
$num1= mysql_query($num,$db);
$datos=mysql_fetch_array($num1);
$cantidad=$datos['cant_pro'];

if($cant<=$cantidad){

//Actualizamos la cantidad que tiene el carro por la que viene VIA POST.
$_SESSION['cart'][$isbn]=$cant;

//Calculamos la cantidad  de items, que el usuarios va a comprar
// mediante el metodo estatico calcular_items y dicho valor lo almacenamos en la variable de sesion
//item. ($_SESSION['items'])
$_SESSION['items']=	Catalogo::calcular_items($_SESSION['cart']);
		
//Calculamos el total a pagar por el usuario, mediante el metodo estatico calcular_total,
//dicho valor obtenido lo almacenamos en la variable de sesion total ($_SESSION['total'])
$_SESSION['total']= Catalogo::calcular_total($_SESSION['cart']);

//Redireccionamos a la Pagina que muestra el carrito de Compras.
header("Location:ver_carrito.php");
} else {
echo "<script type=\"text/javascript\">
           alert('No tenemos esa cantidad de productos lo sentimos.');
           history.go(-1);
       </script>";
}

}
?>

