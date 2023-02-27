<?php
    session_start();
	include "../../core/conexion.php";

	$id=$_POST['idUsuario'];
	$user=$_POST['usuario'];
    $pass=$_POST['contrasena'];
	$dni=$_POST['dni'];
    $sql = "INSERT INTO `usuarios` ( idUsuario , usuario , contrasena, dni) 
            VALUES ('$id','$user', aes_encrypt('$pass','key'), '$dni')";
    $resultado = $conn -> query($sql);

    if ($resultado) {
        header("Location: http://localhost/yuntasproducciones/admin/usuarios");
    }else {
        echo "No se insertaron";
    }
?>