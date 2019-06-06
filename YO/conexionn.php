<?php 

define("KEY", "devoloteca");
define("COD", "AES-128-ECB");

define("SERVIDOR", "localhost");
define("USUARIO", "carniceriaLezama");
define("PASSWORD", "");
define("BD", "carnicerialezama");

$servidor="mysql:dbname=".BD.";host=".SERVIDOR;

try {
	$pdo=new PDO($servidor,USUARIO,PASSWORD,
		array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
	echo "<script>alert('Conectado')</script>";
} catch (PDOException $e) {
	echo "<script>alert('NPC')</script>";
}
 ?>