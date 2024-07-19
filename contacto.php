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
    
    <main class="contenedor seccion ">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="imagen contacto" loading="lazy">
        </picture>

        <h2>Llene el formulario de Contacto</h2>

        <form class="formulario" action="">
            <fieldset>
                <legend> Información Personal</legend>
               
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre" >

                <label for="email">E-mail</label>
                <input type="text" placeholder="Tu Email" id="email" >

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Numero de Telefono" id="telefono" >
           
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la Propiedad</legend>
                <label for="opciones">vende o compra</label>
                <select  id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="">Compra</option>
                    <option value="">Vende</option>
                </select>

                <label for="precio">Precio o Presupuesto</label>
                <input type="number" id="precio" placeholder="Tu Precio o Presupuesto">
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la propiedad</legend>
                <p>Como desea ser contactado:</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label> 
                    <input name="contacto" type="radio" id="contactar-telefono" value="telefono">

                    <label for="contactar-email">Email</label> 
                    <input name="contacto" type="radio" id="contactar-email" value="email">
                </div>

                <p>Si eligio telefono elija fecha y hora</p>

                <label for="fecha" >Fecha:</label>
                <input type="date" id="fecha" >

                <label for="hora" >Time:</label>
                <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">

        </form>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nostros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contato</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos Reservados 2023 &copy; </p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>