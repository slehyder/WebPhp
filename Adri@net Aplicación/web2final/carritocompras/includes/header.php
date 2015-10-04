<?php
//Captutamos las viarbles de sesion y lo almacenamos en variables.
if(isset($_SESSION['items'])) $items=$_SESSION['items']; else $items="0";
if(isset($_SESSION['total'])) $total=number_format($_SESSION['total'],2); else $total="0.00";

//Si no llega ningun valor, inicializamos las variables en 0 y 0.00 respectivamente

?>
<table >
 
<tr>
  
  
  <td align = right valign = bottom>
	<?php
	//Mostramos la cantidad de items en el carrito
	echo "Total Items=".$items;
	?>
  </td>
  
  <td align = right rowspan = 2>
	<a href="../carritocompras/ver_carrito.php?<?php echo SID; ?>">
		<img src="../carritocompras/images/carritofinal.png" width="70" border="0" />
	</a> 
  </td>
 
</tr>
  
<tr>
   
  <td align = right valign = top>	
	<?php
	//Mostramos el total a pagar por el usuario.
	 echo "Total Bsf/." . $total;
	?>
  </td>
  
</tr>

</table>