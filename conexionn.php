<?php 

$server="localhost";
$username="root";
$password
$db='car2';

$conn=mysql_connect($server,$username,$password) or die("INCONEXION");
$sdb=mysql_select_db($db,$conn);

 ?>