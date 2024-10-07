// Inicializamos Swiper para el contenedor con la clase "mySwiper"
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1, // Número de diapositivas visibles a la vez
    spaceBetween: 80, // Espacio entre las diapositivas en píxeles
    loop: true, // Habilita el bucle infinito
    autoplay: {
        delay: 5000, // Cambia automáticamente la diapositiva cada 5 segundos
        disableOnInteraction: false, // No desactiva el autoplay al interactuar con el carrusel
    },
    navigation: {
        nextEl: '.swiper-button-next', // Selección del botón "Siguiente"
        prevEl: '.swiper-button-prev', // Selección del botón "Anterior"
    },
    speed: 600, // Velocidad de transición entre diapositivas en milisegundos
    simulateTouch: false, // Desactiva el arrastre con el cursor
    breakpoints: {
        991: {
            slidesPerView: 2
        }
    }
});
