<?php session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/consultas.css">
</head>
<body>
  <?php require_once("views/layouts/navbar.php");?>
  <main>
    <header >
      <h1 class="text-center">Listado de Usuarios</h1>
    </header>
<div class="table-responsive px-5 ">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
            <th scope="col">CODIGO</th>
            <th scope="col">USUARIO</th>
            <th scope="col">CONTRASEÑA</th>
            <th scope="col">DNI</th>
        </tr>
      </thead>
</body>
</html>