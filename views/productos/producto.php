
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

    <title><?= $producto['slug'] ?></title>
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

    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Formulario de contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" rows="3"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  var myModalEl = document.getElementById('myModal');
  $(document).ready(function() {
  

  setTimeout(function() {
    // Mostrar el modal
    $('#myModal').modal('show');
  }, 5000);
});
</script>

    <div class="info-2 info-2-first">
      <div class="titulos2-container">  
        <h1 class="titulos2"><?= $producto['titulo'] ?></h1>
      </div>
      <p><?= $producto['resumen'] ?></p>
    </div>

    <?php $style_img_info = 'width: 100%;height:308px;object-fit: cover; border-radius: 30px; border: 5px solid #2AA4BF;'?>
    <div class="info info-second">
          <?php
      $categorias = [
        ['cat' => $producto['cat1'], 'img' => $producto['img_cat1']],
        ['cat' => $producto['cat2'], 'img' => $producto['img_cat2']],
        ['cat' => $producto['cat3'], 'img' => $producto['img_cat3']],
        ['cat' => $producto['cat4'], 'img' => $producto['img_cat4']],
        ['cat' => $producto['cat5'], 'img' => $producto['img_cat5']]
      ];
      ?>

      <div class="container row d-flex justify-content-center" style="margin:auto;">
        
        <?php 
        $count =1;
        if ($producto['slug'] == "Pantallas Led") {
          $count = 1;
        } elseif ($producto['slug'] == "Cubo Led") {
          $count = 5;
        } elseif ($producto['slug'] == "Ventilador holográfico") {
          $count = 8;
        }
        elseif ($producto['slug'] == "Letreros neón led") {
          $count = 13;
        }
        elseif ($producto['slug'] == "Relojes digitales") {
          $count = 17;
        }
        elseif ($producto['slug'] == "Letreros led") {
          $count = 20;
        }
        foreach ($categorias as $categoria): ?>
          <?php if (!empty($categoria['cat'])): ?>
            
            <div class="col-lg-4 col-md-5 col ">
              <a href="subproductos?id=<?php echo $count; ?>">
                <img style="<?=$style_img_info?>" src="data:image/jpg;base64,<?php echo base64_encode($categoria['img']) ?>" alt="enlaces">
                <h2 class="subtitulo2 text-truncate "><?= $categoria['cat'] ?></h2>
              </a>
            </div>
            
          <?php 

           $count++;
         
          endif; ?>
        <?php endforeach; ?>
      </div>

      
    </div>

    <?php require_once("views/productos/formulario/index.php") ?>

    <?php require_once("views/layouts/footer.php") ?>
    <?php require_once("views/layouts/enlaces.php") ?>

  </body>
</html>