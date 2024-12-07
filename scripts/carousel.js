function autoplayCarousel() {
  const slideContainerEl = document.getElementById("slide-container");
  const slides = document.querySelectorAll(".slide");
  let slideWidth = slides[0].offsetWidth;

  // Actualizar el ancho del slide al redimensionar la ventana
  window.addEventListener("resize", () => {
    slideWidth = slides[0].offsetWidth;
  });

  const navigate = (direction) => {
    const maxScrollLeft = slideContainerEl.scrollWidth - slideContainerEl.clientWidth;

    if (direction === "forward") {
      let newScrollLeft = slideContainerEl.scrollLeft + slideWidth;
      if (newScrollLeft > maxScrollLeft) {
        newScrollLeft = 0; // Volver a la primera posición
      }
      slideContainerEl.scrollLeft = newScrollLeft;
    } else if (direction === "backward") {
      let newScrollLeft = slideContainerEl.scrollLeft - slideWidth;
      if (newScrollLeft < 0) {
        newScrollLeft = maxScrollLeft; // Ir a la última posición
      }
      slideContainerEl.scrollLeft = newScrollLeft;
    }
  };

  document.getElementById("back-button").addEventListener("click", () => navigate("backward"));
  document.getElementById("forward-button").addEventListener("click", () => navigate("forward"));

  // Configurar autoplay para moverse hacia adelante
  const autoplay = setInterval(() => navigate("forward"), 5000);

  // Pausar autoplay al pasar el ratón por encima
  slideContainerEl.addEventListener("mouseenter", () => clearInterval(autoplay));
  slideContainerEl.addEventListener("mouseleave", () => setInterval(() => navigate("forward"), 5000));
}

autoplayCarousel();
