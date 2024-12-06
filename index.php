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

    <?php require 'footerPrincipal.html';?>

    <script>
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
        document.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu');
    const toggleButton = document.querySelector('.menu-toggle');

    toggleButton.addEventListener('click', () => {
        menu.classList.toggle('show');
    });
});

    </script>
</body>
</html>