<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header">
        <div class="contenedor contenido-header">

            <div class="barra">
                <a href="/">
                    <img src="build/img/logo.svg" alt="Logo Bienes Raices">
                </a>               
                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu reponsive">
                </div>

                <div class="derecha">
                    <img src="build/img/dark-mode.svg" alt="" class="dark-mode-boton">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div> <!-- cierre de barra -->
            
        </div>
    </header>
    
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="imagen destacada" loading="lazy">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">3.000.000$</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>                   

            
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono dormitorio" >
                    <p>3</p>
                </li>
            
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" >
                    <p>4</p>
                </li>
            </ul>


            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto reiciendis quam assumenda deleniti unde magni in nesciunt explicabo. Dolore quasi molestias culpa, hic facilis consequatur id laboriosam modi porro! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam minima inventore illum omnis explicabo laudantium adipisci voluptates eos ducimus alias, reiciendis sapiente vel ipsa obcaecati dicta minus ullam doloribus tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ipsam modi provident reiciendis minima magnam aliquam reprehenderit fugiat id maxime fuga enim, accusamus dolorem asperiores incidunt exercitationem praesentium ullam ut?
            </p>
            

        </div>
    
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos Reservados 2023 &copy; </p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>