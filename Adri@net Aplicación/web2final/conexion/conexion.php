<?php

function conectar(){

$db = mysql_connect("localhost","adrianet_admin","admin");
mysql_select_db("adrianet_admin",$db);

return $db;}

?>
