function muestraReloj() {
  var fechaHora = new Date();
  var horas = fechaHora.getHours();
  var minutos = fechaHora.getMinutes();
  var segundos = fechaHora.getSeconds();
  if(horas < 10) { horas = '0' + horas; }
  if(minutos < 10) { minutos = '0' + minutos; }
  if(segundos < 10) { segundos = '0' + segundos; }
  document.getElementById("reloj").innerHTML = horas+':'+minutos+':'+segundos;
  setTimeout("muestraReloj()",1000) ;

}

function fnCargaPagina(url,capa)
{  FAjax(url, capa,'','post');   }




function fncompras(){

mostrar('procesos');
mostrar('menuesp');
ocultar('principal');
fnCargaPagina("compra.php","menuesp");


}
function fnventas(){
mostrar('procesos');
mostrar('menuesp');
ocultar('principal');
fnCargaPagina("venta.php","menuesp");

}


function fnmermas(){
mostrar('procesos');
mostrar('menuesp');
ocultar('principal');
fnCargaPagina("merma.php","menuesp");
}

function fnusuarios(){
mostrar('procesos');
mostrar('menuesp');
ocultar('principal');
fnCargaPagina("usuario.php","menuesp");
}


function fnotras(){
mostrar('procesos');
mostrar('menuesp');
ocultar('principal');
fnCargaPagina("otra.php","menuesp");
}

function fninformes(){
mostrar('procesos');
mostrar('menuesp');
ocultar('principal');
fnCargaPagina("informe.php","menuesp");
}

function mostrar(div)

{
document.getElementById(div).style.visibility='visible';



}
function ocultar(div)

{
document.getElementById(div).style.visibility='hidden';

}



 var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  var x;
  x=$("#boton1");
  x.click(eliminarElementos)
  x=$("#boton2");
  x.click(restaurarLista)
  x=$("#boton3");
  x.click(anadirElementoFinal)
  x=$("#boton4");
  x.click(anadirElementoPrincipio)
  x=$("#boton5");
  x.click(eliminarElementoFinal)
  x=$("#boton6");
  x.click(eliminarElementoPrincipio)
  x=$("#boton7");
  x.click(eliminarPrimeroSegundo)
  x=$("#boton8");
  x.click(eliminarDosUltimos)
}

function eliminarElementos()
{
  var x;
  x=$("ul");
  x.empty();
}

function restaurarLista()
{
  $("ul").html('<li>Primer item.</li><li>Segundo item.</li><li>Tercer item.</li><li>Cuarto item.</li>');
}

function anadirElementoFinal()
{
  var x;
  x=$("ul");
  x.append("<li>otro item al final</li>");
}

function anadirElementoPrincipio()
{
  var x;
  x=$("ul");
  x.prepend("<li>otro item al principio</li>");
}

function eliminarElementoFinal()
{
  var x;
  x=$("li");
  var cantidad=x.length;
  x=x.eq(cantidad-1);
  x.remove();
}

function eliminarElementoPrincipio()
{
  var x;
  x=$("li");
  x=x.eq(0);
  x.remove();
}

function eliminarPrimeroSegundo()
{
  var x;
  x=$("li");
  x=x.lt(2);
  x.remove();
}

function eliminarDosUltimos()
{
  var x;
  x=$("li");
  x=x.gt(x.length-3);
  x.remove();
}
