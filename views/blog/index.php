<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Yuntas Producciones. Somos una empresa creativa dedicada a la decoración de espacios con luces LED de última tecnología perfectos para la publicidad de tu negocio.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>Blog</title>
  <link rel="stylesheet" href="public/css/blog.css">
  <?php require_once("views/layouts/enlaces.php") ?>
</head>
<body>
<?php	require_once("views/layouts/navbar.php");?>

<div class="container-cabezera">

   <div class="panel-cabezera">  
     <h1 class="text">Blog YUNTERO</h1>
 
   </div>
   <nav class="nav-cabezera">
    <ul>
      <li><a href="#">Todos</a></li>
      <li><a href="#">Categoría 1</a></li>
      <li><a href="#">Categoría 2</a></li>
      <li><a href="#">Categoría 3</a></li>
      <li><a href="#">Categoría 4</a></li>
      <li><a href="#">Categoría 5</a></li>
    </ul>
  </nav>

</div>

<?php 
  include "core/conexion.php";

  require_once("views/blog/articulos.php");
?>


<div class="container-cardblog">
  <div class="row">
    <div class="col-6  h-100">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila['imagen'])?>" alt="#">
    </div>
    <div class="col-6">
      <div class="row">
        <div class="col-12 my-2">
          <h4>Categoria 1</h4>
        </div>
        <div class="col-12 my-2">
        <h2><?php echo $Fila['titular']?></h2>
        </div>
        <div class="col-12 my-2">
        <p class="texto-prueba"><?php echo $Fila['detalle']?></p>
        </div>
        <div class="col-12 my-2">
          <div class="row">
            <div class="col-md-3  ">
              <div class="img-autor"> 
              </div>
            </div>
            <div class="col-md-7 text-autor">
              
                  <p>Nombre del autor</p>
                  <p >Abril 25,2020</p>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-cardblog">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila2['imagen'])?>" alt="#" class="card-img-top">
      <div class="card-body">
      <h4>Categoria 2</h4>

      <h2><?php echo $Fila2['titular']?></h2>
      <p><?php echo $Fila2['detalle']?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila3['imagen'])?>" alt="#" class="card-img-top">
      <div class="card-body">
      <h4>Categoria 3</h4>
      <h2><?php echo $Fila3['titular']?></h2>
      <p><?php echo $Fila3['detalle']?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila4['imagen'])?>" alt="#" class="card-img-top">
      <div class="card-body">
        <h4>Categoria 4</h4>
      <h2><?php echo $Fila4['titular']?></h2>
      <p><?php echo $Fila4['detalle']?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
</div>


<div class="container-cardblog">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila5['imagen'])?>" alt="#" class="card-img-top">
      <div class="card-body">
      <h4>Categoria 5</h4>

      <h2><?php echo $Fila5['titular']?></h2>
      <p><?php echo $Fila5['detalle']?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila6['imagen'])?>" alt="#" class="card-img-top">
      <div class="card-body">
      <h4>Categoria 6</h4>
      <h2><?php echo $Fila6['titular']?></h2>
      <p><?php echo $Fila6['detalle']?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila7['imagen'])?>" alt="#" class="card-img-top">
      <div class="card-body">
        <h4>Categoria 7</h4>
      <h2><?php echo $Fila7['titular']?></h2>
      <p><?php echo $Fila7['detalle']?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

</div>
</div>





<?php require_once("views/layouts/footer.php") ?>
</body>
</html>