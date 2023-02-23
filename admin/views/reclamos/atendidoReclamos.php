<?php
session_start();

include "core/conexion.php";

$id = mysqli_real_escape_string($conn, $_POST['idReclamo']);

$sql = "DELETE FROM reclamo WHERE idReclamo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$resultado = $stmt->execute();

if ($resultado) {
    header("Location: consultas");
}else {
    echo "No se insertaron los datos";
}