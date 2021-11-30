<?php

$host = "srv-cavs-02.mysql.database.azure.com";
$username = "apiuser";
$password = "apiuser.2021";
$db_name = "leyrep";


	$mysqli = new mysqli($host, $username, $password, $db_name);
	
	if(mysqli_connect_errno()){
		echo'Conexion fallida: ', mysqli_connect_errno();
		exit();
	}
echo "Conexion exitosa"

?>