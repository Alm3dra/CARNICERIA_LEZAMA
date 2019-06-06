<?php
include 'conexionn.php';

$mensaje="";

if(isset($_POST['btnAccion'])){
	switch ($_POST['btnAccion']) {
		case 'Agregar':
			if(is_numeric( openssl_decrypt( $_POST['idp'], COD, KEY))){
				$IDP=openssl_decrypt( $_POST['idp'], COD, KEY);
				$mensaje="ok IDP correcto".$ID;

			}else{
				$mensaje="ok IDP incorrecto".$ID;
			}
			break;
		
		default:
			# code...
			break;
	}
}

?>