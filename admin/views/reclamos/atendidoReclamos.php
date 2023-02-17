<?php
session_start();

include "core/conexion.php";

$Id = $_POST['idReclamo'];

$sql = "UPDATE reclamos SET estado = 0 WHERE codigo = $Id";

$resultado = $conn->query($sql);

if ($resultado) {
    header("Location: reclamos");
}else {
    echo "No se insertaron los datos";
}