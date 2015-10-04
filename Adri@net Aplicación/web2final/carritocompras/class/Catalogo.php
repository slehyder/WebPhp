<?php

require_once ('Conexion.php');

class Catalogo
{

	public function get_categorias()
	{
		$conn= Conexion::db_connect();
		
		$sql="select * from categorias";
		$result=$conn->query($sql);
		
		if (!$result)
			return false;
		
		$cat_array=array();
		
		while ($reg= $result->fetch_assoc())
		{
			$cat_array[]=$reg;
		}
		return $cat_array;
	}
	
	public function get_nombre_cat($idcat)
	{
		$conn= Conexion::db_connect();
		
		$sql="select nom_categoria from categorias where id_categoria=$idcat";
		
		$result=$conn->query($sql);
		
		if (! $result)
			return false;
		
		$num_cats=$result->num_rows;
		
		if ($num_cats ==0)
			return false;
			
		$row=$result->fetch_object();
		return $row->nom_categoria;	
	}
	
	public function get_libros_cat($idcat)
	{
		$conn= Conexion::db_connect();
		
		$sql="select * from libros where id_categoria=$idcat";
		$result=$conn->query($sql);
		
		if (!$result)
			return false;
		
		$prod_array=array();
		
		while ($reg= $result->fetch_assoc())
		{
			$prod_array[]=$reg;
		}
		return $prod_array;	
	}	
	
	public function get_detalles_libro($isbn)
	{
		$conn= Conexion::db_connect();
		
		$sql="select * from producto where id_pieza='".$isbn."'";
		$result=$conn->query($sql);
		
		if (!$result)
			return false;
		
		$prod=array();

		if ($reg=$result->fetch_array())
		{
			$prod[]=$reg;
		}
		return $prod;		
	}	
	
	
	public static function calcular_items($cart)
	{
		$items=0;
		
		if (is_array($cart))
		{
			$items=array_sum($cart);
		}
		return $items;
	} 
	
	public static function calcular_total($cart)
	{
		$precio=0.0;
	
		if (is_array($cart))
		{
			$conn= Conexion::db_connect();
			
			foreach ($cart as $isbn=>$cant)
			{
				$sql="select precio_pro from producto where id_pieza='".$isbn."'";
				$result=$conn->query($sql);
			
				if ($result)
				{
					$item=$result->fetch_object();
				
					$item_precio=$item->precio_pro;
					
					$precio += $item_precio * $cant;
				}	
			}
		}
		return $precio;	
	}		
}
?>