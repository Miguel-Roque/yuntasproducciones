<?php 
session_start();
include("core/conexion.php");

if (isset($_POST['u']) && isset($_POST['p'])){
  $usuario = $_POST['u'];
  $pass = $_POST['p'];
  $query = "SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$pass'";
  $res = mysqli_query($conn, $query);
  if(mysqli_num_rows($res) == 1){
    $_SESSION['usuario'] = $usuario;
    header("Location: blog");
  }else {
    $_SESSION['message'] = 'Usuario o contraseña incorrectas';
    $_SESSION['message_type'] = 'danger';
    header("Location: login");
  }
}