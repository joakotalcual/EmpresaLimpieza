<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleaning Solution</title>
    <link rel='stylesheet' href='estilos/estilos.css'>
    <link rel='stylesheet' href='estilos/header.css'>
    <link rel='stylesheet' href='estilos/principal.css'>
    <link rel='stylesheet' href='estilos/tablet.css'>
    <link rel='stylesheet' href='estilos/movil.css'>
    <script src='https://kit.fontawesome.com/d188054eba.js' crossorigin='anonymous'></script>
    <script src='https://code.jquery.com/jquery-3.7.1.js' crossorigin='anonymous'></script>
    <script src="scripts/responsiveslides.min.js"></script>
</head>
<body>
    <?php require 'header.html';?>
    <section class="Slide">
        <ul class="rslides">
            <li><img src="recursos/slide.jpg" alt=""></li>
            <li><img src="recursos/slide1.jpg" alt=""></li>
            <li><img src="recursos/slide2.jpg" alt=""></li>
            <li><img src="recursos/slide3.jpg" alt=""></li>
        </ul>
        <div class="informacionSlide">
            <h2>Offering high quality cleaning
                <span>services at affordable prices</span></h2>
            <p>Quisque suscipit lacus vestibulum odio rhoncus, non iaculis lectus mattis. Integer mattis tempus neque, eget tincidunt nibh tin cidunt ac. Maecenas feugiat lorem ut nibh maximus tempus. Vestibulum facilisis ligula urna, vitae cursus tortor malesuada eu. Morbi quis lectus non nunc varius varius sed nec neque. Vestibulum ante ipsum primis in faucibus orci luctus</p>
        </div>
        <div class="filtro"></div>
    </section>
    <section class="curved-div">
        <h2>Our Core Values</h2>
        <div class="separador">

        </div>
        <p>Vestibulum facilisis ligula urna, vitae cursus tortor malesuada eu. Morbi quis lectus non nunc varius varius sed nec neque. Vestibul
        um ante ipsum primis in faucibus orci luctus et ultrices posuere</p>
        <article>
            <span>01</span>
            <h3>Vestibulum facilisis ligula</h3>
            <p>Vestibulum facilisis ligula urna, vitae cursus tortor malesuada eu. Morbi quis lectus non nunc varius varius sed nec neque. Vestibul</p>
        </article>
        <article>
            <span>02</span>
            <h3>ligula urna vitae cursus</h3>
            <p>Morbi quis lectus non nunc varius varius sed nec neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultri</p>
        </article>
        <article>
            <span>03</span>
            <h3>urna vitae cursus tort</h3>
            <p>Vestibulum ante ipsum primis in faucibus or ciluctus et ultrices posuere cubilia Curaraesent non sapien cursus blandit turp</p>
        </article>
    </section>

    <section class="features ancho">
        <h2>Some of Out Great Feature</h2>
        <div class="separador">

        </div>
        <div class="subtitle">
            <p>Morbi quis lectus non nunc varius varius sed nec neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
            cubilia Curaesent non sapien cursus blandit turpis lacinia vestibulum</p>
        </div>
        <div class="tripleContenido">
            <article>
                <h3>FACILISIS LIGULA</h3>
                <p>Morbi quis lectus non nunc varius arius sed nec neque. Vestibulum ante ipsum primis in faucibus</p>
                <h3>DAEU MORBI QULECTUS</h3>
                <p>Ultrices posuere cubilia Curae; Praesent non sapien cursus, blandit turpis lacinia, vestibulum</p>
            </article>
            <article>
                <figure>
                    <img src="recursos/cazo.jpg" alt="Texto descriptivo">
                </figure>
            </article>
            <article>
                <h3>SUSORTOR MALESUADA</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent non</p>
                <h3>MALESUADA EU MORBI QUIS</h3>
                <p>Faucibus orci luctus et ultrices posuere cubilia CurPraesent non sap ien cursus, blandit turpis</p>
            </article>
        </div>
    </section>

    <section id="carousel" class="services">
        <h2>Services We Offer</h2>
        <div class="separador">
        </div>
        <div id="slide-container" class="cuadrupleContenido">
            <article class="slide" data-slideIndex="0">
                <figure>
                    <img src="recursos/service1.jpg" alt="Texto descriptivo">
                </figure>
                <p>OFFICE & COMMERCIAL CLEANING</p>
            </article>
            <article class="slide" data-slideIndex="1">
                <figure>
                    <img src="recursos/service2.jpg" alt="Texto descriptivo">
                </figure>
                <p>WINDOWS & DOORS CLEANING</p>
            </article>
            <article class="slide" data-slideIndex="2">
                <figure>
                    <img src="recursos/service3.jpg" alt="Texto descriptivo">
                </figure>
                <p>HOUSE CLEANING & MAID SERVICE</p>
            </article>
            <article class="slide" data-slideIndex="3">
                <figure>
                    <img src="recursos/service4.jpg" alt="Texto descriptivo">
                </figure>
                <p>CARPET AND UPHOLSTERY CLEANING</p>
            </article>
        </div>
        <div class="contenedor_flechas">
                <button href="#" id="back-button" class="arrow back">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button href="#" id="forward-button" class="arrow forward">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
    </section>
    <!-- <section id="carousel">
            <div id="slide-container">
                <article class="slide" data-slideIndex="0">
                    <figure>
                        <img src="imagenes/foto1.jpg" alt="Texto descriptivo">
                    </figure>
                    <h3>John Tuff</h3>
                    <p>Field Technician</p>
                </article>
                <article class="slide" data-slideIndex="2">
                    <figure>
                        <img src="imagenes/foto3.jpg" alt="Texto descriptivo">
                    </figure>
                    <h3>Frank McMillan</h3>
                    <p>General Manager</p>
                </article>
                <article class="slide" data-slideIndex="3">
                    <figure>
                        <img src="imagenes/foto4.jpg" alt="Texto descriptivo">
                    </figure>
                    <h3>John Smith</h3>
                    <p>Field Technician</p>
                </article>
                <article class="slide" data-slideIndex="4">
                    <figure>
                        <img src="imagenes/foto5.jpg" alt="Texto descriptivo">
                    </figure>
                    <h3>John Smith</h3>
                    <p>Field Technician</p>
                </article>
            </div>
        </section> -->
    <!-- ADEMAS DE LA LANDINGPAGE ME FALTARIA AGREGAR VIDEO, PARALLAXS, ACORDEON, LIGHTBOX, MODAL Y FILTRO -->

    <?php require 'footerPrincipal.html';?>

    <script>
        // SCRIPT SLIDE
        $(function() {
            $(".rslides").responsiveSlides({
                auto: true,         // Cambia de imagen automáticamente
                speed: 500,         // Velocidad de la transición
                timeout: 4000,      // Tiempo entre transiciones
                pager: false,       // Oculta la paginación
                nav: true,          // Activa las flechas de navegación
                prevText: "&#x3C;", // Usa el icono "<" para el botón anterior
                nextText: "&#x3E;", // Usa el icono ">" para el botón siguiente
                random: false,      // No aleatoriza el orden de las imágenes
                pause: false,        // Pausa el cambio de imagen al pasar el cursor
                pauseControls: true // Pausa al pasar el cursor sobre los controles
            }
            );
        });
        // SCRIPT MENU RESPONSIVE
        document.addEventListener('DOMContentLoaded', () => {
            const menu = document.querySelector('.menu');
            const toggleButton = document.querySelector('.menu-toggle');

            toggleButton.addEventListener('click', () => {
                menu.classList.toggle('show');
            });
        });
    </script>
    <script src="scripts/carousel.js"></script>
</body>
</html>