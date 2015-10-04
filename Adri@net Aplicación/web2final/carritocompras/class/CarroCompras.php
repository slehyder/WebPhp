<?php

require_once 'class/Conexion.php';
require_once 'class/Catalogo.php';

class CarroCompras
{

	public function insertar_pedido()
	{
		$conn= Conexion::db_connect();
		$sub_total=$_SESSION['total'];
		$total_siniva=$sub_total/1.12;
		$iva=$sub_total-$total_siniva;
		
		 $total_siniva= number_format($total_siniva, 2,'.','');
		$iva= number_format($iva, 2, '.' ,'');
		$sub_total= number_format($sub_total, 2, '.', '');
		
		$cedula=$_SESSION['cedula'];
		$sql="insert into factura values (now(),'$cedula', '$sub_total', null , now(), '$iva', '$total_siniva' , 0)";
		$result=$conn->query($sql);
		

		
		if (!$result)
			return false;
					
		//$sql="select id_pedido from pedidos
		//  where usuario='luis' and fecha=now() and hora=now()";					

		
		//$result=$conn->query($sql);
			
		//$pedido=$result->fetch_object();
				
		//$cod=$pedido->id_pedido;	
		
		//echo $cod;	

		//Obtengo el IdPedido para pasarselo a detalles mediante el metodo insert_id, 
		//este metodo lo que hace es recuperar el ultimo id autoincrementable que se registro en la BD.

		$id_pedido=$conn->insert_id;

            $tipo='pedido';
			$vista='sin ver';
			$sq="insert into notificaciones values ( null, '$cedula', '$id_pedido', '$tipo' , '$vista' , now() , now())";
			$resul=$conn->query($sq);
			
				$estatus='activo';
			$s="insert into pedidos values ( '$id_pedido', '$estatus', null )";
			$resu=$conn->query($s);
				
	/*	$sql="select max(id_pedido) from pedidos";
		
		$result=$conn->query($sql);
		
		if ($result->num_rows>0)
		{
			$pedido=$result->fetch_object();
			$idpedido=$pedido->id_pedido;	
		}
		else
		{
			return false;
		}*/
		
		$obj=new Catalogo();
		
		foreach ($_SESSION['cart'] as $isbn=>$cant)
		{
			$detail=$obj->get_detalles_libro($isbn);
			
		/*	$sql="delete from detalle_pedido where id_pedido=$cod and isbn='$isbn'";
			$result=$conn->query($sql);*/
			
			$precio=$detail[0]['precio_pro'];
			$sub_total1=$precio*$cant;	
			
		$precio= number_format($precio, 2, '.', '');
		$sub_total1=number_format($sub_total1, 2, '.', '');
		
			$sql="insert into detalle_factu values ( null, '$isbn', $cant, '$sub_total1' , '$precio' , $id_pedido)";
			$result=$conn->query($sql);
			
		
//auditoria
$q="INSERT INTO auditoria (id_auditoria, nom_client, accion, correo, hora, fecha , perfil) VALUES (null, '".$_SESSION['nombre']."', 'Realizo un pedido','".$_SESSION['email']."', now() , now() , '".$_SESSION['perfil']."' )";
$res=$conn->query($q);

//Base de datos tabla auditoria campos: id (auto_increment), usuario, detalle, tiempo timestamp 

			

			
			
			if (!$result)
				return false;			
		}
		
		//Si LLega hasta Aquí, se grabo OK el pedido, devolvemos TRUE.
		return true;	
	}

}



?>