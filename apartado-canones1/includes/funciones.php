<?php 

require_once 'Medoo.php';
require_once '_db.php';

if ($_POST) {
	switch ($_POST['action']) {
		case 'login':login();
			# code...
			break;
		
		default:
			# code...
			break;
	}
	# code...
}
function login (){
	global $db;
	$respuesta=[];
$usuario = $db->count("usuarios","*",["correo"=>$_POST['usuario']]);
	if ($usuario>0) {
		$respuesta["texto"]="si existe";
		$respuesta["status"]=1;
		//validar que la contraseña sea correcta
		//si la contraseña no es correcta  enviar un status 0, con el texto
		//que ustees quieran
		// si la contraseña es correcta entonces: //1.inisiar sesion
		//2.setear la variable de $_sesion los valores:nombre,correo,status,id y nivel
		//3.responder status 1



		/////////////////////////

		///login.js
		si el status es 0 , enviar mensaje de datos incorrectos,intente de nuevo
		// si el estatus es 1 redifreccioar en el index
		# code...
	}else {
		$respuesta["texto"]="No existe";
		$respuesta["status"]=0;
		# code...
	}
	echo json_decode($respuesta);
}

?>