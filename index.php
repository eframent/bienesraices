<?php

    require 'includes/funciones.php';
   
    incluyetemplate('header',  $inicio = true  );
?>
    
    <main class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem veritatis consequatur nobis cumque iure minus odit aliquam. </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem veritatis consequatur nobis cumque iure minus odit aliquam. </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem veritatis consequatur nobis cumque iure minus odit aliquam. </p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con impresionante vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">€900.000</p>

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
                    <a href="anuncio.php" class="boton-amarillo-block">Ver Propiedad</a>
                </div> <!-- cierre de contenido-anuncio -->
            </div>  <!-- anuncio -->

            
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de terminados de lujo</h3>
                    <p>Casa en el lago con impresionante vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">€1.500.000</p>

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
                    <a href="anuncio.php" class="boton-amarillo-block">Ver Propiedad</a>
                </div> <!-- cierre de contenido-anuncio -->
            </div>  <!-- anuncio -->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con Piscina</h3>
                    <p>Casa en el lago con impresionante vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">€2.900.000</p>

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
                    <a href="anuncio.php" class="boton-amarillo-block">Ver Propiedad</a>
                </div> <!-- cierre de contenido-anuncio -->
            </div>  <!-- anuncio -->



        </div> <!-- contenedor-anuncios  -->

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>

    </section>
    

    <section class="imagen-contacto">
        <h2>Encuentra la Casa de tus Sueños</h2>
        <p>Llena el formulrio de contacto y un asesor se pondra en contacto contigo</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">  
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="build/img/blog1.jpg" alt="Texto entrada blog" loading="lazy">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el Techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">  
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="build/img/blog2.jpg" alt="Texto entrada blog" loading="lazy">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                        <p>
                            Maximiza el espacio de tu hogar con esta increible guía, aprende a combinar muebles y colores para darle vida a tu espacio.
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <!-- fin de seccion con imagenes del blog  -->

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas las espectativas.
                </blockquote>
                <p>- Fulano de la Vega</p>
            </div>
        </section>
    </div>

    <?php
        incluyetemplate('footer');

    ?>