<?php

    require 'includes/funciones.php';
   
    incluyetemplate('header');
?>
    
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <dic class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </dic>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto reiciendis quam assumenda deleniti unde magni in nesciunt explicabo. Dolore quasi molestias culpa, hic facilis consequatur id laboriosam modi porro! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam minima inventore illum omnis explicabo laudantium adipisci voluptates eos ducimus alias, reiciendis sapiente vel ipsa obcaecati dicta minus ullam doloribus tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ipsam modi provident reiciendis minima magnam aliquam reprehenderit fugiat id maxime fuga enim, accusamus dolorem asperiores incidunt exercitationem praesentium ullam ut?
                </p>
            </div>

        </div>
    </main>

    <section class="contenedor seccion">
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
    </section>

    <?php
        incluyetemplate('footer');

    ?>