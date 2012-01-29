function creaAjax() {
         var objetoAjax=false;
         try {
          /*Para navegadores distintos a Internet Explorer*/
          objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
         } 
		 catch (e) {
		  try {
			   /*Para Internet Explorer*/
			   objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  catch (E) {
			objetoAjax = false;
		  }
         }

         if (!objetoAjax && typeof XMLHttpRequest!='undefined') {
         	objetoAjax = new XMLHttpRequest();
         }
         return objetoAjax;
}//fin funcion

//Función Ajax que carga de forma asincrónica la URL enviada por parámetro.
//Se puede escoger entre método POST y GET, siendo el primero de ellos el más utilizado por la aplicación SGCAL.
function FAjax (url,capa,valores,metodo) {
		var ajax=creaAjax();
        var capaContenedora = document.getElementById(capa);
		var capaCarga		= document.getElementById('div_carga');
		/*Crea y ejecuta la instancia si el metodo elegido es POST*/
		if(metodo.toUpperCase()=='POST') {
			 ajax.open ('POST', url, true);
			 ajax.onreadystatechange = function() {
				 if (ajax.readyState==1) { //comunicacion en proceso.
					capaCarga.style.visibility = 'visible';
					/*cambiar cursor*/
					document.body.style.cursor="wait";
				 }//fin if
				 else if (ajax.readyState==4) { //comunicacion terminada.
					   if(ajax.status==200) { //exito en la comunicacion
							/*restaurar cursor*/
							capaCarga.style.visibility = 'hidden';
							document.body.style.cursor="default";
							capaContenedora.innerHTML=ajax.responseText;
					   }//fin if
					   else if(ajax.status==404) {
						capaContenedora.innerHTML = "<br /><center>Error, direcci&oacute;n no existe</center><br />";
					   }
					   else { //captura un error que no sea una direccion inexistente.
						capaContenedora.innerHTML = "Error: ".ajax.status;
					   }//fin else
				}//fin else if

	   		 }//fin funcion ajax
	   		 ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded;charset=UTF-8');
		     ajax.send(valores);
		     return;
		}//fin if
		/*Crea y ejecuta la instancia si el metodo elegido es GET*/
		if (metodo.toUpperCase()=='GET') {
		
				 ajax.open ('GET', url, true);
				 ajax.onreadystatechange = function() {
					 if (ajax.readyState==1) {
					    capaCarga.style.visibility = 'visible';
						document.body.style.cursor="wait";
					 }
					 else if (ajax.readyState==4){
						if(ajax.status==200){
						 capaCarga.style.visibility = 'hidden';
						 document.body.style.cursor="default";
						 capaContenedora.innerHTML=ajax.responseText;
						}
						else if(ajax.status==404) {
							capaContenedora.innerHTML = "<br /><center>Error, direcci&oacute;n no existe</center><br />";
						}
						else {
							capaContenedora.innerHTML = "Error: ".ajax.status;
						}
					}
	  			}//fin funcion
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.send(null);
			return
		}//fin if
}//fin funcion

