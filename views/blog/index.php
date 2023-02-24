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

<div style="padding: 0.5em; position: relative; top: 10px" class="encabezado">
  <h1 >Blog</h1>
  <p>­­Te invitamos a que nos conozcas un poco más, y no solo eso, a aprender cosas nuevas sobre la empresa y los diferentes productos que te brindamos, porque tu también eres parte de nuestra familia. Cada momento queremos compartirlo contigo también... ¡Bienvenido!­</p>
</div>

<?php 
  include "core/conexion.php";

  require_once("views/blog/articulos.php");
?>
<div class="articulo">
  <img src="data:image/jpg;base64,<?php echo base64_encode($Fila['imagen'])?>" alt="#">
  <div class="articulo__content">
    <div class="articulo__content-encabezado">
      <h2><?php echo $Fila['titular']?></h2>
      <p><?php echo $Fila['detalle']?></p>
    </div>
    <!-- <a href="#">seguir leyendo <span class="icon-chevron-small-right icon2"></span></a> <- considero sacar el enlace -->
  </div>
</div>

<div class="articulo-cards">
  <div class="articulo-cards__card">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila2['imagen'])?>" alt="#">
    <h2><?php echo $Fila2['titular']?></h2>
    <p><?php echo $Fila2['detalle']?></p>
  </div>
  <div class="articulo-cards__card">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila3['imagen'])?>" alt="#">
    <h2><?php echo $Fila3['titular']?></h2>
    <p><?php echo $Fila3['detalle']?></p>
  </div>
  <div class="articulo-cards__card">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila4['imagen'])?>" alt="#">
    <h2><?php echo $Fila4['titular']?></h2>
    <p><?php echo $Fila4['detalle']?></p>
  </div>
</div>

<div class="articulo-2">
  <h2><?php echo $Fila5['titular']?></h2>
  <!-- <p><span id="autor">autor</span> - <span id="fecha">fecha</span></p> -->
  <img src="data:image/jpg;base64,<?php echo base64_encode($Fila5['imagen'])?>" alt="#">
  <p><?php echo $Fila5['detalle']?></p>
</div>

<div class="articulo-cards">
  <div class="articulo-cards__card">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila6['imagen'])?>" alt="#">
    <h2><?php echo $Fila6['titular']?></h2>
    <p><?php echo $Fila6['detalle']?></p>
  </div>
  <div class="articulo-cards__card">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila7['imagen'])?>" alt="#">
    <h2><?php echo $Fila7['titular']?></h2>
    <p><?php echo $Fila7['detalle']?></p>
  </div>
  <div class="articulo-cards__card">
    <img src="data:image/jpg;base64,<?php echo base64_encode($Fila8['imagen'])?>" alt="#">
    <h2><?php echo $Fila8['titular']?></h2>
    <p><?php echo $Fila8['detalle']?></p>
  </div>
</div>

<!-- <div class="button">
  <button>Ver todos nuestros articulos</button> <-Este consideraría borrarlo 
</div> -->

<?php require_once("views/layouts/footer.php") ?>
</body>
</html>