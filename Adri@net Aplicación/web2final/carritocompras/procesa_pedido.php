<?php
session_start();
require_once 'class/CarroCompras.php';

$obj= new CarroCompras();


if($_SESSION['cart'] && $_SESSION['items'] && $_SESSION['total'])
{
		
	if ($obj->insertar_pedido())
	{
		unset($_SESSION['cart']);
		unset($_SESSION['items']);
		unset($_SESSION['total']);
		echo "<script type='text/javascript'>
		alert('Su Pedido Ha Sido Procesado con Exito, Le Haremos Saber Si Su Pedido Fue Aceptado en las proximas 24 Horas.');
		window.location='../usuario/index_usuario.php';
		</script>";
	}
	else
	{
 			unset($_SESSION['cart']);
		unset($_SESSION['items']);
		unset($_SESSION['total']);
 	echo "Pedido Fallido.";
	}
}
else
{
	echo "<script type='text/javascript'>
		alert('No hay Articulos en el Carrito.');
		window.location='../usuario/index_usuario.php';
		</script>";
}
?>
