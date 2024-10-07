// Seleccionar todos los botones de navegación y las diapositivas de video
const btns = document.querySelectorAll(".nav-btn"); // Botones de navegación
const slides = document.querySelectorAll(".video-slide"); // Diapositivas de video
const contents = document.querySelectorAll(".content"); // Contenidos asociados a cada diapositiva

// Función para manejar la navegación del slider
var sliderNav = function(manual) {
    // Remover la clase 'active' de todos los botones, diapositivas y contenidos
    btns.forEach((btn) => {
        btn.classList.remove("active");
    });

    slides.forEach((slide) => {
        slide.classList.remove("active");
    });

    contents.forEach((content) => {
        content.classList.remove("active");
    });
    
    // Agregar la clase 'active' al botón, diapositiva y contenido correspondiente
    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
    contents[manual].classList.add("active");
}

// Agregar un event listener a cada botón de navegación
btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        sliderNav(i); // Llamar a la función sliderNav con el índice del botón
    });
});
