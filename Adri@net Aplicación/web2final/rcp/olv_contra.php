<html>
<head>
<title>..::Reestablecer Contraseña::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="javascript" type="text/javascript">
function validar(){

if(document.form1.email.value==""){
alert("Debe ingresar el email");
document.form1.correo.focus();
return 0;
}
document.form1.submit();
}
</script>
<link rel="stylesheet" type="text/css" href="../../../../Users/carlos/Desktop/sigba/estilos/estilos.css">
</head>
<body onLoad="document.form1.cedu.focus()">
<div align="center" class="usuario"><h1>SOLICITUD DE CONTRASEÑA</h1></div>
<form name="form1" method="post" action="val_olv_cont_web2.php">
  <table width="300" border="0" align="center">
<tr>
<td align="left"><font color="#FF0000"><b>Ingrese email:</b></font></td>
<td><input type="text" name="email" /></td>
</tr>
</table>
<div align="center"><input type="button" value="Solicitar" name="Bot&oacute;n" onClick="validar()" />
</div>
</form>
</body>
</html>
