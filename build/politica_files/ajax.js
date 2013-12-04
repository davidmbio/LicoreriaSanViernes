// Creaci�n del objeto XMLHttpRequest.
function nuevoAjax(){

try {
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {
try {
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
} catch (E) {
xmlhttp = false;
}
}
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
xmlhttp = new XMLHttpRequest();
}
return xmlhttp;
}

// Funci�n para cargar los contenidos de forma as�ncrona.
// + pagina: fichero cuyo contenido queremos cargar.
// + identidicador del elemento en el que se cargar� el nuevo contenido.
/*function cargarContenido(pagina,destino){
var contenedor;
var ajax;

contenedor = document.getElementById(destino);
ajax = nuevoAjax();
ajax.open("GET", pagina, true);
ajax.onreadystatechange=function() {
if (ajax.readyState==4) {
contenedor.innerHTML = ajax.responseText;
}
}
ajax.send(null);
}*/
function cargarContenido(pagina,destino){
try {
	_gaq.push(['_trackPageview', pagina]);
} catch (err){}
$('#'+destino).load(pagina, function() {
  //acciones adicionales
});
//$(document).scrollTop( 0 );
}
