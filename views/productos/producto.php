
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
            <button type="button" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="public/ventiladores_holograficos/ventilador_holografico_1.jpg" class="d-block" height="60px" width="80px" alt="slide1"></button>
            <button type="button" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="1" aria-label="Slide 2"><img src="public/ventiladores_holograficos/ventilador_holografico_2.jpg" class="d-block" height="60px" width="80px" alt="slide2"></button>
            <button type="button" data-bs-target="#carouselExampleIntervals" data-bs-slide-to="2" aria-label="Slide 3"><img src="public/ventiladores_holograficos/ventilador_holografico_3.jpg" class="d-block" height="60px" width="80px" alt="slide3"></button>
          </div>
        </div>
      </div>
    </div>

<style>
 .modal-content {
  background-color: rgba(0, 0, 0, 0.7);
  border: none;
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3), 0px 0px 40px rgba(0, 0, 0, 0.1);
  padding: 30px;
  position: relative;
  text-align: center;
  color: #fff;
  font-weight: bold;
  font-size: 20px;
}

.modal-header {
  border: none;
}

.modal-title {
  color: #fff;
  font-size: 30px;
}

.form-label {
  font-size: 24px;
  color: #fff;
}

.form-cont {
  background-color: rgba(0, 0, 0, 0.5);
  border: none;
  border-radius: 10px;
  color: #fff;
  font-size: 18px;
  margin-bottom: 20px;
  padding: 15px;
  border-bottom: 1px solid #ffffff;
}

.form-cont:focus {
  box-shadow: none;
}

.btn-primari {
  background-color: #21c7c2;
  border: none;
  display: block;
  margin: 0 auto;
  border-radius: 30px;
  color: #fff;
  font-size: 20px;
  font-weight: bold;
  padding: 15px 50px;
  text-transform: uppercase;
  transition: 0.5s ease-in-out;
}

.btn-primari:hover {
  display: block;
  margin: 0 auto;
  background-color: #fff;
  color: #21c7c2;
  box-shadow: 0px 0px 20px #21c7c2;
}

.btn-close {
  position: absolute;
  right: 0;
  top: 0;
}

.btn-close:hover {
  color: #21c7c2;
  cursor: pointer;
}

.modal-footer {
  border: none;
  margin-top: 30px;
  position: relative;
}

.modal-footer::before {
  background: linear-gradient(90deg, #00d2ff, #3a7bd5, #00d2ff);
  content: "";
  height: 4px;
  position: absolute;
  top: -4px;
  width: 100%;
}

.modal-footer::after {
  background: linear-gradient(90deg, #00d2ff, #3a7bd5, #00d2ff);
  content: "";
  height: 4px;
  position: absolute;
  bottom: -4px;
  width: 100%;
}

@media (max-width: 576px) {
  .modal-content {
    padding: 15px;
  }

  .form-label {
    font-size: 18px;
  }

  .form-cont {
    font-size: 16px;
    margin-bottom: 10px;
    padding: 10px;
  }

  .btn-primari {
    font-size: 18px;
    padding: 10px 30px;
  }

  .btn-close {
    font-size: 30px;
  }
}


  </style>
<div class="modal fade " id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Formulario de contacto</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form action="enviarEmergente" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nom" type="text" class="form-cont form-control " id="inputNombre">
          </div>
          <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input name="ape" type="text" class="form-cont form-control" id="inputApellido">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="correo" type="text" class="form-cont form-control" id="inputCorreo">
          </div>
          <div class="mb-3">
            <label for="Celular" class="form-label">Celular</label>
            <input name="cel" type="text" class="form-cont form-control" id="inputCelular" >
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-primari" data-bs-dismiss="modal" >Enviar</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script>
  $(document).ready(function() {
    var modalShown = localStorage.getItem('modalShown');

    if (!modalShown) {
      setTimeout(function() {
        $('#myModal').modal('show');
        localStorage.setItem('modalShown', 'true');
      }, 5000);
    }

    $('#formulario').on('submit', function(e) {
      e.preventDefault();

      // Validar los campos
      var nombre = $('#nombre').val();
      var apellidos = $('#apellidos').val();
      var email = $('#email').val();
      var celular = $('#celular').val();

      if (!nombre || !apellidos || !email || !celular) {
        swal('Error', 'Por favor complete todos los campos', 'error');
      } else {
        // Enviar los datos del formulario
        $.ajax({
          url: 'enviar.php',
          method: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            swal('¡Gracias!', 'Tu mensaje ha sido enviado', 'success');
          },
          error: function() {
            swal('Error', 'Ocurrió un error al enviar el mensaje', 'error');
          }
        });
      }
    });
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