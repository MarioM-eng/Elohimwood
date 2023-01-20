//JS para el menu del header. Cada que se oprima una opcion, la letra pasará a negro.

$(function() {
  
  // elementos de la lista
  var menues = $(".items li"); 

  // manejador de click sobre todos los elementos
  menues.click(function() {
     // eliminamos active de todos los elementos
     menues.removeClass("active");
     // activamos el elemento clicado.
     $(this).addClass("active");
  });

});
