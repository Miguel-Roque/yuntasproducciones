<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Yuntas Producciones. Somos una empresa creativa dedicada a la decoración de espacios con luces LED de última tecnología perfectos para la publicidad de tu negocio.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <meta name="keywords" content="Yuntas Producciones, luces led,letrero led, yuntas,pantallas led,calidad de imagen,efectos 3d led,Neon Led,luces navideñas,iluminación led, yuntas producciones,barras luces led, ventilador holografico, holograma 3d, publicidad,marketing, luces led de colores,luces led navidad">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/csswasap.css" >
    <link rel="stylesheet" href="public/css/navbar_categorias.css">

    <link rel="stylesheet" href="public/css/productos.css" > 
    <title>Productos</title>
    <link rel="icon" type="image/x-icon" href="public/nosotros/logowhite2.webp">
    
    <?php require_once("views/layouts/enlaces.php") ?>
</head>
<body>
  <?php	require_once("views/layouts/navbar.php");?>
    <div class="info">
      <div class="slider">
        <div id="carouselExampleIntervals" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="public/letreros_led/imagen_fondo.webp" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/letreros_led/imagen_segundo.webp" class="d-block w-100" alt="slide2">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="public/letreros_led/imagen_tercero.webp" class="d-block w-100" alt="slide3">
            </div>
          </div>
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        </div>
      </div>

      <div class="container_navbar_categorias container">
    <nav class="nav_bar_categorias">
      <ul class="ul_categorias">
        <li class="li">
          <a href="producto?id=2">
            <img width='60' height='50' src="public/img/icons_categorias/001.png" class="img_one" alt="">
            <img width='60' height='50' src="public/img/icons_categorias/10.png" class="img_two" alt="">
            <span>
              Pantallas Led
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?id=3">
            <img width='50' height='50' src="public/img/icons_categorias/002.png" class="img_one" alt="">
            <img width='50' height='50' src="public/img/icons_categorias/20.png" class="img_two" alt="">
            <span>
              Ventiladores <br>
              Holográficos
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?id=4">
            <img width='50' height='50' src="public/img/icons_categorias/003.png" class="img_one" alt="">
            <img width='50' height='50' src="public/img/icons_categorias/30.png" class="img_two" alt="">
            <span>
              Letreros Neón <br>
              Led
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?id=1">
            <img width='50' height='50' src="public/img/icons_categorias/004.png" class="img_one" alt="">
            <img width='50' height='50' src="public/img/icons_categorias/40.png" class="img_two" alt="">
            <span>
              Cubos Led
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?id=5">
            <img width='100' height='50' src="public/img/icons_categorias/005.png" class="img_one" alt="">
            <img width='100' height='50' src="public/img/icons_categorias/50.png" class="img_two" alt="">
            <span>
              Relojes Digitales
            </span>
          </a>
        </li>
        <li class="li">
          <a href="producto?id=6">
            <img width='50' height='50' src="public/img/icons_categorias/006.png" class="img_one" alt="">
            <img width='50' height='50' src="public/img/icons_categorias/60.png" class="img_two" alt="">
            <span>
              Letreros Led
            </span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
      
      <div class="banner">
        <img src="public/pantallas_led/compra-y-venta-de-pantallas-publicitarias-led.jpg" alt="">
      </div>
    </div>
    
    <div class="titulos2-container">  
      <h1 class="titulos2">Productos</h1>
    </div>
    
    <div class="container-sm my-5">
      <div style="margin:0 auto;" class="row ">
        <div class="col-lg-4 col-md-6">
          <a href="producto?id=2">
            <img style="width: 100%;height:308px;object-fit: cover; border-radius: 30px;" src="views/assets/pantallasled.webp" alt="enlaces">
            <h2 class="subtitulo2">Pantallas led</h2>
          </a>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <a href="producto?id=3">
            <img style="width: 100%;height:308px;object-fit: cover; border-radius: 30px;" src="views/assets/efectos3d.webp" alt="enlaces">
            <h2 class="subtitulo2">Ventiladores Holográficos</h2>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="producto?id=4">
            <img style="width: 100%;height:308px;object-fit: cover; border-radius: 30px;" src="views/assets/letrerosneonled.webp" alt="enlaces">
            <h2 class="subtitulo2">Letreros neón led</h2>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="producto?id=1">
            <img style="width: 100%;height:308px;object-fit: cover; border-radius: 30px;" src="views/assets/cubosled.webp" alt="enlaces">
            <h2 class="subtitulo2">Cubos led</h2>
          </a>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <a href="producto?id=5">
            <img style="width: 100%;height:308px;object-fit: cover; border-radius: 30px;" src="views/assets/relojesdigitales.webp" alt="enlaces">
            <h2 class="subtitulo2">Relojes digitales</h2>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="producto?id=6">
            <img style="width: 100%;height:308px;object-fit: cover; border-radius: 30px;" src="views/assets/letrerosled.webp" alt="enlaces">
            <h2 class="subtitulo2">Letreros led</h2>
          </a>
        </div>
    </div>
  </div>
  <?php require_once("views/layouts/footer.php") ?>
</body>
</html>    