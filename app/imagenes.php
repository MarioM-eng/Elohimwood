<?php  
//Formatos permitidos
$formato = array('.jpg','.png','.jpeg','.gif');
// Recibo los datos de la imagen
$nombre_img = $_FILES['imagen']['name'];
$nombre_img_tmp = $_FILES['imagen']['tmp_name'];
$ext = substr($nombre_img,strrpos($nombre_img,'.')/*Metodo para indicar posicion de un caracter especifico*/);//se obtiene la extension del archivo
$tamano = $_FILES['imagen']['size'];


$contador=0;//Variable utilizada como complemento para el nombre de imagen
$nombre_def = "imagen_".$contador.$ext;//Nombre definitivo de la foto o hasta que cambie en el bucle
//Creamos un ciclo para verificar si el nombre de la imagen no exista en la base de datos y no sobre escriba el archivo que ya está con ese nombre
$igual; //Variable para saber si el nombre ya se encuenntra o no en la bd
for ($i=0; $i < count($_SESSION['img']); $i++) { 
  if ($nombre_def == $_SESSION['img'][$i]) {
      $igual=true;
      $contador+=1;
      $nombre_def = "imagen_".$contador.$ext;
      $i=-1;
  }else{
    $igual = false;
  }
}
 
//Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL) && ($tamano <= 90000000)) //90MB
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (in_array($ext,$formato))//Si la extencion existe en el arreglo de los formatos
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/elohimwood/public/img/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($nombre_img_tmp,$directorio.$nombre_def);
      $valid=true;//Variable para validar que la foto se subió con exito al servidor o no
    } 
    else{
       //si no cumple con el formato
      $_SESSION['men']=false;
      $valid = false;
       echo "<script type=\"text/javascript\">alert(\"No se puede subir una imagen con ese formato \"); window.location=\"?controller=galeria&action=galeriaFotos\";</script>";

    }
}else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL){
      $_SESSION['men']=false;
      $valid = false;
       echo "<script type=\"text/javascript\">alert(\"La imagen es demasiado grande. máx = 90MB\"); window.location=\"?controller=galeria&action=galeriaFotos\";</script>";
   }
}



?>