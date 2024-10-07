// Selecciona el botón del menú y la navegación
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

// Agrega un evento 'click' al botón del menú
menuBtn.addEventListener("click", () => {
    // Selecciona el ícono dentro del botón del menú
    var icon = menuBtn.querySelector("i");
    
    // Alterna la clase del ícono para cambiar entre el icono de menú y el de cerrar
    icon.classList.toggle("fa-bars"); // Muestra el icono de 'hamburguesa'
    icon.classList.toggle("fa-xmark"); // Muestra el icono de 'cerrar'
    
    // Alterna la clase 'active' en la navegación para mostrar/ocultar el menú
    navigation.classList.toggle("active"); // Muestra u oculta el menú
});


