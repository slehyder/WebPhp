// JavaScript Document

function validar(){
if(document.form.email.value==""){
alert("Debe ingresar su email");
document.form.email.focus();
return 0;
}

if(document.form.password.value==""){
alert("Debe ingresar su contraseña");
document.form.password.focus();
return 0;
}
document.form.submit();
}

