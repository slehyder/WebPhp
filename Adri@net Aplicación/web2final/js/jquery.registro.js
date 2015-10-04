


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
         required:"Ingrese una dirección de E-mail para su confirmación",
         email:"Por favor escribe una dirección email válida",
        
          },
	   
	   password:{
       required:"Ingrese una contraseña",
       minlength:"Ingrese una contraseña mayor a 6 digitos",
	   maxlength:"Ingrese una contraseña menor a 20 digitos"
       },
	   
	   cedu:{
		   required:"Ingrese su cedula",
		  minlength:"Debe tener al menos 8 digitos"
	   }
	   
	   
		      
                    }//fin del los mensaje
                    
                        
                    
                    
                })
            });
   
