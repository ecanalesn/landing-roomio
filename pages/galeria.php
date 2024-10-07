<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    
    <!-- Importa los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Importa los estilos de Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    
    <!-- Archivo CSS propio -->
    <link rel="stylesheet" href="../resources/css/global.css"/>
    <link rel="stylesheet" href="../resources/css/galeria.css"/>
    
</head>
<body>
    <!-- Incluye el menú -->
    <?php include '../includes/menu.php'; ?> 
    
    <!-- Encabezado  -->
    <h2>
        <a class="titulo">Nuestros alojamientos</a> 
    </h2>
    
    <!-- Contenedor principal del carrusel -->
    <div class="swiper mySwiper container">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Hotel</h3>
                    <p>Habitación</p>
                </div>
                <img src="../resources/img/hotel.png" alt="Habitación del hotel">
            </div>

            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Hotel</h3>
                    <p>Exterior con piscina</p>
                </div>
                <img src="../resources/img/hotel1.png" alt="Exterior del hotel con piscina">
            </div>

            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Casa Rural</h3>
                    <p>Habitación doble</p>
                </div>
                <img src="../resources/img/casarural.png" alt="Habitación doble en casa rural">
            </div>

            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Casa Rural</h3>
                    <p>Exteriores de la casa</p>
                </div>
                <img src="../resources/img/casarural1.png" alt="Exteriores de casa rural">
            </div>

            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Bungalow</h3>
                    <p>Habitación doble</p>
                </div>
                <img src="../resources/img/bungalow.png" alt="Habitación en bungalow">
            </div>

            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Bungalow</h3>
                    <p>Exterior</p>
                </div>
                <img src="../resources/img/bungalow1.png" alt="Exterior de bungalow">
            </div>

            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Camping</h3>
                    <p>Habitación</p>
                </div>
                <img src="../resources/img/camping.png" alt="Habitación en camping">
            </div>

            <div class="swiper-slide">
                <div class="swiper-txt">
                    <h3>Camping</h3>
                    <p>Exteriores</p>
                </div>
                <img src="../resources/img/camping1.png" alt="Exteriores del camping">
            </div>
        </div>

        <!-- Botones de navegación -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>    
    </div>

    <!-- Incluye los scripts de Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    
    <!-- Archivo JavaScript -->
    <script src="../resources/js/global.js"></script>
    <script src="../resources/js/galeria.js"></script>
</body>
</html>
