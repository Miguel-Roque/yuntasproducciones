
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="En Yuntas Producciones te brindamos nuevas experiencias para publicitar tu negocio. Ventas de Luces,Letreros y Pantallas LED .">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@500&family=Bungee&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/csswasap.css" >
    <link rel="stylesheet" href="public/css/productos.css" >

    <title><?= $producto['name'] ?></title>
    <link rel="icon" type="image/x-icon" href="public/nosotros/logowhite2.webp">
    <?php require_once("views/layouts/enlaces.php") ?>
  </head>
  <body>
    <?php	require_once("views/layouts/navbar.php");?>

    <div class="info info-first">
      <div class="slider">
        <div id="carouselExampleIntervals" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <img src="public/ventiladores_holograficos/ventilador_holografico_1.jpg" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="public/ventiladores_holograficos/ventilador_holografico_2.jpg" class="d-block w-100" alt="slide2">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="public/ventiladores_holograficos/ventilador_holografico_3.jpg" class="d-block w-100" alt="slide3">
            </div>
          </div>
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        </div>
      </div>
    </div>

    <div class="info-2 info-2-first">
      <div class="titulos2-container">  
        <h1 class="titulos2"><?= $producto['titulo'] ?></h1>
      </div>
      <p><?= $producto['resumen'] ?></p>
    </div>

    <?php $style_img_info = 'width: 100%;height:308px;object-fit: cover; border-radius: 30px; border: 5px solid #2AA4BF;'?>
    <div class="info info-second">
      <div class="container row d-flex justify-content-center text-truncate" style="margin: auto;">
        <?php if (!empty($producto['cat1'])): ?>
          <div class="col-lg-4 col-md-6 col">
            <a href="pantallas_led">
              <img style="<?=$style_img_info?>" src="data:image/jpg;base64,<?php echo base64_encode($producto['img_cat1']) ?>" alt="enlaces">
              <h2 class="subtitulo2"><?= $producto['cat1'] ?></h2>
            </a>
          </div>
        <?php endif; ?>

        <?php if (!empty($producto['cat2'])): ?>
          <div class="col-lg-4 col-md-6 col">
            <a href="efectos3d">
              <img style="<?=$style_img_info?>" src="data:image/jpg;base64,<?php echo base64_encode($producto['img_cat2']) ?>" alt="enlaces">
              <h2 class="subtitulo2"><?= $producto['cat2'] ?></h2>
            </a>
          </div>
        <?php endif; ?>

        <?php if (!empty($producto['cat3'])): ?>
          <div class="col-lg-4 col-md-6 col">
            <a href="letreros_neon_led">
              <img style="<?=$style_img_info?>" src="data:image/jpg;base64,<?php echo base64_encode($producto['img_cat3']) ?>" alt="enlaces">
              <h2 class="subtitulo2"><?= $producto['cat3'] ?></h2>
            </a>
          </div>
        <?php endif; ?>


        </div>

        <div class="container row d-flex justify-content-center text-truncate" style="margin: auto;">
        <?php if (!empty($producto['cat4'])): ?>
          <div class="col-lg-4 col-md-6 col">
            <a href="cubos_led">
              <img style="<?=$style_img_info?>" src="data:image/jpg;base64,<?php echo base64_encode($producto['img_cat4']) ?>" alt="enlaces">
              <h2 class="subtitulo2"><?= $producto['cat4'] ?></h2>
            </a>
          </div>
        <?php endif; ?>   
      
        <?php if (!empty($producto['cat5'])): ?>
          <div class="col-lg-4 col-md-6 col">
            <a href="relojes_digitales">
              <img style="<?=$style_img_info?>" src="data:image/jpg;base64,<?php echo base64_encode($producto['img_cat5']) ?>" alt="enlaces">
              <h2 class="subtitulo2"><?= $producto['cat5'] ?></h2>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <?php require_once("views/productos/formulario/index.php") ?>

    <?php require_once("views/layouts/footer.php") ?>
    <?php require_once("views/layouts/enlaces.php") ?>
  </body>
</html>