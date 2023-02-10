<?php
    session_start();
	include "core/conexion.php";

	$nom=$_POST['nom'];
    $ape=$_POST['ape'];
	$correo=$_POST['correo'];
    $cel=$_POST['cel'];
	$msg=$_POST['msg'];
    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name'])) === '' ? null : addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $fecha=date('Y-m-d');

   
    $sql = "INSERT INTO `personaliza` (nom, ape , correo , cel , msg, imagen , fechaPersonaliza) 
                VALUES ('$nom','$ape','$correo','$cel','$msg','$imagen','$fecha')"; 
   
  
    $resultado = $conn -> query($sql);

    if ($resultado) {
        header("Location: ".$_SERVER['HTTP_REFERER']."");
    }else {
        echo "No se insertaron los datos";
    }
?>