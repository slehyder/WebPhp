<?php

if (isset($_SESSION['cart'])&&array_count_values($_SESSION['cart']))
{
?>

 <style type="text/css">
<!--

        .Estilo1 {color: #990000}

a.tooltip {
    outline: none;
    text-decoration: none;
    border-bottom: dotted 1px blue;
    position: relative;
}

a.tooltip strong {
    line-height: 30px;
}

a.tooltip > span {
    width: 300px;
    padding: 10px 20px;
    margin-top: 0;
    margin-left: -120px;
    opacity: 0;
    visibility: hidden;
    z-index: 10;
    position: absolute;
    font-family: Arial;
    font-size: 12px;
    font-style: normal;
    border-radius: 3px;
    box-shadow: 2px 2px 2px #999;
    -webkit-transition-property: opacity, margin-top, visibility, margin-left;
    -webkit-transition-duration: 0.4s, 0.3s, 0.4s, 0.3s;
    -webkit-transition-timing-function: ease-in-out, ease-in-out, ease-in-out, ease-in-out;
    transition-property: opacity, margin-top, visibility, margin-left;
    transition-duration: 0.4s, 0.3s, 0.4s, 0.3s;
    transition-timing-function: 
        ease-in-out, ease-in-out, ease-in-out, ease-in-out;
}

/*a.tooltip > span:hover,*/
a.tooltip:hover > span {
    opacity: 1;
    text-decoration: none;
    visibility: visible;
    overflow: visible;
    margin-top: 50px;
    display: inline;
    margin-left: -90px;
}

a.tooltip span b {
    width: 15px;
    height: 15px;
    margin-left: 40px;
    margin-top: -19px;
    display: block;
    position: absolute;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
    -webkit-box-shadow: inset -1px 1px 0 #fff;
    -moz-box-shadow: inset 0 1px 0 #fff;
    -o-box-shadow: inset 0 1px 0 #fff;
    box-shadow: inset 0 1px 0 #fff;
    display: none\0/;
    *display: none;
}    

a.tooltip > span {
	color: #FFFFFF; 
	background: #333333;
	background: -webkit-linear-gradient(top, #333333, #999999);
	background: linear-gradient(top, #333333, #999999);	    
	border: 1px solid #000000;	     
}    
	  
a.tooltip span b {
	background: #333333;
	border-top: 1px solid #000000;
	border-right: 1px solid #000000;
}
        </style>

<table border = 0 width = 100% cellspacing = 0>
<tr>

<th colspan="2" bgcolor="#cccccc">Item</th>
<th bgcolor="#cccccc">Precio</th>
<th bgcolor="#999999">Cantidad</th>
<th bgcolor="#999999">Actualizar</th>
<th bgcolor="#cccccc">Total</th>
<th bgcolor="#cccccc">Borrar</th>



</tr>

<?php

  foreach ($_SESSION['cart'] as $isbn => $qty)//Empieza Bucle ForEach
  {
  	//Para Cada Libro en el Carro obtenemos su detalle.
    $libro = $obj->get_detalles_libro($isbn);	
?>

	<form name="form" action="actualizar_carrito.php" method="post">
	
	<tr>
	
	<td align="left"> 
	    <img src=<?php echo "../".$libro[0]['foto']; ?> border="0" height="50" width="50"> 
    </td>   
	 
    <td align = left>
    <a href="../detalles_product/detalles_produc.php?id=<?php echo $libro[0]['id_pieza'];?>">
	<?php echo $libro[0]['nom_pro'];?>				
	</a> 
	
    </td>
	
	<td align=center>
	<?php echo number_format($libro[0]['precio_pro'],2); ?>
    </td>
	
	<td align = center>
    <input type="text" name="cantidad" size="3" value="<?php echo $qty; ?> " />   
	</td>

	<td align = center>
		<input type="hidden" name="isbn" value="<?php echo $isbn; ?>"  />
		<input type="image" name="image" src="images/actualizar.gif" />
		<a href="#" class="tooltip"> <img src="../imagenes/signo.png" width="20" border="0" height="20"  />
	<span>  
		 
		Luego de cambiar la cantidad debe presionar el botón actualizar  <img src="images/actualizar.gif"  />
	</ span>  
</a>
	</td>
		
	<td align = center>
	<?php echo number_format($libro[0]["precio_pro"] * $qty,2);?>
	</td>
		
	<td align = center>	
	<a href="elimina_item.php?isbn=<?php echo $isbn;?>" title="elimina item">
	<img src="images/trash.gif" width="20" height="20" border="0"/>	
	</a>
	</td>
	
			
</tr>
</form>

<?php
  }//Termina Bucle ForEach
?> 
  
<tr>
          <th colspan="3" bgcolor="#cccccc">&nbsp;</td>
          
		  <th align = center bgcolor="#999999">
           <?php
			   echo  $_SESSION['items'];
			?>
          </th>

		  
		  <th align = center bgcolor="#999999">
             
          </th>
		  
          <th align = center bgcolor="#cccccc">
              <?php echo number_format($_SESSION['total'],2);?>
          </th>
		  
		  <th align = center bgcolor="#cccccc">
<span class="Estilo1">Bsf </span>
          
          </th>		  
</tr>

</table>

<?php
}
else
{
   echo "<p>No hay artículos en tu carro";
   echo "<hr>";
}
?>