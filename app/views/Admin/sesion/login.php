<?php 
if (!isset($_SESSION)) {
	session_start();
}

$_SESSION['logueado'] = false;

$db=Db::getConexion();

$sql = "SELECT * FROM administrador WHERE nick =:admin";
$stmt = $db->prepare($sql);
$stmt->bindParam(':admin', $_POST['nick']);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();
$usuario = $stmt->fetch();

if($usuario == null){
	echo "<script type=\"text/javascript\" src=\"js/usuarioNoExiste.js\"></script>";
}

if ($usuario->clave != $_POST['clave']) {
	$_SESSION['contra']=true;
	$user=$_POST['nick'];
	echo " <script type=\"text/javascript\">window.location=\"?controller=admin&action=login&user=$user\"</script>";

}elseif($usuario->clave == $_POST['clave']){
	$_SESSION['nick'] = [
		'id' => $usuario->idadministrador
	];
	//var_dump($_SESSION['logueado']);
	$_SESSION['contra']=false;
	$_SESSION['logueado'] = true;
	echo "<script type=\"text/javascript\">window.location=\"?controller=admin&action=index\"</script>";
}

 ?>

<script>
	
</script>