<?php
session_start();

include "core/conexion.php";
$idReclamo = $_POST['idUsuario'];

$sql = "DELETE FROM usuarios WHERE idUsuario = $idUsuario";


if ($conn->query($sql) === TRUE) {
     header("Location: reclamos");
  } else {
    echo "Error al eliminar el reclamo: " . $conn->error;
  }
  