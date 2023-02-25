<?php
    session_start();
	include "core/conexion.php";

	$id=$_POST['idUsuario'];
	$user=$_POST['usuario'];
    $pass=$_POST['contraseña'];
	$dni=$_POST['dni'];
    $sql = "INSERT INTO `usuarios` ( idUsuario , usuario , contraseña, dni) 
            VALUES ($id,$user, aes_encrypt('$pass','key'), '$dni')";
    $resultado = $conn -> query($sql);

    if ($resultado) {
        header("Location: usuarios");
    }else {
        echo "No se insertaron";
    }