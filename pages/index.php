<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roomio</title>
    
    <!-- Importa los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    
    <!-- Archivo CSS propio -->
    <link rel="stylesheet" href="../resources/css/global.css"/>
    <link rel="stylesheet" href="../resources/css/index.css"/>
</head>
<body>
    <!-- Incluye el menú -->
    <?php include '../includes/menu.php'; ?> 

    <!-- Sección principal con videos y contenido -->
    <section class="home">
        <!-- Videos de presentación -->
        <video class="video-slide active" src="../resources/videos/hotel.mp4" autoplay muted loop></video>
        <video class="video-slide" src="../resources/videos/casarural.mp4" autoplay muted loop></video>
        <video class="video-slide" src="../resources/videos/bungalow.mp4" autoplay muted loop></video>
        <video class="video-slide" src="../resources/videos/camping.mp4" autoplay muted loop></video>

        <!-- Contenido de la página -->
        <div class="content active">
            <h1>Hotel<br><span>Resort</span></h1>
            <p>Descubre nuestro hotel resort, donde el confort se encuentra con la elegancia en un entorno paradisíaco. Disfruta de un escapada inolvidable con servicios de primera clase y vistas impresionantes.</p>
            <!-- Enlace a la página de galería -->
            <a href="galeria.php">Ver más</a>
        </div>

        <div class="content">
            <h1>Casa<br><span>Rural</span></h1>
            <p>Sumérgete en el encanto de nuestra casa rural, un refugio acogedor en el corazón del campo. Ideal para una escapada tranquila, con un ambiente rústico y todas las comodidades.</p>
            <!-- Enlace a la página de galería -->
            <a href="galeria.php">Ver más</a>
        </div>

        <div class="content">
            <h1>Bungalow<br><span>Acogedor</span></h1>
            <p>Relájate en la serenidad de nuestro bungalow, rodeado de naturaleza. Disfruta de un ambiente encantador con todas las facilidades para una estancia única.</p>
            <!-- Enlace a la página de galería -->
            <a href="galeria.php">Ver más</a>
        </div>

        <div class="content">
            <h1>Camping<br><span>Familiar</span></h1>
            <p>Vive una aventura auténtica en nuestro camping, donde la naturaleza y el bienestar se encuentran. Una experiencia al aire libre en un entorno relajante.</p>
            <!-- Enlace a la página de galería que abre en una nueva pestaña -->
            <a href="galeria.php">Ver más</a>
        </div>

        <!-- Controles de navegación del slider -->
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
    </section>

    <!-- Archivo JavaScript -->
    <script src="../resources/js/global.js"></script>
    <script src="../resources/js/index.js"></script>    
</body>
</html>
