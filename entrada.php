<?php

    require 'includes/funciones.php';
   
    incluyetemplate('header');
?>
    
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="imagen destacada" loading="lazy">
        </picture>
        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iusto reiciendis quam assumenda deleniti unde magni in nesciunt explicabo. Dolore quasi molestias culpa, hic facilis consequatur id laboriosam modi porro! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam minima inventore illum omnis explicabo laudantium adipisci voluptates eos ducimus alias, reiciendis sapiente vel ipsa obcaecati dicta minus ullam doloribus tempore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ipsam modi provident reiciendis minima magnam aliquam reprehenderit fugiat id maxime fuga enim, accusamus dolorem asperiores incidunt exercitationem praesentium ullam ut?
        </p>
    </main>

    <?php
        incluyetemplate('footer');

    ?>