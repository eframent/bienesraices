<?php

    require 'includes/funciones.php';
   
    incluyetemplate('header');
?>
    
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

    <?php
        incluyetemplate('footer');

    ?>