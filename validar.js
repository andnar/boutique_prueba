function validarDatos() {
 	var variable = true;

 		if(!document.form.email.value){
 			alert("Ingresa tu email");
 			document.form.email.value.focus;
 			variable="false";
		}

 		else if (variable) {
 			document.form.submit();
 		}
 	}

 	window.onload=function(){
 		document.getElementById('boton').onclick=validarDatos;
 	}