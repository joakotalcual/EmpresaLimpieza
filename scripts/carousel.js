const slides = document.querySelectorAll(".slide");
let currentIndex = 0;
const totalSlides = slides.length;
const slideWidth = slides[0].offsetWidth; // Ancho de cada slide

// Función para mover los slides
const moveToSlide = (index) => {
    // Movimiento circular
    if (index < 0) {
        index = totalSlides - 1; // Mover al último slide
    } else if (index >= totalSlides) {
        index = 0; // Mover al primer slide
    }
    slides.forEach((slide, i) => {
        const offset = (i - index) * 100; // Desplazamiento relativo
        slide.style.transform = `translateX(${offset}%)`; // Desplazar el slide
    });
    currentIndex = index;
};

// Botón de retroceso
document.getElementById("back-button").addEventListener("click", () => {
    moveToSlide(currentIndex - 1); // Mover al slide anterior
});

// Botón de avance
document.getElementById("forward-button").addEventListener("click", () => {
    moveToSlide(currentIndex + 1); // Mover al siguiente slide
});

// Mover al primer slide al cargar
moveToSlide(currentIndex);
