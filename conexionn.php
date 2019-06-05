<?php
$USUARIO="root";
$PASSWORD="";
$SERVIDOR="localhost";
$BD=car2;



try{

	$pdo= new PDO(SERVIDOR,USUARIO,PASSWORD,
		array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

	echo "<script>alert('Conectadoo...')</script>";}
	catch(PDOException $e){
		echo "<script>alert('Error...')</script>";}
	}

}