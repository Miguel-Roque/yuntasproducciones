<?php if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] != '')) {
    header("Location: http://localhost/YUNTAS_producciones/admin");   
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Responsive</title>
    <link rel="stylesheet" href="public/css/navbar.css">
    <link rel="stylesheet" href="public/icons/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="nav-principal">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img src="public/img/logowhite.webp" alt="" class="logo">
        <ul>
            <li><a href="blog">Administrar Blog</a></li>
            <li><a href="reclamos">Administrar Reclamos</a></li>
            <li><a href="contactanos">Administrar Contactanos</a></li>
            <li><a href="#">Administrar Consultas</a></li>
        </ul>
        <a href="cerrarSesion" class="enlace">Cerrar Sesión</a>
    </nav>
    <div class="barra-blanca">
        
    </div>
</body>
</html>

