<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description" content="Conoce quienes somos, nuestra misión y visión como empresa con el fin de brindar una buena experiencia al cliente.">
    
    <title >Nosotros</title>
    <link rel="icon" type="image/x-icon" href="public/nosotros/logowhite2.webp">
    <link rel="stylesheet" href="<?=URL?>public/css/normalize.css">
    <link rel="stylesheet"  href="public/css/nosotros.css">
    <link rel="stylesheet" href="public/css/csswasap.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <?php require_once("views/layouts/enlaces.php") ?>

</head>
<body>
    <?php require_once("views/layouts/navbar.php")?>

    <main class="main">
        <div style="padding: 0.5em; position: relative; top: 10px" class="row only-card">
            <h3>Nuestra misión</h3>
            <div class="text">
                <img src="#" alt="#" class="img-text">
                <p>HACER REALIDAD LAS IDEAS DE NUESTROS CLIENTES CON NUESTROS PRODUCTOS CON LA MEJOR CALIDAD A UN PRECIO IDEA</p>
            </div>
        </div>
        <div class="row only-card">
            <h3>Nuestra visión</h3>
            <div class="text">
                <p>SER LA EMPRESA QUE EXPRESE INNOVACIÓN Y CREATIVIDAD EN EL MUNDO DE LA PUBLICIDAD, BUSCANDO EVOLUCIONAR EN NUESTROS PROCESOS IMPLEMENTANDO LA TECNOLOGÍA MAS EFICIENTE</p>
                <img src="#" alt="#" class="img-text">
            </div>
        </div>
        <div class="row only-card">
            <h3>Nuestros valores</h3>
            <div class="text">
                <img src="#" alt="#" class="img-text">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, aliquam in necessitatibus eius ex natus itaque beatae officia est nesciunt, voluptatem similique minus libero veritatis repudiandae possimus architecto modi neque.</p>
            </div>
        </div>
        <div class="row only-card">
            <h3>Nuestros compromiso</h3>
            <div class="row" style="padding: 0;">
                <div class="col-12 col-sm-4 cards">
                    <img src="#" alt=" ">
                    <h4>Poner el compromiso</h4>
                </div>
                <div class="col-12 col-sm-4 cards">
                    <img src="#" alt=" ">
                    <h4>Poner el compromiso</h4>
                </div>
                <div class="col-12 col-sm-4 cards">
                    <img src="#" alt=" ">
                    <h4>Poner el compromiso</h4>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once("views/layouts/footer.php") ?>
</body>
</html>