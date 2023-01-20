<?php
session_start();

if ( !empty( $_GET ) ) {

   // En el caso que este NO este vacío el $_GET
   // lo pasamos a una variable de sesión
   // y limpiamos la URL sin los parametros $_GET con el header(..)

   $_SESSION[ 'variable_get' ] = $_GET;
   header('Location: http://localhost/elohimwoodMVC');
}

if ( !empty( $_SESSION[ 'variable_get' ] ) ) {

   // En el caso que este vacío el $_GET 
   // y NO este vacío la variable de sesión variable_get
   // lo pasamos de vuelta a la variable $_GET
   // y reseteamos la variable de sesión variable_get

   $_GET = $_SESSION[ 'variable_get' ];
   $_SESSION[ 'variable_get' ] = null;
}
else {
   // Tratar error de no haber obtenido nada
   // header(..);
   // exit;
} 