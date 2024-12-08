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
    <section class="bgColor whyChoose">
        <h2>Why Choose Us</h2>
        <div class="separador">
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <i class="fa-solid fa-mug-hot"></i>
                <div class="contenidoChoose">
                    <h3>MALESUADA ACSUSC</h3>
                    <p>Vivamus ultricies sem at consectetur euismod. Ut mi justo, accumsan sed malesuada ac, suscip.</p>
                </div>
            </div>
            <div class="grid-item">
                <i class="fa-solid fa-chair"></i>
                <div class="contenidoChoose">
                    <h3>ONSECTETUR EUISMOD</h3>
                    <p>Ut mi justo, accumsan sed malesua da ac, suscipit in orci. Nulla ac dui digni ssim lectus tempor egest.</p>
                </div>
            </div>
            <div class="grid-item">
                <i class="fa-solid fa-user"></i>
                <div class="contenidoChoose">
                    <h3>CUMSAN SED MALESUADA</h3>
                    <p>Curabitur turpis arcu, bibendum a orci at, dapibus euismod leo. Mauris efficitur faucibus leo id iaculis.</p>
                </div>
            </div>
            <div class="grid-item">
                <i class="fa-solid fa-sun"></i>
                <div class="contenidoChoose">
                    <h3>SEM AT CONSECTETUR</h3>
                    <p>Suscipit in orci. Nulla ac dui dignissim lectus tempor egestas id at velit. Curabi tur turpis arcu, bibendum.</p>
                </div>
            </div>
            <div class="grid-item">
                <i class="fa-solid fa-house"></i>
                <div class="contenidoChoose">
                    <h3>SEM AT CONSECTETUR</h3>
                    <p>Curabitur turpis arcu, bibendum a orci at, dapibus euismod leo. Mauris efficitur faucibus leo id iaculis.</p>
                </div>
            </div>
            <div class="grid-item">
                <i class="fa-solid fa-star"></i>
                <div class="contenidoChoose">
                    <h3>JUSTO ACCUMSAN SED</h3>
                    <p>Nulla ac dui dignissim lectus tempor egestas id at velit. Curabitur turpis arcu, bibendum a orci at, dapib.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="whatPeople">
        <h2>What People Say About Us</h2>
        <div class="separador">
        </div>
        <div class="profiles">
            <article>
                <figure>
                    <img src="recursos/profile1.jpg" alt="Texto descriptivo">
                </figure>
                <h3>TRISS MERIGOLD</h3>
                <button class="btnViewMore">View more</button>
            </article>
            <article>
                <figure>
                    <img src="recursos/profile2.jpg" alt="Texto descriptivo">
                </figure>
                <h3>MARK JOHNSON</h3>
                <button class="btnViewMore">View more</button>
            </article>
            <article>
                <figure>
                    <img src="recursos/profile3.jpg" alt="Texto descriptivo">
                </figure>
                <h3>YENNEFER Z VENGERBERGU</h3>
                <button class="btnViewMore">View more</button>
                <!-- crear el modal para más información y tener el filtro y el video respectivo de cada integrante -->
            </article>
        </div>
    </section>

    <section class="contact">
        <h2>Contact form</h2>
        <div class="separador">
        </div>
        <form action="#" method="post" class="form-container">
            <div class="row">
                <div class="input-container">
                <input type="text" id="name" name="name" placeholder=" " required>
                <label for="name">Your Name</label>
                </div>
                <div class="input-container">
                <input type="text" id="email" name="email" placeholder=" " required>
                <label for="email">Your E-mail</label>
                </div>
                <div class="input-container">
                <input type="text" id="phone" name="phone" placeholder=" " required>
                <label for="phone">Your Phone</label>
                </div>
            </div>
            <div class="textarea-container">
                <textarea name="message" id="message" placeholder=" " required></textarea>
                <label for="message">Your Message</label>
            </div>
            <button type="submit">Submit comment</button>
            </form>
    </section>
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