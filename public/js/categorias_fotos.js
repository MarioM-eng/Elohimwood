$(document).ready(function(){
$("#item1").click(function(){
        	$.post("?controller=galeria&action=cargarMadera", {}, function(htmlexterno){//Se cargan solo las fotos de categoria madera
   $("#nav-1").html(htmlexterno);
    		});
	});

$("#item2").click(function(){
        	$.post("?controller=galeria&action=cargarProducto", {}, function(htmlexterno){//Se cargan solo las fotos de categoria producto
   $("#nav-2").html(htmlexterno);
    		});
	});

});