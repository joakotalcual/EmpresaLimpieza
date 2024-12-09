function setupCarousel() {
  const slideContainer = document.getElementById("slide-container");
  const slides = document.querySelectorAll(".slide");
  let currentIndex = 0; // Índice para rastrear el slide visible

  const moveToSlide = (index) => {
    // Evita que el índice sea negativo o mayor al límite de los slides
    if (index < 0) {
      index = slides.length - 1; // Desplazarse al último slide
    } else if (index >= slides.length) {
      index = 0; // Desplazarse de vuelta al primer slide
    }
    slideContainer.scrollTo({
      left: slides[0].offsetWidth * index, // Moverse horizontalmente
      behavior: "smooth"
    });
    currentIndex = index; // Actualiza el índice actual
  };

  // Configurar los eventos para las flechas
  document.getElementById("forward-button").addEventListener("click", () => {
    moveToSlide(currentIndex + 1);
  });

  document.getElementById("back-button").addEventListener("click", () => {
    moveToSlide(currentIndex - 1);
  });
}

// Llamar a la función para configurar el carrusel después de que el DOM esté listo
document.addEventListener("DOMContentLoaded", setupCarousel);
