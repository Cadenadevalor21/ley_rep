<?php

    require 'conexion.php';


        $nombreEmpresa = $_POST['nombreEmpresa'];
		$pais = $_POST['pais'];
		$telefono = $_POST['telefono'];
		$nombreEncargado = $_POST['nombreEncargado'];
		$correoElectronico = $_POST['correoElectronico'];
		$contrasenia = $_POST['contrasenia'];
		$con_password = $_POST['con_password'];
		
		


/*function registraUsuario($nombreEmpresa, $pais, $telefono, $nombreEncargado, $correoElectronico, $password_hash, $activo, $token, $tipo_usuario){
	
	global $mysqli;
	
	$stmt = $mysqli->prepare("insert into usuario(nombreEmpresa, pais, telefono, nombreEncargado, correoElectronico, contrasenia, activacion, token, idPerfil) values(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param('ssisssisi', $nombreEmpresa, $pais, $telefono, $nombreEncargado, $correoElectronico, $password_hash, $activo, $token, $tipo_usuario);
	
	if($stmt->execute()){
		return $mysqli->insert_id;
	}else{
		return 0;
	}
     
    
}*/


$insertar = "insert into usuario values('$nombreEmpresa', '$pais', '$telefono', '$nombreEncargado', '$correoElectronico', '$contrasenia', '$con_password', '$activo', '$tipo_usuario')";



$query = mysqli_query($mysqli, $insertar);

if($query){

echo "correcto";

}else{
    
    echo "incorrecto";
    
}




?>