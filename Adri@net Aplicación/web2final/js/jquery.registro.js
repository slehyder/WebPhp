


$(document).ready(function() {
                $("#form2").validate({
                    rules:{
                        
		
      nom:{
       required:true,
       minlength:4,
	   maxlength: 10
       },
	   
	   tlf:{
       required:true,
       minlength:7,
	   maxlength: 11
       },
       
	   dire:{
       required:true,
	   },
	   
	   email:{
         required:true,
         
         email:true}
		 
	   password:{
       required:true,
       minlength:6,
	   maxlength: 20
       },
	   	   cedu:{
       required:true,
       minlength:8
       },
	 
   
            },
     //inicicio de mensaje                    
                    messages:{
                                             
                      
      nom:{
       required:"Ingrese su Nombre",
       minlength:"Nombre Invalido",
       maxlength:"Nombre Invalido"
	   },
	   
	  
	   
       email:{
         required:"Ingrese una direcci�n de E-mail para su confirmaci�n",
         email:"Por favor escribe una direcci�n email v�lida",
        
          },
	   
	   password:{
       required:"Ingrese una contrase�a",
       minlength:"Ingrese una contrase�a mayor a 6 digitos",
	   maxlength:"Ingrese una contrase�a menor a 20 digitos"
       },
	   
	   cedu:{
		   required:"Ingrese su cedula",
		  minlength:"Debe tener al menos 8 digitos"
	   }
	   
	   
		      
                    }//fin del los mensaje
                    
                        
                    
                    
                })
            });
   
