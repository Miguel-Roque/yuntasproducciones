<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Yuntas Producciones. Somos una empresa creativa dedicada a la decoración de espacios con luces LED de última tecnología perfectos para la publicidad de tu negocio.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <meta name="keywords" content="Yuntas Producciones, luces led,letrero led, yuntas,pantallas led,calidad de imagen,efectos 3d led,Neon Led,luces navideñas,iluminación led, yuntas producciones,barras luces led, ventilador holografico, holograma 3d, publicidad,marketing, luces led de colores,luces led navidad">

  <link rel="stylesheet" href="public/css/home.css">
  <link rel="stylesheet" href="public/css/csswasap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>YUNTAS</title>
  <link rel="icon" type="image/x-icon" href="public/nosotros/logowhite2.webp">
  <link rel="stylesheet" href="public/css/navbar_categorias.css">
  <?php require_once("views/layouts/enlaces.php") ?>
</head>

<!-- <body class="" style="background: #000000;">-->
<body class="" style="background: #000000;">
  <?php require_once("views/layouts/navbar.php"); ?>

  <div class="container container_banner">
    <div class="carousel_home_body">
      <div class="view_carousel d-flex flex-row ">
        <div class="slide active" data-id="1" id="item_img_1">
          <img src="public/img/fondo.webp" alt="">
        </div>
        <div class="slide" data-id="2" id="item_img_2">
          <img src="public/img/fondo1.webp" alt="">
        </div>
        <div class="slide" data-id="3" id="item_img_3">
          <img src="public/img/fondo2.webp" alt="">
        </div>
      </div>
    </div>
    <div class="points_carousel d-flex justify-content-center py-4" style="gap:10%">
        <span class="buttons_carousel rounded-circle active " style="height:15px; width: 15px;" >
        </span>
        <span class="buttons_carousel rounded-circle" style="height:15px; width: 15px;">
        </span>
        <span class="buttons_carousel rounded-circle" style="height:15px; width: 15px;">
        </span>
    </div>
  </div>

 <!-- sidebar -->
 
  <div class="container_navbar_categorias container">
    <nav>
      <ul class="ul_categorias">
        <li class="li">
          <a href="producto?slug=Pantalla Led">
            <img width='60' height='50' src="public/img/icons_categorias/001.png" class="img_one" alt="">
            <img width='60' height='50' src="public/img/icons_categorias/10.png" class="img_two" alt="">
            <span>
              Pantallas Led
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?slug=Ventilador holográfico">
            <img width='50' height='50' src="public/img/icons_categorias/002.png" class="img_one" alt="">
            <img width='50' height='50' src="public/img/icons_categorias/20.png" class="img_two" alt="">
            <span>
              Ventiladores <br>
              Holográficos
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?slug=Letreros neón led">
